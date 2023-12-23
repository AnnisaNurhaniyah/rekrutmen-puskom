@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Data Pelamar'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Data Pelamar</h6>
                    
                    <form action="{{ route('pelamar') }}" method="get">
                        @csrf
                        <!-- <div class="col-md-6">
                        <div class="form-group">
                            <label for="lowongan_id" class="form-control-label">Filter berdasarkan pekerjaan:</label>
                            <select name="lowongan_id" class="form-control border border-2 p-2" onchange="this.form.submit()">
                                <option value=" {{ empty(request('lowongan_id')) ? 'selected' : '' }}">Tampilkan Semua</option>
                                @foreach ($lowonganPekerjaan as $lowongan)
                                    <option value="{{ $lowongan->id }}" {{ request('lowongan_id') == $lowongan->id ? 'selected' : '' }}>
                                        {{ $lowongan->judul_pekerjaan }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        </div> -->
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link {{ $selectedStatus == 'Pending' ? 'active' : '' }}" href="{{ route('pelamar', ['status' => 'Pending']) }}">Pending</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $selectedStatus == 'Lolos Seleksi' ? 'active' : '' }}" href="{{ route('pelamar', ['status' => 'Lolos Seleksi']) }}">Diterima</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ $selectedStatus == 'Tidak Lolos' ? 'active' : '' }}" href="{{ route('pelamar', ['status' => 'Tidak Lolos']) }}">Ditolak</a>
                            </li>
                        </ul>
                    </form>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pekerjaan</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIK</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pelamar</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis Kelamin</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Telepon</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pelamar as $key => $data)
                                    <tr>
                                        <td>
                                            <div class="px-3 py-1">
                                                <h6 class="mb-0 text-sm">{{ $key + 1 }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-3 py-1">
                                                <h6 class="mb-0 text-sm">{{ $data->lowongan_pekerjaan->judul_pekerjaan }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-sm mb-0">{{ $data->nik }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm mb-0">{{ $data->nama_depan }} {{ $data->nama_belakang }}</p>
                                        </td>                                        
                                        <td class="text-center">
                                            <p class="text-sm mb-0">{{ $data->jenis_kelamin }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm mb-0">{{ $data->email }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm mb-0">{{ $data->alamat }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm mb-0">{{ $data->nomor_telepon }}</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a href="{{ route('pelamar.detail', $data->id) }}" class="text-sm font-weight-bold ps-2 cursor-pointer">View Detail</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $pelamar->links('pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
