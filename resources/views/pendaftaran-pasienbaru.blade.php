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

    <!-- Main CSS -->
    {{-- <link rel="stylesheet" href="{{asset('assets/login/css/style.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('assets/homepage/hp.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,900&display=swap" rel="stylesheet">

    <!-- JQUERY UI -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!-- Sweetalert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.16/sweetalert2.min.css">
    <style>
        body,
        html {
            font-family: 'Poppins', sans-serif;
            background: #F9F9F9;
        }

        footer {
            background: #282C54;
        }

        footer a {
            color: #D0D0D0;
            text-decoration: none;
            transition: all 0.3s;
        }

        footer a:hover {
            color: #3A7377;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .link-navbar {
            color: white;
            font-size: 16px;

        }

        .link-navbar:hover {
            color: #282C54;
            text-decoration: underline;
            font-weight: 600;
            transition: all 0.2s ease-out;
            transform: scale(1.08);
        }

        .socials {
            list-style: none;
            display: flex;
        }

        .socials li {
            background: #3A7377;
            border-radius: 50%;
            margin-left: 15px;
            padding: 10px
        }

        .socials li a i {
            font-size: 18px;
        }

        .navbar {
            position: sticky !important;
            top: 0;
            z-index: 2;
            box-shadow: 9px 12px 20px rgba(93, 95, 98, 0.3);
        }

        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
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

    <ul class="nav justify-content-center my-3">
        <li class="nav-item">
            <a class="nav-link" href="/reservasi-pasien-lama">Pasien Lama</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/reservasi-pasien-baru">Pasien Baru</a>
        </li>
    </ul>
    
    <form action="/reservasi-pasien-baru" method="POST" enctype="multipart/form-data">
        @csrf
        <div align="center">
            <div class="card mb-4" style="width: 64rem;" align="left">
                <div class="card-body">
                    <h3>Data Pasien</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control" id="nik" placeholder="NIK" name="nik" >
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="no_telp">No Telp</label>
                            <input type="tel" class="form-control" id="no_telp" placeholder="No telp" name="no_telp">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="nama_lengkap">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" placeholder="Nama Lengkap" name="nama_lengkap">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis_kelamin" placeholder="Jenis Kelamin" name="jenis_kelamin">
                    </div>
                    <div class="form-group mb-3">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat_lahir" placeholder="Tempat Lahir" name="tempat_lahir">
                    </div>
                    <div class="form-group mb-3">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tanggal_lahir" placeholder="Tanggal lahir" name="tanggal_lahir">
                    </div>
                    <div class="form-group mb-3">
                        <label for="pekerjaan">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan" placeholder="Pekerjaan" name="pekerjaan">
                    </div>
                    <div class="form-group mb-4">
                        <label for="golongan_darah">Golongan Darah</label>
                        <input type="text" class="form-control" id="golongan_darah" placeholder="Golongan Darah" name="golongan_darah">
                    </div>
                    <h3>Alamat Pasien</h3>
                    <div class="form-group mb-3">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" placeholder="Provinsi" name="provinsi">
                    </div>
                    <div class="form-group mb-3">
                        <label for="kabupaten">Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten" placeholder="Kabupaten" name="kabupaten">
                    </div>
                    <div class="form-group mb-3">
                        <label for="kecamatan">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" placeholder="Kecamatan" name="kecamatan">
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat_lengkap" class="form-label">Alamat Lengkap</label>
                        <textarea class="form-control" id="alamat_lengkap" rows="3" name="alamat_lengkap"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div align="center">
            <div class="card mb-4" style="width: 64rem;" align="left">
                <div class="card-body">
                    <h3>Data Wali</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3">
                            <label for="nama_lengkap_wali">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap_wali" placeholder="Nama Lengkap" name="nama_lengkap_wali">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="no_telp_wali">No Telp</label>
                            <input type="text" class="form-control" id="no_telp_wali" placeholder="No telp" name="no_telp_wali">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="jenis_kelamin_wali">Jenis Kelamin</label>
                            <input type="text" class="form-control" id="jenis_kelamin_wali" placeholder="Jenis Kelamin" name="jenis_kelamin_wali">
                        </div>
                        <div class="form-group col-md-6 mb-3">
                            <label for="email_wali">Email</label>
                            <input type="email" class="form-control" id="email_wali" placeholder="Email" name="email_wali">
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="pekerjaan_wali">Pekerjaan</label>
                        <input type="text" class="form-control" id="pekerjaan_wali" placeholder="Pekerjaan" name="pekerjaan_wali">
                    </div>
                    <div class="form-group mb-4">
                        <label for="hubungan_keluarga">Hubungan keluarga</label>
                        <input type="text" class="form-control" id="hubungan_keluarga" placeholder="Hubungan Keluarga" name="hubungan_keluarga">
                    </div>
                    <h3>Alamat Tinggal Wali</h3>
                    <div class="form-group mb-3">
                        <label for="provinsi_Wali">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi_Wali" placeholder="Provinsi" name="provinsi_wali">
                    </div>
                    <div class="form-group mb-3">
                        <label for="kabupaten_wali">Kabupaten</label>
                        <input type="text" class="form-control" id="kabupaten_wali" placeholder="Kabupaten" name="kabupaten_wali">
                    </div>
                    <div class="form-group mb-3">
                        <label for="kecamatan_wali">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan_wali" placeholder="Kecamatan" name="kecamatan_wali">
                    </div>
                    <div class="form-group mb-3">
                        <label for="alamat_lengkap_wali" class="form-label">Alamat Lengkap</label>
                        <textarea class="form-control" id="alamat_lengkap_wali" rows="3" name="alamat_lengkap_wali"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div align="center">
            <div class="card mb-4" style="width: 64rem;" align="left">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="ktp" class="form-label"><h3>Unggah Berkas Pasien (KTP)</h3></label>
                        <input class="form-control mt-2" type="file" id="ktp" name="ktp">
                    </div>
                </div>
            </div>
        </div>
        <div align="center" class="mt-3 mb-5">
            <button type="submit" class="btn btn-lg text-white" style="width: 64rem; background: #3A7377;">Next</button>
        </div>
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
                            <li><a href="#">Site map</a></li>
                            <li><a href="#">Kebijakan Privasi</a></li>
                            <li><a href="#">Disclaimer</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div style="width: 100%"><iframe width="100%" height="100" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=telkom%20university+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">areamaps</a></iframe></div>
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
</body>
</html>