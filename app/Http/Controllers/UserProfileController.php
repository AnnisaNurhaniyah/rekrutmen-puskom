<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\User;

class UserProfileController extends Controller
{
    public function show()
    {
        $users = User::all(); // Retrieve all users from the database

        return view('users.index', ['users' => $users]);
    }

    public function create()
{
    // Logic untuk menampilkan halaman pembuatan pengguna
    return view('users.create');
}

public function store(Request $request)
{
    // Validasi data yang dimasukkan
    $validatedData = $request->validate([
        'username' => 'required|unique:users',
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required',
        // Tambahkan validasi untuk kolom lain sesuai kebutuhan
    ]);

    // Simpan data pengguna ke dalam database
    User::create($validatedData);

    // Redirect ke halaman daftar pengguna atau halaman lain yang sesuai
    return redirect()->route('user')->with('success', 'User berhasil ditambahkan.');
}


    public function delete($id)
{
    $user = User::find($id); // Menemukan pengguna berdasarkan ID
    if (!$user) {
        // Tambahkan logika penanganan jika pengguna tidak ditemukan
        return redirect()->route('user')->with('error', 'User not found');
    }
    
    $user->delete(); // Menghapus pengguna dari database

    return redirect()->route('user')->with('success', 'User deleted successfully');
}


    public function edit($id)
{
    $user = User::find($id); // Menemukan pengguna berdasarkan ID
    if (!$user) {
        // Tambahkan logika penanganan jika pengguna tidak ditemukan
        return redirect()->route('user')->with('error', 'User not found');
    }

    return view('users.edit', ['user' => $user]);
}


public function update(Request $request, $id)
{
    $user = User::findOrFail($id); // Ambil data pengguna berdasarkan id

    // Validasi data yang dimasukkan
    $validatedData = $request->validate([
        'username' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'address' => 'nullable|string|max:255',
        'level' => 'required|in:Admin,Pengguna',
    ]);

    // Simpan perubahan data pengguna
    $user->update($validatedData);

    return redirect()->route('user')->with('success', 'Data pengguna berhasil diperbarui.');
}

}
