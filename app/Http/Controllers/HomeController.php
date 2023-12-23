<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LowonganPekerjaan;
use App\Models\Pelamar; // Import the Pelamar model
use App\Models\RiwayatPendidikan;
use App\Models\RiwayatKerja;
use App\Models\KeterampilanPelamar;
use App\Models\Keterampilan;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Total Peneliti
        $totalUser = User::count();
        $totalLoker = LowonganPekerjaan::count();
        $totalPelamar = Pelamar::where('status', 'Pending')->count();
        $totalInterview = Pelamar::where('status', 'Lolos Seleksi')->count();

        $lowonganPekerjaan = LowonganPekerjaan::all();

        $data = [];

        foreach ($lowonganPekerjaan as $lowongan) {
            $countPelamar = Pelamar::where('id_lowongan_pekerjaan', $lowongan->id)->count();
            $countPending = Pelamar::where('id_lowongan_pekerjaan', $lowongan->id)->where('status', 'Pending')->count();
            $countInterview = Pelamar::where('id_lowongan_pekerjaan', $lowongan->id)->where('status', 'Lolos Seleksi')->count();

            $data[] = [
                'lowongan' => $lowongan,
                'jumlahPelamar' => $countPelamar,
                'jumlahPending' => $countPending,
                'jumlahInterview' => $countInterview,
            ];
        }
        $user = Auth::user();
        $pelamar = $user->pelamar;
        // dd($user);
        return view('dashboard',[
            'totalUser' => $totalUser,
            'totalLoker' => $totalLoker,
            'totalPelamar' => $totalPelamar,
            'totalInterview' => $totalInterview,
            'data' => $data,
            'user' => $user,
        ]);
    }

    public function welcome() {
        $loker = LowonganPekerjaan::all();
        // dd($loker);
        // $tanggalLahir = Carbon::parse($loker->kelahiran);
        // $usia = $tanggalLahir->diffInYears(Carbon::now());
        return view('welcome', compact('loker'));
    }

    public function daftar($id)
    {
        $randomText = $this->generateRandomText();
        session(['captcha_text' => $randomText]);

        $loker = LowonganPekerjaan::findOrFail($id);
        return view('daftar', compact('loker','randomText')); // Replace 'loker.create' with the actual view name
    }


    public function insertData(Request $request)
{
    // Validate the request data as needed
    $request->validate([
        'username' => 'required|string',
        'password' => 'required|string|min:8',
        'nama_depan' => 'required|string',
        'nama_belakang' => 'required|string',
        'nik' => 'required|numeric|min:1000000000000000',
        'email' => 'required|email',
        'pekerjaan' => 'required|string',
        'jenis_kelamin' => 'required|string',
        'tgl_lahir' => [
            'required',
            'date',
            'before_or_equal:' . $request->input('kelahiran'),
        ],
        'nomor_telepon' => 'required|numeric',
        'alamat' => 'required|string',
        'cv' => 'required|file|mimes:pdf',
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'captcha' => 'required',
        'captcha_text' => 'required',
    ], [
        'tgl_lahir.before_or_equal' => 'Umur tidak memenuhi syarat.',
        'nik.min' => 'NIK must be at least 16 digits long.',
    ]);

    if ($request->input('jenis_kelamin') !== $request->input('jk')) {
        return redirect()->back()->with('error', 'Jenis Kelamin tidak sesuai dengan persyaratan lowongan.');
    }

    $userInput = $request->input('captcha');
    $captchaText = $request->input('captcha_text');

    if ($userInput === $captchaText) {
        $selectedJob = LowonganPekerjaan::where('judul_pekerjaan', $request->input('pekerjaan'))->first();

    if (!$selectedJob) {
        return back()->with('error', 'Invalid job selection');
    }

    // Insert Pelamar data
    $pelamar = new Pelamar();
    $pelamar->id_lowongan_pekerjaan = $selectedJob->id;
    $pelamar->nama_depan = $request->input('nama_depan');
    $pelamar->nama_belakang = $request->input('nama_belakang');
    $pelamar->nik = $request->input('nik');
    $pelamar->email = $request->input('email');
    $pelamar->alamat = $request->input('alamat');
    $pelamar->jenis_kelamin = $request->input('jenis_kelamin');
    $pelamar->tgl_lahir = $request->input('tgl_lahir');
    $pelamar->nomor_telepon = $request->input('nomor_telepon');
    $pelamar->status = 'Pending';
    // Upload and save the photo
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $fotoEkstensi = $foto->getClientOriginalExtension();
        $fotoNama = date('Y-m-d') . '_' . time() . '.' . $fotoEkstensi;
        Storage::putFileAs('public/foto_pelamar', $foto, $fotoNama);
        $pelamar->foto = $fotoNama;
    }
    if ($request->hasFile('cv')) {
        $pdf = $request->file('cv');
        $pdfEkstensi = $pdf->getClientOriginalExtension();
        $pdfNama = date('Y-m-d') . '_' . time() . '.' . $pdfEkstensi;
        Storage::putFileAs('public/pdf_pelamar', $pdf, $pdfNama);
        $pelamar->cv = $pdfNama;
    }
    

    $pelamar->save();

    $user = new User();
    $user->id_pelamar = $pelamar->id;
    $user->username = $request->input('username');
    $user->name = $pelamar->nama_depan;
    $user->password = $request->input('password');
    $user->email = $pelamar->email;
    $user->address = $pelamar->alamat;
    $user->level='Pengguna';
    
    $user->save();

    if ($selectedJob->kuota > 0) {
        $selectedJob->kuota -= 1;
        $selectedJob->save();
    }

    return redirect()->route('login')->with('success', 'Data Berhasil Disimpan, Silahkan login untuk mengetahui info lebih lanjut');
    } else {
        // Teks CAPTCHA salah, tampilkan pesan kesalahan
        return redirect()->back()->with('error', 'Teks CAPTCHA salah. Silakan coba lagi.');
    }
}
    private function generateRandomText($length = 6)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $randomText = '';

        for ($i = 0; $i < $length; $i++) {
            $randomText .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomText;
    }

}
