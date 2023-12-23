@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Lowongan Pekerjaan'])
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
                        <h6>Lowongan Pekerjaan</h6>
                        <a href="{{ route('loker.create') }}" class="btn btn-primary">Tambah Lowongan</a>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Judul Pekerjaan</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kuota</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi Pekerjaan</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kualifikasi</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Posting</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deadline</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lowonganPekerjaan as $key => $data)
                                    <tr>
                                        <td>
                                            <div class="px-3 py-1">
                                                <h6 class="mb-0 text-sm">{{ $key + 1 }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-3 py-1">
                                                <h6 class="mb-0 text-sm">{{ $data->judul_pekerjaan }}</h6>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm mb-0">{{ $data->kuota }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm mb-0">{{ $data->deskripsi_pekerjaan }}</p>
                                        </td>
                                        <td>
                                            <p class="text-sm mb-0">{{ $data->kualifikasi }}</p>
                                        </td>
                                        <td class="text-center">
                                        <p class="text-sm mb-0">{{ $data->tanggal_posting->format('d/m/Y') }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm mb-0">{{ $data->deadline->format('d/m/Y') }}</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center align-items-center">
                                            <a href="{{ route('loker.edit', $data->id) }}" class="text-sm font-weight-bold ps-2 cursor-pointer">Edit</a>
                                                <a href="{{ route('loker.delete', $data->id) }}" class="text-sm font-weight-bold ps-2 cursor-pointer" onclick="return confirm('Are you sure you want to delete this lowongan?')">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
