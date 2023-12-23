@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Tambah Lowongan Pekerjaan'])
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                  
                    <div class="card-body px-lg-5 py-lg-5">
                        <form action="{{ route('loker.store') }}" method="POST">
                            @csrf
                            <!-- Input field untuk judul pekerjaan -->
                            <div class="form-group">
                                <label for="judul_pekerjaan" class="form-control-label">Judul Pekerjaan</label>
                                <input type="text" class="form-control" id="judul_pekerjaan" name="judul_pekerjaan" required>
                            </div>
                            <div class="form-group">
                                <label for="kuota" class="form-control-label">Kuota</label>
                                <input type="text" class="form-control" id="kuota" name="kuota" required>
                            </div>
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                                    <select class="form-control border border-2 p-2" name="jenis_kelamin">
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                            <div class="form-group">
                                <label for="kelahiran" class="form-control-label">Syarat Kelahiran</label>
                                <input type="date" class="form-control" id="kelahiran" name="kelahiran" required>
                            </div>

                            <!-- Input field untuk deskripsi pekerjaan -->
                            <div class="form-group">
                                <label for="deskripsi_pekerjaan" class="form-control-label">Deskripsi Pekerjaan</label>
                                <textarea class="form-control" id="deskripsi_pekerjaan" name="deskripsi_pekerjaan" required></textarea>
                            </div>

                            <!-- Input field untuk kualifikasi -->
                            <div class="form-group">
                                <label for="kualifikasi" class="form-control-label">Kualifikasi</label>
                                <textarea class="form-control" id="kualifikasi" name="kualifikasi" required></textarea>
                            </div>

                            <!-- Input field untuk tanggal posting -->
                            <div class="form-group">
                                <label for="tanggal_posting" class="form-control-label">Tanggal Posting</label>
                                <input type="date" class="form-control" id="tanggal_posting" name="tanggal_posting" required>
                            </div>

                            <!-- Input field untuk deadline -->
                            <div class="form-group">
                                <label for="deadline" class="form-control-label">Deadline</label>
                                <input type="date" class="form-control" id="deadline" name="deadline" required>
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
