@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <link rel="stylesheet" type="text/css" href="https://mozilla.github.io/pdf.js/web/viewer.css">
    <div class="container-fluid py-4">
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
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
        <div class="row">
            <div class="col-md-4">
                <div class="card card-profile">
                    <img src="/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="card-body pt-0">
                        <div class="text-center">
                            @if($pelamar->foto)
    <img src="{{ asset('storage/foto_pelamar/' . $pelamar->foto) }}" class="rounded-circle img-fluid border border-2 border-white" alt="Profile Image">
@else
    <img src="/img/team-2.jpg" class="rounded-circle img-fluid border border-2 border-white" alt="Profile Image">
@endif
                            <h5>{{ $pelamar->nama_depan }} {{ $pelamar->nama_belakang }}</h5>
                            <div class="font-weight-300">
                                <i class="ni location_pin mr-2"></i>alamat: {{ $pelamar->alamat }}
                            </div>
                            <div>
                                <i class="ni business_briefcase-24 mr-2"></i>{{ $pelamar->lowongan_pekerjaan->judul_pekerjaan }}
                            </div><br>                            
                            <h5>Status Pelamar :</h5>
                            <h5>{{ $pelamar->status }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-uppercase text-sm">CV</h5><br>
                        @if ($pelamar->cv)
                            <div id="pdf-viewer">
                                <iframe src="{{ asset('storage/pdf_pelamar/' . $pelamar->cv) }}" width="100%" height="600px"></iframe>
                            </div>
                        @else
                            <p>No CV available</p>
                        @endif
                      

                        
                    @if ($pelamar->status === 'Pending')
                    <div class="text-center">
                        <form method="POST" action="{{ route('pelamar.accept', $pelamar->id) }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-success mb-3 mr-2">Accept</button>
                        </form>

                        <form method="POST" action="{{ route('pelamar.decline', $pelamar->id) }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger mb-3">Decline</button>
                        </form>
                    </div>
                    <div class="text-center">
                    <a href="{{ route('pelamar') }}" class="btn btn-primary mb-3 mr-2">Back</a>
                </div>
                    @else
                    <div class="text-center">
                    <a href="{{ route('pelamar') }}" class="btn btn-primary mb-3 mr-2">Back</a>
                </div>
                    @endif
                </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script>
        // PDF.js code to render the embedded PDF
        const url = '{{ asset("storage/pdf_pelamar/" . $pelamar->cv) }}';
        const pdfjsLib = window['pdfjs-dist/build/pdf'];

        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://mozilla.github.io/pdf.js/build/pdf.worker.js';

        const loadingTask = pdfjsLib.getDocument(url);
        loadingTask.promise.then((pdf) => {
            // Fetch the first page
            return pdf.getPage(1);
        }).then((page) => {
            const scale = 1.5;
            const viewport = page.getViewport({ scale });

            // Prepare canvas using PDF.js
            const canvas = document.createElement('canvas');
            const context = canvas.getContext('2d');
            canvas.height = viewport.height;
            canvas.width = viewport.width;

            // Render PDF page into canvas context
            const renderContext = {
                canvasContext: context,
                viewport: viewport,
            };
            const renderTask = page.render(renderContext);
            return renderTask.promise;
        }).catch((reason) => {
            console.error('Error loading PDF: ', reason);
        });
    </script>
@endsection
