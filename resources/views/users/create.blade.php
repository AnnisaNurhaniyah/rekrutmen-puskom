@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tambah User'])
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form action="{{ route('user.store') }}" method="POST">
                            @csrf
                            <!-- Input field untuk username -->
                            <div class="form-group">
                                <label for="username" class="form-control-label">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>

                            <!-- Input field untuk nama -->
                            <div class="form-group">
                                <label for="name" class="form-control-label">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>

                            <!-- Input field untuk email -->
                            <div class="form-group">
                                <label for="email" class="form-control-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <!-- Input field untuk password -->
                            <div class="form-group">
                                <label for="password" class="form-control-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>

                            <!-- Tambahan: Input field untuk alamat -->
                            <div class="form-group">
                                <label for="address" class="form-control-label">Alamat</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>

                            <!-- Tambahan: Input field untuk level -->
                            <div class="form-group">
                                <label for="level" class="form-control-label">Level</label>
                                <select class="form-control" id="level" name="level">
                                    <option value="Admin">Admin</option>
                                    <option value="Pengguna">Pengguna</option>
                                </select>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
