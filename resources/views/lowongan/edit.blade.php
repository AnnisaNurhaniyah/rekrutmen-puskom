<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="loker"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-navbars.navs.auth titlePage="Edit Lowongan Kerja"></x-navbars.navs.auth>
        <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="colmd-8">
                <div class="card">
                    <div class="card-body px-lg-5 py-lg-5">
                        <form action="{{ route('loker.update', $lowongan->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <!-- Input field untuk judul pekerjaan -->
                            <div class="form-group">
                                <label for="judul_pekerjaan" class="form-control-label">Judul Pekerjaan</label>
                                <input type="text" class="form-control border border-2 p-2" id="judul_pekerjaan" name="judul_pekerjaan" value="{{ $lowongan->judul_pekerjaan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="kuota" class="form-control-label">Kuota</label>
                                <input type="text" class="form-control border border-2 p-2" id="kuota" name="kuota" value="{{ $lowongan->kuota }}" required>
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
                                <textarea class="form-control border border-2 p-2" id="deskripsi_pekerjaan" name="deskripsi_pekerjaan" required>{{ $lowongan->deskripsi_pekerjaan }}</textarea>
                            </div>

                            <!-- Input field untuk kualifikasi -->
                            <div class="form-group">
                                <label for="kualifikasi" class="form-control-label">Kualifikasi</label>
                                <textarea class="form-control border border-2 p-2" id="kualifikasi" name="kualifikasi" required>{{ $lowongan->kualifikasi }}</textarea>
                            </div>

                            <!-- Input field untuk tanggal posting -->
                            <div class="form-group">
                                <label for="tanggal_posting" class="form-control-label">Tanggal Posting</label>
                                <input type="date" class="form-control border border-2 p-2" id="tanggal_posting" name="tanggal_posting" value="{{ $lowongan->tanggal_posting->format('Y-m-d') }}" required>
                            </div>

                            <!-- Input field untuk deadline -->
                            <div class="form-group">
                                <label for="deadline" class="form-control-label">Deadline</label>
                                <input type="date" class="form-control border border-2 p-2" id="deadline" name="deadline" value="{{ $lowongan->deadline->format('Y-m-d') }}" required>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary my-4">Simpan</button>
                                <a href="{{ route('loker') }}" class="btn btn-secondary">Kembali</a>
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