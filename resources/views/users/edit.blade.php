<x-layout bodyClass="g-sidenav-show bg-gray-200">
    <x-navbars.sidebar activePage="user"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
        <x-navbars.navs.auth titlePage="Edit User"></x-navbars.navs.auth>
        <div class="container-fluid py-4">
            <!-- Pesan Error -->
            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <!-- Pesan Keberhasilan -->
                                @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                                @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT') <!-- Method PUT untuk update -->
                            <!-- Input field untuk username -->
                            <div class="form-group">
                                <label for="username" class="form-control-label">Username</label>
                                <input type="text" class="form-control border border-2 p-2" id="username" name="username" value="{{ $user->username }}" required>
                            </div>

                            <!-- Input field untuk nama -->
                            <div class="form-group">
                                <label for="name" class="form-control-label">Nama</label>
                                <input type="text" class="form-control border border-2 p-2" id="name" name="name" value="{{ $user->name }}" required>
                            </div>

                            <!-- Input field untuk email -->
                            <div class="form-group">
                                <label for="email" class="form-control-label">Email</label>
                                <input type="email" class="form-control border border-2 p-2" id="email" name="email" value="{{ $user->email }}" required>
                            </div>

                            <!-- Input field untuk alamat -->
                            <div class="form-group">
                                <label for="address" class="form-control-label">Alamat</label>
                                <input type="text" class="form-control border border-2 p-2" id="address" name="address" value="{{ $user->address }}">
                            </div>

                            <!-- Input field untuk level -->
                            <div class="form-group">
                                <label for="level" class="form-control-label">Level</label>
                                <select class="form-control border border-2 p-2" id="level" name="level">
                                    <option value="Admin" {{ $user->level == 'Admin' ? 'selected' : '' }}>Admin</option>
                                    <option value="Pengguna" {{ $user->level == 'Pengguna' ? 'selected' : '' }}>Pengguna</option>
                                </select>
                            </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <button type="submit" class="btn btn-primary">Update Users</button>
                                    <a href="{{ route('user') }}" class="btn btn-secondary">Back</a>
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
