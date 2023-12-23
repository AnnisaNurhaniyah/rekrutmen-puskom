@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'List Interview Pelamar'])
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
                        <h6>List Interview Pelamar</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Pelamar</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pekerjaan</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor Telepon</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Diterima</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Interview</th>
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
                                        <td class="text-center">
                                            <p class="text-sm mb-0">{{ $data->nama_depan }} {{ $data->nama_belakang }}</p>
                                        </td>                                        
                                        <td>
                                            <div class="px-3 py-1">
                                                <h6 class="mb-0 text-sm">{{ $data->lowongan_pekerjaan->judul_pekerjaan }}</h6>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm mb-0">{{ $data->nomor_telepon }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm mb-0">{{ $data->tgl_diterima }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-sm mb-0">{{ $data->tgl_interview }}</p>
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
