<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <x-navbars.navs.guest titlePage="Daftar"></x-navbars.navs.daftar>
        <div class="container py-4">
        <div class="row justify-content-center">
            <div class="colmd-8">
                <div class="card">
                    <div class="card-body px-lg-5 py-lg-5">
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
                <form method="POST" action="{{ route('insert-data') }}" enctype="multipart/form-data">
                    @csrf    
                    <div class="card-header pb-0">
                        <div class="d-flex align-items-center">
                            <p class="mb-0">Daftar Lowongan Kerja</p>
                        </div><br>
                        <div class="col-md-12">
                        <div class="form-group">
                            <label for="judul_pekerjaan" class="form-control-label">Pilih Pekerjaan</label>
                            <select class="form-control border border-2 p-2" name="pekerjaan"> <!-- Assuming it's a select input -->
                                
                                    <option value="{{ $loker->judul_pekerjaan }}">{{ $loker->judul_pekerjaan }}</option>
                               
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="card-body">
                    <h5 class="text-uppercase text-sm">Data Akun</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Username</label>
                                    <input class="form-control border border-2 p-2" type="text" name="username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Password</label>
                                    <input class="form-control border border-2 p-2" type="password" name="password">
                                </div>
                            </div>
                    <hr class="horizontal dark">
                    <h5 class="text-uppercase text-sm">Data Pelamar</h5>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Depan</label>
                                    <input class="form-control border border-2 p-2" type="text" name="nama_depan">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Belakang</label>
                                    <input class="form-control border border-2 p-2" type="text" name="nama_belakang">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">NIK</label>
                                    <input class="form-control border border-2 p-2" type="number" name="nik">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Email</label>
                                    <input class="form-control border border-2 p-2" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                                    <select class="form-control border border-2 p-2" name="jenis_kelamin">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <input class="form-control border border-2 p-2" type="hidden" name="jk" value="{{ $loker->jenis_kelamin }}">
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="tgl_lahir" class="form-control-label">Tanggal Lahir</label>
                                <input type="date" class="form-control border border-2 p-2" id="tgl_lahir" name="tgl_lahir" required>
                                <input class="form-control border border-2 p-2" type="hidden" name="kelahiran" value="{{ $loker->kelahiran }}">
                            </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">No Telp</label>
                                    <input class="form-control border border-2 p-2" type="number" name="nomor_telepon">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Alamat</label>
                                    <input class="form-control border border-2 p-2" type="alamat" name="alamat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Foto Profil</label>
                                    <input class="form-control border border-2 p-2" type="file" name="foto" accept="image/*">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">CV *format pdf</label>
                                    <input class="form-control border border-2 p-2" type="file" name="cv">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group"><br>
                                    <label for="captcha" class="form-control-label">Masukkan teks berikut ini:</label><br>
                                    <h3 class="border border-2 p-1 text-center">{{ $randomText }}</h3>
                                    <input type="hidden" name="captcha_text" value="{{ $randomText }}">
                                    <input class="form-control border border-2 p-1" type="text" id="captcha" name="captcha" required><br>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                    <div class="text-center mt-4">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <x-plugins></x-plugins>
</x-layout>