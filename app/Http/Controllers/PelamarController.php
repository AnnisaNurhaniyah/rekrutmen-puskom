<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelamar;
use App\Models\LowonganPekerjaan;
use App\Models\KeterampilanPelamar;
use App\Models\Keterampilan;
use App\Models\RiwayatPendidikan;
use App\Models\RiwayatKerja;
use Carbon\Carbon;

class PelamarController extends Controller
{
    public function index(Request $request)
    {
        $selectedLowonganId = $request->query('lowongan_id'); // Assuming 'lowongan_id' is the parameter name in the URL
        $selectedStatus = $request->query('status', 'Pending'); // Default to 'Pending' if no status is provided

        // Query to get applicants with the selected job vacancy and status
        $pelamar = Pelamar::with('lowongan_pekerjaan')
            ->where('status', $selectedStatus)
            ->when($selectedLowonganId, function ($query) use ($selectedLowonganId) {
                $query->where('id_lowongan_pekerjaan', $selectedLowonganId);
            })
            ->paginate(15);

        // Fetch all lowonganPekerjaan to be used in the filter dropdown
        $lowonganPekerjaan = LowonganPekerjaan::all();

        return view('pelamar.index', [
            'pelamar' => $pelamar,
            'lowonganPekerjaan' => $lowonganPekerjaan,
            'selectedStatus' => $selectedStatus,
        ]);
    }

public function show($id)
    {
        $pelamar = Pelamar::with('keterampilans')->find($id);
  

    if (!$pelamar) {
        return response()->json(['message' => 'Pelamar tidak ditemukan'], 404);
    }

    $keterampilans = $pelamar->keterampilans->map(function ($keterampilan) {
        return [
            'nama_keterampilan' => $keterampilan->nama_keterampilan,
            'tingkat_keterampilan' => $keterampilan->pivot->tingkat_keterampilan,
        ];
    });
        $pendidikan = RiwayatPendidikan::where('id_pelamar', $pelamar->id)->get();
        
        $pekerjaan = RiwayatKerja::where('id_pelamar', $pelamar->id)->get();
        

        return view('pelamar.detail', compact('pelamar','keterampilans','pendidikan','pekerjaan'));
    }

    public function acceptPelamar($id_pelamar)
{
    $pelamar = Pelamar::find($id_pelamar);

    if (!$pelamar) {
        return response()->json(['message' => 'Pelamar tidak ditemukan'], 404);
    }

    // Mengatur status dan tgl_diterima
    $pelamar->status = 'Lolos Seleksi';
    $pelamar->tgl_diterima = Carbon::now(); // Mengambil tanggal dan waktu saat ini

    // Menghitung tgl_interview 7 hari setelah diterima
    $tgl_interview = Carbon::now()->addDays(7);
    $pelamar->tgl_interview = $tgl_interview;

    $pelamar->save();

    return redirect()->route('pelamar.detail', $id_pelamar)->with('success', 'Pelamar Lolos Tahap Seleksi.');
}

public function declinePelamar($id_pelamar)
{
    $pelamar = Pelamar::find($id_pelamar);

    if (!$pelamar) {
        return response()->json(['message' => 'Pelamar tidak ditemukan'], 404);
    }

    $pelamar->status = 'Tidak Lolos';
    $pelamar->save();

    return redirect()->route('pelamar.detail', $id_pelamar)->with('danger', 'Pelamar telah ditolak.');
}
    
    public function interview()
    {
        $pelamar = Pelamar::with('lowongan_pekerjaan')
            ->where('status', 'Lolos Seleksi')
            ->paginate(15);

        
        return view('pelamar.interview', ['pelamar' => $pelamar]);
    }
    public function informasi($id)
    {
        $pelamar = Pelamar::with('keterampilans')->find($id);
  

    if (!$pelamar) {
        return response()->json(['message' => 'Pelamar tidak ditemukan'], 404);
    }

    $keterampilans = $pelamar->keterampilans->map(function ($keterampilan) {
        return [
            'nama_keterampilan' => $keterampilan->nama_keterampilan,
            'tingkat_keterampilan' => $keterampilan->pivot->tingkat_keterampilan,
        ];
    });
        $pendidikan = RiwayatPendidikan::where('id_pelamar', $pelamar->id)->get();
        
        $pekerjaan = RiwayatKerja::where('id_pelamar', $pelamar->id)->get();
        

        return view('pelamar.detail', compact('pelamar','keterampilans','pendidikan','pekerjaan'));
    }
}
