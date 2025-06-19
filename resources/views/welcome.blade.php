<!DOCTYPE html>

<html lang="en" class="no-js">
   
<head>
    <meta charset="utf-8"/>
    <title>Service Kendaraan</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="FlameOnePage freebie ytheme for web startups by FairTech SEO." name="description"/>
    <meta content="FairTech" name="author"/>

    <!-- CSS Internal -->
    <link href="{{ asset('assets/vendor/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/layout.min.css') }}" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="{{ asset('assets/favicon.ico') }}"/>

    <!-- Swiper CDN (CSS & JS) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <!-- ✅ Tambahan Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
</head>



   
  
    <body id="body" data-spy="scroll" data-target=".header">

          <header class="header navbar-fixed-top">
              <nav class="navbar" role="navigation">
                <div class="container">
                      <div class="menu-container js_nav-item">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                          <div class="logo">
                            <a class="logo-wrap" href="#body">

<img class="logo-img logo-img-main" src="{{ asset('assets/img/logo.png') }}" alt="FlameOnePage Logo">
<img class="logo-img logo-img-active" src="{{ asset('assets/img/logo-dark.png') }}" alt="FlameOnePage Dark Logo">
                            </a>
                        </div>
                    </div>

                    <div class="collapse navbar-collapse nav-collapse">
					
					<!--div class="language-switcher">
					  <ul class="nav-lang">
                        <li><a class="active" href="#">EN</a></li>
					    <li><a href="#">DE</a></li>
						<li><a href="#">FR</a></li>
					  </ul>
					</div---> 
					
                        <div class="menu-container">
                            <ul class="nav navbar-nav navbar-nav-right">
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#body">Home</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#team">Team</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#paket">Paket</a></li>
								<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#services">Services</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#products">Products</a></li>
								<li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#work">Login</a></li>
                                <li class="js_nav-item nav-item"><a class="nav-item-child nav-item-hover" href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
			</header>
       
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                </ol>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="img-responsive" src="{{ asset('assets/img/1920x1080/01.jpg') }}" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h1 class="carousel-title">Service Kendaraan</h1>
                                <p class="color-white">Jaga performa kendaraan Anda dengan servis berkala dari kami! Cepat, terpercaya, dan hasil maksimal agar kendaraan selalu prima di jalan. Yuk, servis sekarang!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                        <img class="img-responsive" src="{{ asset('assets/img/1920x1080/02.jpg') }}" alt="Slider Image">
                    <div class="container">
                        <div class="carousel-centered">
                            <div class="margin-b-40">
                                <h2 class="carousel-title">Service Kendaraan</h2>
                                <p class="color-white">Kami menyediakan layanan servis kendaraan berkualitas dengan teknisi berpengalaman  <br/> dan sistem pemesanan online yang mudah.</p>
                            </div>
                            <a href="#" class="btn-theme btn-theme-sm btn-white-brd text-uppercase">Take a Tour</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
<!--========== TIM KAMI ==========-->
<!-- Tambahkan ini di <head> -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    /* Umum */
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Section Tim */
    .team-section {
        background-color: rgb(232, 153, 57); /* ganti warna sesuai selera */
        padding: 60px 0;
        width: 100%;
    }

    .team-inner {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .team-section h2 {
        font-weight: 700;
        font-size: 36px;
        margin-bottom: 10px;
        color: #fff;
    }

    .team-section p {
        font-weight: 400;
        color: #f1f1f1;
        margin-bottom: 40px;
    }

    /* Grid Tim */
    .team-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 40px;
        justify-items: center;
    }

    .team-member {
        text-align: center;
        background: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 12px;
        transition: transform 0.3s ease;
    }

    .team-member:hover {
        transform: translateY(-5px);
    }

    .team-img {
        width: 160px;
        height: 160px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 15px;
        transition: transform 0.3s ease;
    }

    .team-img:hover {
        transform: scale(1.1);
    }

    .team-member h4 {
        font-weight: 600;
        font-size: 18px;
        color: #fff;
        margin: 10px 0 5px;
    }

    .team-member p {
        font-weight: 400;
        font-size: 14px;
        color: #f0f0f0;
        margin: 0;
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 600px) {
        .team-img {
            width: 120px;
            height: 120px;
        }

        .team-section h2 {
            font-size: 28px;
        }
    }
</style>


<div id="team" class="team-section">
  <div class="team-inner">
    <div class="row text-center">
      <h2 class="text-uppercase">Tim Kami</h2>
      <p class="margin-b-50">Kenali tim hebat di balik layanan servis kendaraan kami.</p>
    </div>

    <div class="team-container">
        <!-- Anggota 1 -->
        <div class="team-member">
            <img class="team-img" src="{{ asset('assets/img/team/team1.jpg') }}" alt="Aisya Zahra">
            <h4>Aisya Zahra</h4>
            <p>Customer Service</p>
        </div>

        <!-- Anggota 2 -->
        <div class="team-member">
            <img class="team-img" src="{{ asset('assets/img/team/team2.jpg') }}" alt="Aisyah C.">
            <h4>Arya Nuryawan</h4>
            <p>Teknisi Mekanik</p>
        </div>

        <!-- Anggota 3 -->
        <div class="team-member">
            <img class="team-img" src="{{ asset('assets/img/team/team3.jpg') }}" alt="Putri N.">
            <h4>Yusuf Andika</h4>
            <p>Admin Bengkel</p>
        </div>

        <!-- Anggota 4 -->
        <div class="team-member">
            <img class="team-img" src="{{ asset('assets/img/team/team4.jpg') }}" alt="Nurul A.">
            <h4>Riez Rafa Roro</h4>
            <p>Teknisi Elektrikal</p>
        </div>
    </div>
</div>


            
           <!-- ========== WHY US SECTION ========== -->
<style>
  body {
    font-family: 'Poppins', sans-serif;
    color: #111;
  }

  .why-us-section {
    background-color: #fff4e6; /* Oranye lembut */
    padding: 80px 0;
  }

  .why-us-section h2 {
    font-size: 36px;
    font-weight: 800;
    margin-bottom: 30px;
    color: #111;
    text-transform: uppercase;
    transition: transform 0.3s ease;
  }

  .why-us-section h2:hover {
    transform: scale(1.05);
    color: #d35400;
  }

  .why-us-section p {
    font-size: 18px;
    color: #333;
    line-height: 1.8;
    font-weight: 400;
  }

  .why-us-section .panel-title-child {
    font-size: 18px;
    font-weight: 600;
    color: #111;
    display: block;
    text-decoration: none;
    padding: 12px 0;
    transition: all 0.3s ease;
  }

  .why-us-section .panel-title-child:hover {
    color: #e67e22;
    transform: translateX(5px);
  }

  .why-us-section .panel-body {
    font-size: 15px;
    color: whitesmoke;
    line-height: 1.6;
  }
</style>

<div class="why-us-section">
  <div class="content-lg container">
    <div class="row">
      <div class="col-md-5 col-sm-5 md-margin-b-60">
        <div class="margin-t-50 margin-b-30">
          <h2>Mengapa Memilih Kami?</h2>
          <p>
            Di bengkel kami, pelayanan bukan hanya soal memperbaiki kendaraan, tapi tentang memberikan rasa tenang kepada Anda. 
            Kami mengutamakan kejujuran, kecepatan, dan ketepatan dalam setiap servis. Dengan teknisi yang bersertifikat, 
            alat modern, serta sistem kerja efisien, kami pastikan kendaraan Anda kembali prima dalam waktu singkat. 
            Kami hadir untuk membantu Anda menjaga performa kendaraan dengan standar tertinggi dan harga yang kompetitif.
          </p>
        </div>
      </div>

      <div class="col-md-5 col-sm-7 col-md-offset-2">
        <!-- Accordion -->
        <div class="accordion">
          <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                  <a class="panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Teknisi Bersertifikat & Berpengalaman
                  </a>
                </h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  Seluruh teknisi kami telah melalui pelatihan profesional dan memiliki jam terbang tinggi dalam menangani berbagai jenis kendaraan.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                  <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Peralatan Modern & Diagnostik Akurat
                  </a>
                </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                  Kami menggunakan teknologi terkini dalam proses pengecekan dan perbaikan, sehingga hasil lebih presisi dan cepat.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                  <a class="collapsed panel-title-child" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Garansi Servis & Layanan Cepat
                  </a>
                </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                  Kami memberikan garansi pada layanan kami serta memastikan proses servis yang cepat tanpa mengorbankan kualitas.
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Accordion -->
      </div>
    </div>
  </div>
</div>


        <!-- Latest Products -->
        <div id="products">
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Layanan Bengkel</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap (jika pakai) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS Internal -->
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff;
    }

    .layanan-section {
      padding: 60px 0;
      background-color: #fef3e0;
    }

    .layanan-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .layanan-title h2 {
      font-size: 32px;
      font-weight: 800;
      color: #333;
    }

    .layanan-title p {
      font-size: 16px;
      color: #666;
    }

    .layanan-card {
      transition: all 0.3s ease;
      background-color: #e67700;
      padding: 20px;
      border-radius: 10px;
      color: white;
      text-align: center;
      margin-bottom: 30px;
    }

    .layanan-card:hover {
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
      transform: translateY(-8px);
    }

    .layanan-card img {
      border-radius: 8px;
      transition: all 0.3s ease;
      max-width: 100%;
      height: auto;
    }

    .layanan-card:hover img {
      transform: scale(1.03);
    }

    .layanan-card h4 {
      font-size: 20px;
      font-weight: 700;
      margin-top: 15px;
    }

    .layanan-card p {
      font-size: 15px;
      margin-top: 10px;
    }
  </style>
</head>

<head>
  <meta charset="utf-8" />
  <title>Layanan Unggulan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap (kalau belum ada) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- CSS Khusus Layanan -->
  <style>
    .layanan-section {
      padding: 60px 0;
      background-color: #fda170;
    }

    .layanan-title {
      text-align: center;
      margin-bottom: 40px;
    }

    .layanan-title h2 {
      font-size: 32px;
      font-weight: 700;
    }

    .layanan-title p {
      font-size: 16px;
      color: #060606;
    }

    .layanan-card {
      text-align: center;
      margin-bottom: 30px;
    }

    .layanan-card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 8px;
      transition: transform 0.3s ease;
    }

    .layanan-card img:hover {
      transform: scale(1.05);
    }

    .layanan-card h4 {
      font-size: 20px;
      font-weight: bold;
      margin-top: 15px;
    }

    .layanan-card p {
      color: white;
      font-size: 14px;
    }
  </style>
</head>

<body>
  <section class="layanan-section">
    <div class="container">
      <div class="layanan-title">
        <h2>Layanan Unggulan Kami</h2>
        <p>Kami memberikan solusi terbaik untuk segala kebutuhan servis kendaraan Anda.</p>
      </div>

      <div class="row">
        <div class="col-sm-4 layanan-card">
          <img src="{{ asset('assets/img/layanan unggulan/service berkala.jpeg') }}" alt="Servis Berkala">
          <h4>Servis Berkala</h4>
          <p>Pemeriksaan rutin dan penggantian oli untuk menjaga performa mesin tetap optimal.</p>
        </div>

        <div class="col-sm-4 layanan-card">
          <img src="{{ asset('assets/img/layanan unggulan/servis rem.jpeg') }}" alt="Servis Rem">
          <h4>Servis Rem</h4>
          <p>Perawatan dan penggantian sistem pengereman untuk keselamatan berkendara Anda.</p>
        </div>

        <div class="col-sm-4 layanan-card">
          <img src="{{ asset('assets/img/layanan unggulan/tune up.jpeg') }}" alt="Tune Up">
          <h4>Tune Up</h4>
          <p>Penyetelan sistem mesin untuk efisiensi bahan bakar dan kinerja yang lebih baik.</p>
        </div>
      </div>
    </div>
  </section>
</body>



<!-- Pricing -->
<!-- Paket Servis & Gambar Berjalan -->
<div id="pricing">
  <style>
    /* Warna Dasar */
    .bg-orange {
      background-color: #ff6f00;
      padding: 60px 0;
      color: white;
    }

    /* Pricing Card */
    .pricing {
      background: #fff;
      color: #333;
      padding: 30px 20px;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .pricing:hover {
      transform: scale(1.05);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .pricing img {
      width: 100%;
      height: 180px;
      object-fit: cover;
      border-radius: 10px 10px 0 0;
      margin-bottom: 20px;
    }

    .pricing h3 {
      color: #ff6f00;
      font-weight: bold;
    }

    .pricing-list {
      padding-left: 20px;
    }

    .pricing-list-item {
      margin-bottom: 8px;
    }

    /* Baris Tinggi Sama */
    .row-equal {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
    }

    .col-custom {
      flex: 1;
      min-width: 280px;
    }

    /* Gambar Berjalan */
    .gambar-berjalan-wrapper {
      width: 100vw;
      margin-left: calc(-50vw + 50%);
      background-color: #ff6f00;
      padding: 30px 0;
      overflow: hidden;
    }

    .gambar-berjalan-track {
      display: flex;
      width: max-content;
      animation: jalanOtomatis 60s linear infinite;
      gap: 20px;
      padding: 0 20px;
    }

    .gambar-berjalan-track img {
      width: 200px;
      height: 150px;
      object-fit: cover;
      border-radius: 10px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s ease-in-out;
    }

    .gambar-berjalan-track img:hover {
      transform: scale(1.1);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    @keyframes jalanOtomatis {
      0% {
        transform: translateX(0);
      }
      100% {
        transform: translateX(-50%);
      }
    }
  </style>

  <!-- SECTION: PAKET SERVIS -->
  <div class="bg-orange">
    <div class="container">
      <h2 id="paket" class="text-center mb-5">Paket Servis Kami</h2>
      <div class="row-equal">
        <!-- Silver -->
        <div class="col-custom">
          <div class="pricing">
            <img src="{{ asset('assets/img/paketservis/silver.jpeg') }}" alt="Silver Paket">
            <div>
              <h3>Silver Package <span> - Rp</span> 150.000</h3>
              <p>Pemeriksaan umum & ganti oli ringan</p>
              <ul class="list-unstyled pricing-list">
                <li class="pricing-list-item">Starter Kit</li>
                <li class="pricing-list-item">Basic Features</li>
                <li class="pricing-list-item">Annual Report</li>
              </ul>
            </div>
            <a href="#" class="btn-theme btn-theme-sm btn-default-bg text-uppercase mt-3">Pesan Sekarang</a>
          </div>
        </div>

        <!-- Gold -->
        <div class="col-custom">
          <div class="pricing">
            <img src="{{ asset('assets/img/paketservis/gold.jpeg') }}" alt="Gold Paket">
            <div>
              <h3>Gold Package <span> - Rp</span> 300.000</h3>
              <p>Semua layanan Silver + tune up ringan</p>
              <ul class="list-unstyled pricing-list">
                <li class="pricing-list-item">Professional Kit</li>
                <li class="pricing-list-item">Full Options</li>
                <li class="pricing-list-item">Bi-anual Report</li>
              </ul>
            </div>
            <a href="#" class="btn-theme btn-theme-sm btn-default-bg text-uppercase mt-3">Pesan Sekarang</a>
          </div>
        </div>

        <!-- Platinum -->
        <div class="col-custom">
          <div class="pricing">
            <img src="{{ asset('assets/img/paketservis/platinum.jpeg') }}" alt="Platinum Paket">
            <div>
              <h3>Platinum Package <span> - Rp</span> 500.000</h3>
              <p>Servis menyeluruh, injeksi, AC, dan rem</p>
              <ul class="list-unstyled pricing-list">
                <li class="pricing-list-item">Complete Kit</li>
                <li class="pricing-list-item">Advanced Options</li>
                <li class="pricing-list-item">Monthly Report</li>
              </ul>
            </div>
            <a href="#" class="btn-theme btn-theme-sm btn-default-bg text-uppercase mt-3">Pesan Sekarang</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- SECTION: GAMBAR BERJALAN -->
  <div class="gambar-berjalan-wrapper">
    <div class="gambar-berjalan-track">
      @for ($i = 1; $i <= 12; $i++)
        <img src="{{ asset('assets/img/gambarjalan/bengkel' . $i . '.jpeg') }}" alt="Bengkel {{ $i }}">
      @endfor
      @for ($i = 1; $i <= 12; $i++)
        <img src="{{ asset('assets/img/gambarjalan/bengkel' . $i . '.jpeg') }}" alt="Bengkel {{ $i }} ulang">
      @endfor
    </div>
  </div>
</div>

<!-- End Pricing -->




        <!-- Work -->
        <div id="work">
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                            <h2>Portfolio</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
                        </div>
                    </div>
                    <!--// end row -->

                    <!-- Masonry Grid -->
                    <div class="masonry-grid row">


                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-30">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="{{ asset('assets/img/397x300/01.jpg') }}" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
                                                    <p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
                                                    <p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
                                                    <p class="margin-b-5"><strong>Client:</strong> FairTech</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-30">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="{{ asset('assets/img/397x300/02.jpg') }}" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
                                                    <p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
                                                    <p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
                                                    <p class="margin-b-5"><strong>Client:</strong> Keenthemes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="{{ asset('assets/img/397x300/03.jpg') }}" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
                                                    <p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
                                                    <p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
                                                    <p class="margin-b-5"><strong>Client:</strong> Keenthemes</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
						<div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
						<div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-30">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="{{ asset('assets/img/397x415/01.jpg') }}" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
                                                    <p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
                                                    <p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
                                                    <p class="margin-b-5"><strong>Client:</strong> FairTech</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
                        <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-30">
                            <!-- Work -->
                            <div class="work work-popup-trigger">
                                <div class="work-overlay">
                                    <img class="full-width img-responsive" src="{{ asset('assets/img/800x400/01.jpg') }}" alt="Portfolio Image">
                                </div>
                                <div class="work-popup-overlay">
                                    <div class="work-popup-content">
                                        <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                        <div class="margin-b-30">
                                            <h3 class="margin-b-5">Art Of Coding</h3>
                                            <span>Clean &amp; Minimalistic Design</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                                    <ul class="list-inline work-popup-tag">
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Strategy,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Implementation,</a></li>
                                                        <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Credentials</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="margin-t-10 sm-margin-t-0">
                                                    <p class="margin-b-5"><strong>Project Manager:</strong> Boris Becker</p>
                                                    <p class="margin-b-5"><strong>Executive:</strong> Heike Macatsch</p>
                                                    <p class="margin-b-5"><strong>Architect:</strong> Oliver Pocher</p>
                                                    <p class="margin-b-5"><strong>Client:</strong> FairTech</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Work -->
                        </div>
                    </div>
                    <!-- End Masonry Grid -->
                </div>
            </div>
            
            <!-- Clients -->
            <div class="content-lg container">
                <!-- Swiper Clients -->
                <div class="swiper-slider swiper-clients">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="{{ asset('assets/img/clients/01.png') }}" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="{{ asset('assets/img/clients/02.png') }}" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="{{ asset('assets/img/clients/03.png') }}" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="{{ asset('assets/img/clients/04.png') }}" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="{{ asset('assets/img/clients/05.png') }}" alt="Clients Logo">
                        </div>
                        <div class="swiper-slide">
                            <img class="swiper-clients-img" src="{{ asset('assets/img/clients/06.png') }}" alt="Clients Logo">
                        </div>
                    </div>
                    <!-- End Swiper Wrapper -->
                </div>
                <!-- End Swiper Clients -->
            </div>
            <!-- End Clients -->
        </div>
        <!-- End Work -->

        <!-- Services -->
        <div id="services">
            <div class="bg-color-sky-light" data-auto-height="true">
                <div class="content-lg container">
                    <div class="row margin-b-40">
                        <div class="col-sm-6">
                            <h2>Layanan Bengkel Kami</h2>
                            <p>Kami menyediakan layanan perawatan dan perbaikan kendaraan secara menyeluruh, dari pemeriksaan rutin hingga penggantian suku cadang.</p>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row row-space-1 margin-b-2">
                        <div class="col-sm-4 sm-margin-b-2">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-chemistry"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Servis Berkala Kendaraan</h3>
                                    <p class="margin-b-5">Ganti oli, filter, pengecekan rem, ban, aki & semua komponen rutin.</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-2">
                            <div class="service bg-color-base" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon color-white icon-screen-tablet"></i>
                                </div>
                                <div class="service-info">
                                    <h3 class="color-white">Pemeriksaan & Diagnostik</h3>
                                    <p class="color-white margin-b-5">Cek menyeluruh semua sistem kendaraan, termasuk ECU & komponen elektronik.</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Servis Berkala & Tune Up</h3>
                                    <p class="margin-b-5">Layanan berkala sesuai kilometer, termasuk penggantian oli, filter, dan pengecekan mesin agar performa tetap optimal.</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <!--// end row -->

                    <div class="row row-space-1">
                        <div class="col-sm-4 sm-margin-b-2">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-notebook"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Servis Sistem Rem & Suspensi</h3>
                                    <p class="margin-b-5">Perbaikan rem cakram, kampas rem, dan suspensi untuk kenyamanan berkendara.</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4 sm-margin-b-2">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-speedometer"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Penggantian Suku Cadang</h3>
                                    <p class="margin-b-5">	Ganti komponen aus seperti rantai, kampas kopling, busi, aki, dll.</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="service" data-height="height">
                                <div class="service-element">
                                    <i class="service-icon icon-badge"></i>
                                </div>
                                <div class="service-info">
                                    <h3>Layanan Darurat & Booking</h3>
                                    <p class="margin-b-5">Booking servis online dan bantuan darurat jika mogok di jalan.</p>
                                </div>
                                <a href="#" class="content-wrapper-link"></a>    
                            </div>
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
        </div>
        <!-- End Service -->
            
        <!-- Contact -->
        <div id="contact">
            <!-- Contact List -->
            <div class="section-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <!-- Contact List -->
                        <div class="col-sm-4 sm-margin-b-50">
                            <h3><a href="http://ft-seo.ch/">Zurich</a> <span class="text-uppercase margin-l-20">Human Resources</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> +41 60 66 555 44 33</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> hr@flameonepage.com</li>
                            </ul>
                        </div>
                        <!-- End Contact List -->

                        <!-- Contact List -->
                        <div class="col-sm-4 sm-margin-b-50">
                            <h3><a href="http://ft-seo.ch/">Malta</a> <span class="text-uppercase margin-l-20">Development</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> +356 7965 1257</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> developmemt@flameonepage.com</li>
                            </ul>
                        </div>
                        <!-- End Contact List -->

                        <!-- Contact List -->
                        <div class="col-sm-4 sm-margin-b-50">
                            <h3><a href="http://ft-seo.ch/">Manchester</a> <span class="text-uppercase margin-l-20">CEO</span></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incdidunt ut laboret dolor magna ut consequat siad esqudiat dolor</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> +44 654 583 5518</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i> ceo@flameonepage.com</li>
                            </ul>
                        </div>
                        <!-- End Contact List -->
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Contact List -->
            
            <!-- Google Map -->
            <div class="map height-300">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2724.0694570748947!2d7.455080415208266!3d46.94067397914616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e39d0cf20e8d1%3A0x9daac4cd3043d067!2sThunstrasse+50%2C+3005+Bern%2C+Switzerland!5e0!3m2!1sen!2sin!4v1496749852928" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
        </div>
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">
            <!-- Links -->
            <div class="section-seperator">
                <div class="content-md container">
                    <div class="row">
                        <div class="col-sm-2 sm-margin-b-30">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#body">Home</a></li>
                                <li class="footer-list-item"><a href="#about">Team</a></li>
                                <li class="footer-list-item"><a href="#work">Credentials</a></li>
                                <li class="footer-list-item"><a href="#contact">Contact</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                        <div class="col-sm-3">
                            <!-- List -->
                            <ul class="list-unstyled footer-list">
                                <li class="footer-list-item"><a href="#">Subscribe to Our Newsletter</a></li>
                                <li class="footer-list-item"><a href="#">Privacy Policy</a></li>
                                <li class="footer-list-item"><a href="#">Terms &amp; Conditions</a></li>
                            </ul>
                            <!-- End List -->
                        </div>
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Links -->

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="{{ asset('assets/img/logo-dark.png') }}" alt="flameonepage Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="fweight-700" href="#">FlameOnePage</a> Theme Powered by: <a class="fweight-700" href="http://ft-seo.ch/">FairTech Studio</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>
        <script src="{{ asset('assets/vendor/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/js/layout.min.js') }}" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>