@props(['activePage'])

<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0  my-3 fixed-start ms-3   bg-gradient-darks"
    id="sidenav-main">
    <div class="sidenav-header" style="display: flex; justify-content: center;">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0 d-flex text-wrap align-items-center" href="{{ route('home') }}">
        <img src="/img/Icon_Puskom.svg" class="navbar-brand-img" alt="main_logo">
    </a>
</div>

    <hr class="horizontal light mt-0 mb-2">
    <div id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Menu</h6>
            </li>
            <div class="nav-wrapper position-relative end-0">
            </div>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'home' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('home') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'user' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('user') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">people</i>
                    </div>
                    <span class="nav-link-text ms-1">User Management</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'loker' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('loker') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">work</i>
                    </div>
                    <span class="nav-link-text ms-1">Lowongan Kerja</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'pelamar' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('pelamar') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">people</i>
                    </div>
                    <span class="nav-link-text ms-1">Pelamar</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark {{ $activePage == 'interview' ? ' active bg-gradient-primary' : '' }} "
                    href="{{ route('listpelamar') }}">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="material-icons opacity-10">event</i>
                    </div>
                    <span class="nav-link-text ms-1">List Interview Pelamar</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
