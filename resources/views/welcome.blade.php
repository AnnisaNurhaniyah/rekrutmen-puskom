
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="keywords"
      content="Puskom, Pusat Komando, Pusat Komando Ketahanan Pangan, Pusat Komando Ketahanan Pangan Jawa Barat"
    />
    <meta name="author" content="Puskom DKPP JABAR" />
    <meta
      name="description"
      content="Unit Kerja yang bertanggung jawab terhadap integritas data,
      pengali informasi dan pemanfaatan data Ketahanan Pangan Provinsi
      Jawa Barat untuk mendukung kegiatan monitoring dan informasi
      pangan"
    />

    <link rel="icon" type="image/png" href="/img/ICON.svg">
    <title>PUSAT KOMANDO KETAHANAN PANGAN JABAR</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"
    />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="icon" type="image/x-icon" href="assets/ICON.ico">
    <link rel="stylesheet" href="style/style.css" />
    @php
    use Carbon\Carbon;
    @endphp
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <div class="container-md">
        <a class="navbar-brand" href="#"
          ><img src="assets/Icon_Puskom_Dengan_Arti.svg" alt="" width="150"
        /></a>
        <div class="warper-mobile-menu-btn">
            <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        </div>
        <div class="push-left"></div>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarSupportedContent"
        >
          <ul
            class="navbar-nav my-2 my-lg-0"
            style="--bs-scroll-height: 100px; width: 100%;min-height: auto;"
          >
            <li class="nav-item dropdown">
              <a class="nav-link active" aria-current="page" href="{{ route('login') }}">
                Login
              </a>
             
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#tentang-top-divider"
                >Tentang</a              >
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#karier"
                >Karier</a              >
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#footer-kontak">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->

    <section id="hero" class="wrapper-hero">
      <div class="container">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img
              src="assets/Group 1.png"
              class="d-block mx-lg-auto img-fluid"
              alt=""
              loading="lazy"
            />
          </div>
          <div class="col-lg-6">
            <div class="lc-block mb-3">
              <div editable="rich">
                <h2 class="fw-bold display-5">
                  Pusat Komando Ketahanan Pangan
                </h2>
              </div>
            </div>

            <div class="lc-block mb-3">
              <div editable="rich">
                <p class="lead">
                  Unit Kerja yang bertanggung jawab terhadap integritas data,
                  penyajian informasi dan pemanfaatan data Ketahanan Pangan Provinsi
                  Jawa Barat untuk mendukung kegiatan monitoring dan informasi pangan
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero -->

    <div class="divider-section" id="tentang-top-divider"></div>
    <section id="tentang-kami" class="container-md">
      <div editable="rich" style="margin-bottom: 50px">
        <h2 class="fw-bold display-5">Tentang Kami</h2>
      </div>
      <div class="divider-collapse"></div>
      <button
        id="btn-collapse1"
        class="btn btn-outline-success btn-collapse-about"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapse1"
        aria-expanded="false"
        aria-controls="collapse1"
      >
        <span style="font-size: x-large; font-weight: 600"
          >Apa itu Pusat Komando Ketahanan Pangan</span
        >
        <i
          style="font-size: x-large; font-weight: 600"
          class="bi bi-chevron-down"
        ></i>
      </button>
      <div class="collapse" id="collapse1">
        <div class="card card-body card-about">
          <p class="lead">
            Unit Kerja yang bertanggung jawab terhadap integritas data,
            penyajian informasi dan pemanfaatan data Ketahanan Pangan Provinsi
            Jawa Barat untuk mendukung kegiatan monitoring dan informasi pangan
          </p>
        </div>
      </div>
      <div class="divider-collapse"></div>
      <button
        id="btn-collapse2"
        class="btn btn-outline-success btn-collapse-about"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapse2"
        aria-expanded="false"
        aria-controls="collapse2"
      >
        <span style="font-size: x-large; font-weight: 600"
          >Mengapa harus ada Pusat Komando Ketahanan Pangan</span
        >
        <i
          style="font-size: x-large; font-weight: 600"
          class="bi bi-chevron-down"
        ></i>
      </button>
      <div class="collapse" id="collapse2">
        <div class="card card-body card-about">
          <p class="lead">
            Pangan merupakan salah satu kebutuhan dasar manusia yang paling
            utama sehingga menjadi bagian dari hak asasi manusia.
          </p>
          <p class="lead">
            Dalam UU Pangan 18/2012 telah didefinisikan bahwa Penyelenggaraan
            sistem yang mencakup kegiatan pengumpulan, pengolahan/analisis,
            penyimpanan, penyajian, penyebaran data dan informasi, penggunaan
            informasi tentang pangan dan gizi.
          </p>
          <p class="lead">
            Oleh sebab itu pusat komando ketahanan pangan Jawa Barat dibangun
            untuk terciptanya keterbukaan data pangan melalui terobosan
            teknologi informasi, serta transformasi data digital.
          </p>
        </div>
      </div>

      <div class="divider-collapse"></div>
      <button
        id="btn-collapse3"
        class="btn btn-outline-success btn-collapse-about"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapse3"
        aria-expanded="false"
        aria-controls="collapse3"
      >
        <span style="font-size: x-large; font-weight: 600"
          >Apa saja yang dilakukan oleh Pusat komando Ketahanan Pangan</span
        >
        <i
          style="font-size: x-large; font-weight: 600"
          class="bi bi-chevron-down"
        ></i>
      </button>
      <div class="collapse" id="collapse3">
        <div class="card card-body card-about">
          <p class="lead">
            Pusat Komando Ketahanan pangan mempunyai 3 tugas penting yang
            mencakup antara lain :
          </p>
          <ol>
            <li class="lead">Kompilasi Data Pangan</li>
            <li class="lead">Pelayanan Data Pangan</li>
            <li class="lead">Pemanfaatan Data Pangan</li>
          </ol> 
          
          
         
        </div>
      </div>
    </section>
    <!-- About -->

    <div class="divider-section"></div>
    <div class="container">
      <div editable="rich" style="margin-bottom: 100px">
        <h2 class="fw-bold display-5">Produk Unggulan</h2>
      </div>
    </div>
    <section id="produk" class="wrapper-product">
      <div class="container" style="padding-bottom: 45px;">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-1">
          <div class="col-10 col-sm-8 col-lg-6">
            <img
              src="assets/simawas_pagi_icon.svg"
              class="d-block mx-lg-auto img-fluid"
              alt=""
              loading="lazy"
              style="min-width: 250px"
            />
          </div>
          <div class="col-lg-6">
            <div class="lc-block mb-3">
              <div editable="rich">
                <h2 class="fw-bold display-5">SIMAWAS PAGI</h2>
              </div>
            </div>

            <div class="lc-block mb-3">
              <div editable="rich">
                <p class="lead">
                  SIMAWAS PAGI merupakan produk inovasi dari Pusat Komando
                  Ketahanan Pangan Jawa Barat yang berupaya secara integratif
                  menjadi penyokong terwujudnya Ketahanan Pangan dan Gizi yang
                  Berkelanjutan melalui terobosan teknologi informasi, serta
                  transformasi data digital.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Product -->

    <div class="divider-section" id="karier"></div>
<section id="loker" class="container-md">
    <div editable="rich" style="margin-bottom: 50px">
        <h2 class="fw-bold display-5">Lowongan Pekerjaan</h2>
    </div>
    <div class="divider-collapse"></div>
    @foreach ($loker as $lowongan)
    <button
        id="btn-collapse{{ $lowongan->id }}" {{-- Use a unique ID for each collapse --}}
        class="btn btn-outline-success btn-collapse-about"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#collapse{{ $lowongan->id }}"
        aria-expanded="false"
        aria-controls="collapse{{ $lowongan->id }}"
    >
        <span style="font-size: x-large; font-weight: 600">{{ $lowongan->judul_pekerjaan }}</span>
        <i style="font-size: x-large; font-weight: 600" class="bi bi-chevron-down"></i>
    </button>
    <div class="collapse" id="collapse{{ $lowongan->id }}">
        <div class="card card-body card-about">
            <p class="lead"><strong>Deskripsi Pekerjaan :</strong> {{ $lowongan->deskripsi_pekerjaan }} <br>
                <strong>Kualifikasi Pekerjaan :</strong> {{ $lowongan->kualifikasi }} <br>
                <strong>Deadline :</strong> {{ $lowongan->deadline->format('d/M/Y') }} <br>
                <strong>Kuota :</strong> {{ $lowongan->kuota }} <br>
                <strong>Syarat :</strong> {{ $lowongan->jenis_kelamin }} - {{ Carbon::parse($lowongan->kelahiran)->diffInYears(Carbon::now()) }} Tahun<br>
            </p>
        </div>
        @if ($lowongan->kuota == 0)
            <p class="text-danger">Pendaftaran Ditutup (Kuota Habis)</p>
        @elseif ($lowongan->deadline < now())
                <p class="text-danger">Pendaftaran Ditutup</p>
        @else
        <a href="{{ route('daftar', $lowongan->id) }}" class="btn btn-primary">Daftar</a> {{-- Add the "Daftar" button here --}}
        @endif
    </div>
    @endforeach
</section>


    <footer class="text-center text-lg-start bg-light text-muted">
      <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
      >
      <div class="container d-flex justify-content-lg-between">
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <div>
          <a href="https://m.facebook.com/dkpp.jawabarat" class="me-4 text-reset" style="text-decoration: none;">
            <i class="bi bi-facebook"></i>
          </a>
          <a href=" https://x.com/dkpp_jabar?t=sluBPZNlqKUe9R6xxzpuwQ&s=08" class="me-4 text-reset"  style="text-decoration: none;">
            <i class="bi bi-twitter"></i>
          </a>
          <a href="https://instagram.com/dkpp_jabar?igshid=MWpwZW5hMTF3Z3g0NQ==" class="me-4 text-reset"  style="text-decoration: none;">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="https://www.tiktok.com/@dkppjabar?_t=8hEfB35R9xx&_r=1" class="me-4 text-reset"  style="text-decoration: none;">
            <i class="bi bi-tiktok"></i>
          </a>
          <!-- Right -->
        </div>
        <!-- container -->
      </div>
      </section>
      <!-- Section: Social media -->

      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4 text-center">
                <img src="assets/ICON.svg" alt="" width="75" /><br />
                </i>Pusat Komando Ketahanan Pangan
                Jawa Barat
              </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Produk</h6>
              <p>
                <a href="https://jabarprov.go.id/" class="text-reset">Simawas Pagi</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Kerja Sama Dengan</h6>
              <p>
                <a href="https://jabarprov.go.id/" class="text-reset">Jabar Prov</a>
              </p>
              <p>
                <a href="http://dkpp.jabarprov.go.id/" class="text-reset">DKPP Jabar</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div id="footer-kontak" class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">Kontak</h6>
              <p><i class="bi bi-house"></i> Jl. Kawaluyaan Indah Raya No.6 Lt.5 Soekarno-Hatta</p>
              <p><i class="bi bi-telephone"></i> 022-87327711</p>
              <p><i class="bi bi-printer"></i> 022-87354100</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <div
        class="text-center p-4"
        style="background-color: rgba(0, 0, 0, 0.05)"
      >
      ©<span id="copyright-year"></span> Copyright:
        <a class="text-reset fw-bold" href="#"
          >Annisa Nurhaniyah</a
        >
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->
  </body>

  <script>
      document.getElementById('copyright-year').appendChild(document.createTextNode(new Date().getFullYear()))</script
    console.log("Puskom DKPP JABAR");
    
  </script>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
</html>
<style>
  body {
    font-family: Arial, sans-serif;
  }

  .navbar {
    background-color: #fff;
    box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.1);
  }

  .navbar-brand img {
    max-width: 150px;
  }

  .navbar-toggler {
    background-color: #329467;
  }

  .navbar-light .navbar-nav .nav-link {
    color: #333;
  }

  .wrapper-hero {
    background-color: #e6f6ec;
    padding: 30px 0;
  }

  .wrapper-product {
    background-color: #e6f6ec;
    padding: 30px 0;
  }

  .btn-collapse-about {
    background-color: #fff;
    color: #329467;
    margin-bottom: 10px;
  }

  .card-about {
    background-color: #e6f6ec;
    border-color: #329467;
  }

  .divider-section {
    margin-top: 100px;
  }

  .divider-collapse {
    margin-top: 25px;
  }

  .lc-block {
    padding: 20px;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
  }

  .lc-block h2 {
    color: #329467;
  }

  .lc-block p {
    color: #555;
  }

  .lc-block img {
    max-width: 100%;
  }

  .btn-primary {
    background-color: #329467;
    color: #fff;
  }

  .btn-primary:hover {
    background-color: #267c55;
  }
</style>
