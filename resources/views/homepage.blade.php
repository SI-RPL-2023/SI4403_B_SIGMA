<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RSUD Maulana AK. Baturaja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('assets/login/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('assets/login/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/homepage/hp.css')}}">

    <!-- Pendaftaran pasien -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">
    <!-- JQUERY UI -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <!-- Sweetalert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.16/sweetalert2.min.css">
    <style>
      body, html{
          font-family: 'Poppins', sans-serif;
          background: #F9F9F9;
      }
      footer {
        background : #282C54;
      }
      footer a {
        color: #D0D0D0;
        text-decoration: none;
        transition: all 0.3s;
      }
  
      footer a:hover{
          color: #3A7377;
      }
  
      img {
        max-width: 100%;
        height: auto;
      }
      .link-navbar{
          color: black;
          font-size: 16px;
          
      }
      .link-navbar:hover{
        color: #282C54;
        text-decoration: underline;
        font-weight: 600;
        transition: all 0.2s ease-out;
        transform: scale(1.08);
      }
  
      .socials li{
          background:#3A7377;
          border-radius:50px;
          margin-left: 15px;
      }
      .socials li a i{
          font-size: 18px;
      }
      .navbar{
        position: sticky !important;
        top: 0;
        z-index: 2;
        box-shadow: 9px 12px 20px rgba(93, 95, 98, 0.3);
      }
      .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
          border-bottom: 3px solid #0D9737;
          background: #F9F9F9;
          color: #282C54;
      }
  
      #myBtn {
          display: none;
          position: fixed;
          bottom: 20px;
          right: 30px;
          z-index: 99;
          font-size: 18px;
          border: none;
          outline: none;
          color: white;
          cursor: pointer;
          padding: 15px;
          border-radius: 4px;
      }   
  </style>

  </head>
  
  <body>
    <nav class="navbar navbar-expand-lg" style="background:#fff;">
        <div class="container">
          <a class="navbar-brand" href="/" style="font-size:15px;color:black">
            <div class="d-flex justify-content-between">
              <img src="{{asset('assets/image/logo1.png')}}" alt="Logo" width="64" height="60" class="">
              <span class="ms-2 mt-2">RUMAH SAKIT UMUM DR MAULANA AK.<br>BATURAJA</span>
            </div>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a href="#beranda" class="nav-link link-navbar">Beranda</a>
                  </li>
                  <li class="nav-item">
                      <a href="#aboutus" class="nav-link link-navbar">Tentang</a>
                  </li>
                  <li class="nav-item">
                      <a href="#fasilitas" class="nav-link link-navbar">Fasilitas dan Layanan</a>
                  </li>
              </ul>
          </div>
        </div>
      </nav>  

      <section id="beranda">
        <div class="welcoming">
            <div class="welkiri">
                <img src="{{asset('assets/image/logo1.png')}}" width="170" height="166">
                <h2>Pendaftaran Online Pasien</h2>
                <p>Silahkan Log in atau Register untuk melakukan pendaftaran</p>
                <a href="/login">  <button type="button" class="login">Login</button> </a>
                <a href="/register">  <button type="button" class="register">Register</button> </a>
            </div>
            <div class="welkanan">
                <img src="{{asset('assets/image/icon.png')}}" width="400" height="400">
            </div>   
        </div>
        
        <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 320">
          <path fill="#ffffff" fill-opacity="1" d="M0,224L48,213.3C96,203,192,181,288,154.7C384,128,480,96,576,117.3C672,139,768,213,864,208C960,203,1056,117,1152,90.7C1248,64,1344,96,1392,112L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
      </section>

      <!-- TENTANG KAMI -->
      <section id="aboutus">
        <h2>Tentang Kami</h2>
        <p>Rumah Sakit Umum Dokter Maulana merupakan Rumah Sakit Umum tipe D yang berada di kota Baturaja, Kab Ogan Komering Ulu, Sumatera Selatan. Rumah sakit ini berawal dari klinik bedah dari tahun 1991-2008. Kemudian, pada tahun 2009-2011 berproses menjadi rumah sakit. Kemudian pada April 2017, Rumah Sakit dr. Maulana sudah resmi dinyatakan sebagai Rumah Sakit Umum beralih dari Rumah Sakit bedah mitra media.</p>
      </section>

          <!-- VISI MISI -->
      <div class="container-misi text-center">
        <div class="covervisi">
        <div class="row align-items-center">         
          <div class="container col visi mt-2">
            <h2>Visi</h2>
            <p>Rumah sakit profesional dan bermutu dalam pelayanan kesehatan</p>
          </div>
          <div class="container col misi mt-4">
            <h2>Misi</h2>
            <p>1. Melayani secara profesional demi peningkatan kualitas secara berkesinambungan; <br>
              2. Memberikan pelayanan kesehatan yang bermutu dan terjangkau oleh seluruh lapisan masyarakat;<br>
              3. Memelihara lingkungan yang sehat dan harmonis.</p>
          </div>
        </div>
        </div>
      </div>
          <!-- FASILITAS DAN LAYANAN -->
      <section id="fasilitas">
        <h2 class="d-flex justify-content-center mt-5 mb-5">Fasilitas dan Layanan</h2>
        <div class="gridlayanan">
          <div class="card layanan" style="width: 18rem;">
            <img src="{{asset('assets/image/kamar.png')}}" class="imgkamar" alt="..." width="80%">
            <div class="card-body">
              <h5 class="card-title">Rawat Inap</h5>
              <p class="card-text">Kami berupaya memberikan yang terbaik dalam pengobatan dan perawatan dengan suasana
                senyaman mungkin, didukung tenaga-tenaga yang professional pada bidangnya.</p>
            </div>
          </div>
          <div class="card layanan" style="width: 18rem;">
            <img src="{{asset('assets/image/mcu.png')}}" class="imgkamar" alt="..." width="80%">
            <div class="card-body">
              <h5 class="card-title">Medical Check Up</h5>
              <p class="card-text">Kami menawarkan berbagai paket Medical Check Up yang sesuai dengan kebutuhan kesehatan
                Anda. Dengan teknologi modern dan tenaga profesional yang sudah berpengalaman di bidangnya.</p>
            </div>
          </div>
          <div class="card layanan" style="width: 18rem;">
            <img src="{{asset('assets/image/labo.png')}}" class="imgkamar" alt="..." width="80%">
            <div class="card-body">
              <h5 class="card-title">Laboratorium</h5>
              <p class="card-text">Fasilitas laboratorium ini dilengkapi dengan peralatan yang canggih dan modern seperti
                alat-alat uji kimia darah, urin, alat-alat uji mikrobiologi, serta peralatan lain yang diperlukan untuk
                melakukan analisis medis.</p>
            </div>
          </div>
          <div class="card layanan" style="width: 18rem;">
            <img src="{{asset('assets/image/rekammedik.png')}}" class="imgkamar" alt="..." width="80%">
            <div class="card-body">
              <h5 class="card-title">Rekam Medik</h5>
              <p class="card-text">Rekam medik ini berisi informasi tentang riwayat kesehatan pasien, hasil pemeriksaan
                medis, hasil analisis laboratorium, catatan perawatan, dan informasi lain yang diperlukan dalam proses
                perawatan pasien.</p>
            </div>
          </div>
          <div class="card layanan" style="width: 18rem;">
            <img src="{{asset('assets/image/poli.png')}}" class="imgkamar" alt="..." width="80%">
            <div class="card-body">
              <h5 class="card-title">Poli</h5>
              <p class="card-text">Tempat pelayanan yang bertugas melakukan pemeriksaan pasien secara umum dengan melihat
                indikasi atau gejala - gejala yang di derita oleh pasien</p>
            </div>
          </div>
        </div>
      </section>

    <!-- FOOTER -->
    <div class="d-flex flex-column mt-4">
      <footer class="w-100 py-4 flex-shrink-0">
          <div class="container py-4">
              <div class="row gy-4 gx-5">
                  <div class="col-lg-4 col-md-6">
                      <h5 class="text-white mb-3">Tautan</h5>
                      <ul class="list-unstyled text-muted">
                          <li><a href="#">Hubungi Kami</a></li>
                          <li><a href="#">Karir</a></li>
                          <li><a href="#">Saran & Kritik</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <h5 class="text-white mb-3">Lainnya</h5>
                      <ul class="list-unstyled text-muted">
                          <li><a href="#">Sitemap</a></li>
                          <li><a href="#">Kebijakan Privasi</a></li>
                          <li><a href="#">Disclaimer</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <!-- <img src="{{asset('assets/images/maps.png')}}" alt=""> -->
                      <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=telkom%20university+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div>
                  </div>
              </div>
              <div class="social-login">
                  <ul class="socials">
                      <li><a href="#"><i class="display-flex-center bi bi-twitter"></i></a></li>
                      <li><a href="#"><i class="display-flex-center bi bi-facebook"></i></a></li>
                      <li><a href="#"><i class="display-flex-center bi bi-instagram"></i></a></li>
                      <li><a href="#"><i class="display-flex-center bi bi-youtube"></i></a></li>
                  </ul>
              </div>
              <hr class="border border-1 opacity-50" style="border-color:#fff">
              <p style="color: #D0D0D0">
                  © Copyright 2022 | Rumah Sakit Umum dr. Maulana AK. All Rights Reserved<br>
                  Designed by Tim Pengembang RSU dr. Maulana AK
              </p>
          </div>
      </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="{{asset('assets/login/js/main.js')}}"></script>
    <script src="{{asset('assets/pendaftaran/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/pendaftaran/js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.16/sweetalert2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


  </body>
</html>