@props(['signin', 'signup'])

<nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
    <div class="container-fluid ps-2 pe-0">
        <div class="d-flex align-items-center">
            <a class="navbar-brand ms-lg-0 ms-3 d-flex flex-column" href="{{ route('/') }}">
                <img src="https://puskomketapa.jabarprov.go.id/assets/Icon_Puskom_Dengan_Arti.svg" alt="dkpp" class="navbar-brand-img" style="max-width: 200px; max-height: 100px;">
            </a>
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon mt-2">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </span>
            </button>
        </div>
        <div class="collapse navbar-collapse" id="navigation">
           
        </div>
       
    </div>
</nav>
