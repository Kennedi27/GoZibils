<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="img/logotanpateks.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- FA -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" /> 
    <!-- My Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">
    <!-- My CSS -->
    <link rel="stylesheet" href="{{asset('LandingPage/')}}/style.css">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png">
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand" href="#goZibli">
            <img class="logo" src="{{asset('LandingPage/')}}/img/logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
              <a class="nav-link" href="#goZibli">Features</a>
              <a class="nav-link" href="#teamBuild">Our Team</a>
              <a class="btn tombol btn-primary" href="login">login</a>
            </div>
          </div>
        </div>   
    </nav>
    <!-- Akhir Navbar -->

    <!-- Jumbotron -->
    <div class="top-wrapper">
        <div class="container">
                <div class="contentLeft">
                    <h2 class="title"><span>Ayo Mulai Managemen Sampah Dari Sekarang</span></h2>
                    <p>GoZibil merupakan sebuah startup yang sedang dikembangkan untuk mengatasi berbagai permasalahan sampah. Dengan kemajuan teknologi yang ada saat ini, kami berusaha membantu masyarakat maupun membuat masyarakat ikut berpartisipasi dalam menangani permasalahan sampah saat ini.</p>
                    <a href="" class="btn bg-light tombol text-dark"><i class="fa fa-android" aria-hidden="true"></i> Get for Android</a>
                </div>
                <div class="contentRight">
                    <img class="andro1" src="{{asset('LandingPage/')}}/img/android.png" alt="">
                    <img class="andro2" src="{{asset('LandingPage/')}}/img/Opening.png" alt="">
                </div>
        </div>
    </div>
    <!-- Akhir  Jumbotron -->

    <!-- Container -->
    <div class="container">
        <section id="goZibli">
            <div class="workingspace">
                <div class="row">
                    <div class="col-md-5">
                        <img class="deskAndro1" src="{{asset('LandingPage/')}}/img/gozibil2.png" alt="">
                        <!-- <img src="img/landingimage.png" alt="Workingspace" class="img-fluid"> -->
                    </div>
                    <div class="col-md-7">
                        <h3>Gozibil untuk menuntaskan Masalah Sampah</h3>
                        <p>Gozibil merupakan sebuah aplikasi yang dapat membantu anda dalam memanagemen sampah rumah tangga anda. Aplikasi ini langsung terhubung ke petugas pengangkut sampah, dimana aplikasi ini memiliki fitur - fitur yang akan membantu masyarakat untuk menangani masalah sampah.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="bigTrash">
            <div class="workingspace">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Buang Sampah Berukuran Besar dengan Sekali Klik.</h3>
                        <p>BigTrash adalah salah satu fitur yang disiapkan untuk masyarakat yang bingung membuang sampah berukuran besar. Dengan menggunakan fitur ini Anda tidak perlu khawatir jika memiliki sampah berukuran besar seperti lemari, sofa, kulkas dll. GoZibil menyediakan layanan pengangkutan sampah besar dan Anda cukup mendaftarkan sampah tersebut melalui aplikasi dan petugas akan segera mengangkutnya.</p>
                    </div>
                    <div class="col-md-4">
                        <img class="deskBigTrash" src="{{asset('LandingPage/')}}/img/RbigTrash.png" alt="">
                        <img class="deskBigTrash2" src="{{asset('LandingPage/')}}/img/RbigTrash2.png" alt="">   
                        <!-- <img src="img/landingimage.png" alt="Workingspace" class="img-fluid"> -->
                    </div>
                </div>
            </div>
        </section>

        <section id="report">
            <div class="workingspace">
                <div class="row">
                    <div class="col-md-8">
                        <h3>Laporkan Masalah Anda</h3>
                        <p>Gozibil menyediakan fitur report Anda dapat memberikan laporan melalui aplikasi apabila melihat tumpukan sampah di pinggir jalan. Laporan tersebut juga dapat berupa pengaduan apabila ada petugas yang tidak bekerja dengan benar. Dengan laporan yang anda buat, akan sangat membantu kita semua dalam meningkatkan lingkungan yang bersih dan terbebas dari pembuangan sampah liar.</p>
                    </div>
                    <div class="col-md-4">
                        <img class="deskReport" src="{{asset('LandingPage/')}}/img/login.png" alt="">
                        <img class="deskReport2" src="{{asset('LandingPage/')}}/img/report.png" alt="">
                        <!-- <img src="img/landingimage.png" alt="Workingspace" class="img-fluid"> -->
                    </div>
                </div>
            </div>
        </section>

        <section id="trashPay">
            <div class="workingspace">
                <div class="row">
                    <div class="col-md-6">
                        <img class="desktrashPay" src="{{asset('LandingPage/')}}/img/transaksi.png" alt="">                    
                        <!-- <img src="img/landingimage.png" alt="Workingspace" class="img-fluid"> -->
                    </div>
                    <div class="col-md-6">
                        <h3>Pembayaran Lebih Mudah</h3>
                        <p>Melakukan pembayaran secara online dapat dilakukan di mana saja dan kapan saja. Dengan menggunakan transfer bank maupun dompet digital, sekarang Anda tidak perlu khawatir dalam melakukan pembayaran retribusi bulanan maupun pembayaran sampah besar.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="teamBuild">
            <div class="teamBuild">
                <h4><center> Our Team </center></h4>
                <div class="row rataTengah">
                    <div class="frameTeam">
                        <div class="card">
                            <img src="{{asset('LandingPage/')}}/img/landingimage.png" alt="" class="card-img-top">
                            <div class="circle" style="background-image: url({{asset('LandingPage/')}}/img/kennedinadeak.png);"></div>
                            <div class="card-body">
                                <h5 class="card-title">Kennedi Riado Nadeak</h5>
                                <p class="card-text">3311901037<br><b>IF 3B Reguler Pagi</b></p>
                                <ul>
                                    <li><i class="fa fa-facebook"></i></li>
                                    <li><i class="fa fa-instagram"></i></li>
                                    <li><i class="fa fa-linkedin"></i></li>
                                    <li><i class="fa fa-twitter"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="frameTeam">
                        <div class="card">
                            <div class="coverBG">
                                <img src="{{asset('LandingPage/')}}/img/landingimage.png" alt="" class="card-img-top fimg">
                            </div>
                            <div class="circle" style="background-image: url({{asset('LandingPage/')}}/img/ellita.png);"></div>
                            <div class="card-body">
                                <h5 class="card-title">Ellita Eka Risma</h5>
                                <p class="card-text">3311901054<br><b>IF 3B Reguler Pagi</b></p>
                                <ul>
                                    <li><i class="fa fa-facebook"></i></li>
                                    <li><i class="fa fa-instagram"></i></li>
                                    <li><i class="fa fa-linkedin"></i></li>
                                    <li><i class="fa fa-twitter"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="frameTeam">
                        <div class="card">
                            <img src="{{asset('LandingPage/')}}/img/landingimage.png" alt="" class="card-img-top">
                            <div class="circle" style="background-image: url({{asset('LandingPage/')}}/img/rido.png);"></div>
                            <div class="card-body">
                                <h5 class="card-title">Rido Dwi Mareta</h5>
                                <p class="card-text">3311901057<br><b>IF 3B Reguler Pagi</b></p>
                                <ul>
                                    <li><i class="fa fa-facebook"></i></li>
                                    <li><i class="fa fa-instagram"></i></li>
                                    <li><i class="fa fa-linkedin"></i></li>
                                    <li><i class="fa fa-twitter"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- akhir container -->

    <!-- footer -->
    <footer class="footer bg-dark">
        <div class="container">
          <div class="footer-informasi">
            <div class="row">
              <div class="col-md-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Produk</h6>
                <a href="#" class="text-decoration-none text-reset"><p class="mt-2">Download</p></a>

              </div>
              <div class="col-md-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Creator</h6>
                <a href="#" class="text-decoration-none text-reset"><p class="mt-2">Tentang</p></a>
              </div>
              <div class="col-md-3 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">Kebijakan</h6>
                <a href="#" class="text-decoration-none text-reset"><p class="mt-2">Privasi</p></a>
                <a href="#" class="text-decoration-none text-reset"><p class="mt-2">Lisensi</p></a>
              </div>
            </div>
          </div>
        </div>       
      <div class="container">
          <div class="footer-logo">
            <a href="">
              <img class="logo" src="{{asset('LandingPage/')}}/img/logo.png" alt="">
            </a>
          </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
