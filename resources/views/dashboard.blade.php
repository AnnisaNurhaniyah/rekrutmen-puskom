@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    @if(auth()->user()->isAdmin())
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah User </p><br>
                                    <h5 class="font-weight-bolder">
                                        {{$totalUser}}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-circle-08 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Lowongan Kerja</p>
                                    <h5 class="font-weight-bolder">
                                        {{$totalLoker}}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
                                    <i class="ni ni-briefcase-24 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Pelamar</p>
                                    <h5 class="font-weight-bolder">
                                        {{$totalPelamar}}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
                                    <i class="ni ni-archive-2 text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <p class="text-sm mb-0 text-uppercase font-weight-bold">Jumlah Interview</p>
                                    <h5 class="font-weight-bolder">
                                        {{$totalInterview}}
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-calendar-grid-58 opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card ">
                    <div class="card-header pb-0 p-3">
                        <div class="d-flex justify-content-between">
                            <h6 class="mb-2">Data Lowongan Pekerjaan</h6>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center ">
                            <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td class="w-30">
                                        <div class="d-flex px-2 py-1 align-items-center">                                            
                                            <div class="ms-4">
                                                <p class="text-xs font-weight-bold mb-0">Pekerjaan:</p>
                                                <h6 class="text-sm mb-0">{{ $item['lowongan']->judul_pekerjaan }}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">Jumlah Pelamar</p>
                                            <h6 class="text-sm mb-0">{{ $item['jumlahPelamar'] }} Orang</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">Pending</p>
                                            <h6 class="text-sm mb-0">{{ $item['jumlahPending'] }} Orang</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">Jumlah Interview</p>
                                            <h6 class="text-sm mb-0">{{ $item['jumlahInterview'] }} Orang</h6>
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
        @else        
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        <p>
        @if($user->pelamar->status == 'Pending')
            Status masih dalam pemeriksaan silahkan cek kembali nanti, terimakasih.
        @elseif($user->pelamar->status == 'Lolos Seleksi')
            Selamat Anda lolos seleksi.Silahkan datang pada tanggal {{$user->pelamar->tgl_interview}} untuk melakukan interview
        @elseif($user->pelamar->status == 'Tidak Lolos')
            Mohon maaf, Anda tidak lolos seleksi.
        @else
            Status tidak diketahui
        @endif
        </p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-profile">
                    <img src="/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="card-body pt-0">
                        <div class="text-center">
                            @if($user->pelamar->foto)
    <img src="{{ asset('storage/foto_pelamar/' . $user->pelamar->foto) }}" class="rounded-circle img-fluid border border-2 border-white" alt="Profile Image">
@else
    <img src="/img/team-2.jpg" class="rounded-circle img-fluid border border-2 border-white" alt="Profile Image">
@endif
                            <h5>{{ $user->pelamar->nama_depan }} {{ $user->pelamar->nama_belakang }}</h5>
                            <div class="font-weight-300">
                                <i class="ni location_pin mr-2"></i>alamat: {{ $user->pelamar->alamat }}
                            </div>
                            <div>
                                <i class="ni business_briefcase-24 mr-2"></i>{{ $user->pelamar->lowongan_pekerjaan->judul_pekerjaan }}
                            </div><br>                            
                            <h5>Status Pelamar :</h5>
                            <h5>{{ $user->pelamar->status }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-uppercase text-sm">CV</h5><br>
                        @if ($user->pelamar->cv)
                            <div id="pdf-viewer">
                                <iframe src="{{ asset('storage/pdf_pelamar/' . $user->pelamar->cv) }}" width="100%" height="600px"></iframe>
                            </div>
                        @else
                            <p>No CV available</p>
                        @endif
                </div>
                </div>
            </div>
        </div>
        @endif
        @include('layouts.footers.auth.footer')
    </div>
@endsection

