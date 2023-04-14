<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
          color: white;
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
    <nav class="navbar navbar-expand-lg" style="background:#282c54;">
        <div class="container">
          <a class="navbar-brand" href="/" style="font-size:15px;color:white">
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
                  <li class="nav-item">
                    <a href="#fasilitas" class="nav-link link-navbar">Logout</a>
                </li>
              </ul>
          </div>
        </div>
      </nav>  
</head>
<body>
    <br>
    <ul class="nav justify-content-center">
        <li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pasien Lama</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pasien Baru</a>
        </li>
        </li>
      </ul>

      <form>
        <div class="container">
        <div class="form-group">
          <small id="emailHelp" class="form-text text-muted">Nomor RM Pasien</small>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">Masukan Nama Pasien</small>

          </div>
        </div>
        <div class="container">
        <div class="form-group">
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Next</button>
      </form>
      <!--footer-->
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
                        <div style="width: 100%"><iframe width="100%" height="100" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=telkom%20university+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">area maps</a></iframe></div>
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
        
</body>
</html>