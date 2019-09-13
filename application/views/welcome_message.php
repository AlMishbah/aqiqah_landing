<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mulya Aqiqah</title>

    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>" >
    <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.css')?>">
    
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css')?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css')?>">
    <style>
    .phone-float{
      position:fixed;
      width:60px;
      height:60px;
      bottom:120px;
      left:40px;
      background-color:#6571F7;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      font-size:30px;
      box-shadow: 2px 2px 3px #999;
      z-index:100;
      padding-top:14px
    }
    .wa-float{
      position:fixed;
      width:60px;
      height:60px;
      bottom:40px;
      left:40px;
      background-color:#25d366;
      color:#FFF;
      border-radius:50px;
      text-align:center;
      font-size:30px;
      box-shadow: 2px 2px 3px #999;
      z-index:100;
      padding-top:14px
    }
    .map-responsive{
      overflow:hidden;
      padding-bottom:56.25%;
      position:relative;
      height:0;
    }
    .map-responsive iframe{
      left:0;
      top:0;
      height:100%;
      width:100%;
      position:absolute;
    }
    img.img-layanan{
      border-radius:20px;
      box-shadow:0px 5px 5px 3px #04040452;
      transition:0.7s;
    }
    img.img-layanan:hover{
      transition:0.7s;
      transform:translateY(-10px);
      box-shadow:0px 7px 15px 3px #04040452;
    }
    .link-ext{
      border-radius: 10px;
      background: #4CAF50 !important;
      font-weight: bold !important;
      color: #fff !important;
      transition:0.5s background;
    }
    .link-ext:hover{
      background: #48874A !important;
      transition:0.5s background;
    }
    .navbar-expand-md .navbar-nav .link-ext:before{
      background-color:transparent !important
    }
    </style>

  </head>
  <body>
    <a href="tel:08113816100" class="phone-float" target="_blank" data-toggle="tooltip" data-placement="right" title="Hubungi Via Telepon">
      <i class="lni-phone-handset text-white" data-toggle="tooltip" data-placement="right" title="Hubungi Via Telepon"></i>
    </a>
    <a href="https://api.whatsapp.com/send?phone=08113816100" class="wa-float" target="_blank" data-toggle="tooltip" data-placement="right" title="Hubungi Via WhatsApp">
      <i class="lni-whatsapp text-white" data-toggle="tooltip" data-placement="right" title="Hubungi Via WhatsApp"></i>
    </a>
    <header id="header-wrap">
      <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
          <a href="<?= base_url() ?>" class="navbar-brand">
            <img src="<?= base_url('assets/images/Logo.jpeg') ?>" alt="Mulya Aqiqah Logo" width="50">
          </a>       
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="lni-menu"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Layanan
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#harga">
                  Harga
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testimonial">
                  Testimoni
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">
                  Contact
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link link-ext px-2 py-1 text-white" href="<?= base_url('gallery') ?>">
                  Gallery
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="hero-area" class="hero-area-bg">
        <div class="container">      
          <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
              <div class="contents">
                <h2 class="head-title">IBADAH SEKALI <br> DALAM HIDUP</h2>
                <p> <strong> Mulya Aqiqah </strong> adalah Tempat Terbaik untuk Memberikan <strong> Hadiah Terindah Untuk Buah Hati Tercinta </strong> </p>
                <div class="header-button">
                  <a href="#services" class="btn btn-common">Lebih Lanjut</i></a>
                  <a href="<?= base_url('gallery') ?>" class="btn btn-border video-popup">Lihat Gallery</i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
              <div class="intro-img">
                <img class="img-fluid" src="<?= base_url('assets/img/intro-mobile.png') ?>" alt="Mulya Aqiqah Apps">
              </div>            
            </div>
          </div> 
        </div> 
      </div>

    </header>

    <section id="services" class="section-padding">
      <div class="container">
        <div class="section-header text-center">
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Layanan Kami</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon">
                <i class="lni-cog"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Menyediakan Hewan</a></h3>
                <p>Kami Menyediakan Hewan Untuk Keperluan <strong> AQIQAH </strong> dan <strong> QURBAN </strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lni-stats-up"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Pemotongan </a></h3>
                <p>Kami Menyediakan Pelayanan <strong> Pemotongan serta Pengulitan, Pencecahan sampai Proses Selesai </strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xs-12">
            <div class="services-item wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon">
                <i class="lni-users"></i>
              </div>
              <div class="services-content">
                <h3><a href="#">Catering</a></h3>
                <p>Kami Menyediakan Layanan Catering untuk berbagai Kegiatan seperti <strong> Syukuran Hajatan & Khitanan </strong></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="about-area section-padding bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 info">
            <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div>
                <div class="site-heading">
                  <h2 class="section-title">AQIQAH</h2>
                </div>
                <div class="content">
                  <p>
                    Praesent imperdiet, tellus et euismod euismod, risus lorem euismod erat, at finibus neque odio quis metus. Donec vulputate arcu quam. Morbi quis tincidunt ligula. Sed rutrum tincidunt pretium. Mauris auctor, purus a pulvinar fermentum, odio dui vehicula lorem, nec pharetra justo risus quis mi. Ut ac ex sagittis, viverra nisl vel, rhoncus odio. 
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight text-center" data-wow-delay="0.3s">
            <img class="img-fluid img-layanan" src="<?= base_url('assets/images/kambing.jpg') ?>" alt="Aqiqah - Mulya Aqiqah" width="60%">
          </div>
        </div>
      </div>
    </div>

    <div class="about-area section-padding bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12 col-xs-12 wow fadeInRight text-center" data-wow-delay="0.3s">
            <img class="img-fluid img-layanan" src="<?= base_url('assets/images/kambing3.jpg') ?>" alt="Qurban - Mulya Aqiqah" width="60%">
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12 info">
            <div class="about-wrapper wow fadeInLeft" data-wow-delay="0.3s">
              <div>
                <div class="site-heading">
                  <h2 class="section-title">QURBAN</h2>
                </div>
                <div class="content">
                  <p>
                    Praesent imperdiet, tellus et euismod euismod, risus lorem euismod erat, at finibus neque odio quis metus. Donec vulputate arcu quam. Morbi quis tincidunt ligula. Sed rutrum tincidunt pretium. Mauris auctor, purus a pulvinar fermentum, odio dui vehicula lorem, nec pharetra justo risus quis mi. Ut ac ex sagittis, viverra nisl vel, rhoncus odio. 
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section id="harga" class="section-padding bg-gray">
      <div class="container">
        <div class="section-header text-center">          
          <h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Daftar Harga</h2>
          <div class="shape wow fadeInDown" data-wow-delay="0.3s"></div>
        </div>
        <div class="row">

          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="<?= base_url('assets/images/produk/1,5jt.jpg') ?>" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">1 Ekor Kambing + Masak (Dua Jenis Masakan) </a></h3>
                  <p class="font-weight-bold">Rp. 1.500.0000</p>
                </div>
                <p>1 Ekor Kambing dan Layanan Pemasakan untuk <strong>Dua Jenis Masakan</strong></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="<?= base_url('assets/images/produk/3jt.jpg') ?>" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#">1. Ekor Kambing + Masak + 50 Nasi Box</a></h3>
                  <p class="font-weight-bold">Rp. 3.000.000</p>
                </div>
                <p>Isi Nasi Box : <strong> Nasi, Acar, Sambal Goreng, Kerupuk,Buah, Tisu & Kertas Doa </strong></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="<?= base_url('assets/images/produk/3,6jt.jpg') ?>" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#"> 1 Ekor Kambing + Masak + 80 Nasi Bok</a></h3>
                  <p class="font-weight-bold">Rp. 3.600.000. </p>
                </div>
                <p>Isi Nasi Box : <strong> Nasi, Acar, Sambal Goreng, Kerupuk,Buah, Tisu & Kertas Doa </strong></p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="team-item wow fadeInRight" data-wow-delay="0.2s">
              <div class="team-img">
                <img class="img-fluid" src="<?= base_url('assets/images/produk/10pbox.jpg') ?>" alt="">
              </div>
              <div class="contetn">
                <div class="info-text">
                  <h3><a href="#"> Sneck Box (3 Jenis Sneck + Air mineral) </a></h3>
                  <p class="font-weight-bold">Rp. 10.000/Box </p>
                </div>
                <p>Isi Nasi Box : <strong> Nasi, Acar, Sambal Goreng, Kerupuk,Buah, Tisu & Kertas Doa </strong></p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
    <section id="cta" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">           
            <div class="cta-text">
              <h4>Tertarik Ingin Menghubungi Kami?</h4>
              <p>Jika anda tertarik dan ingin menghubungi kami. Klik <strong> Hubungi Via WhatsApp<strong> untuk Menghubungi Kami Sekarang melalui Whatsapp</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12 text-center wow fadeInRight" data-wow-delay="0.3s">
            <a target="blank" href="https://api.whatsapp.com/send?phone=08113816100" class="btn btn-common">Hubungi Via Whatsapp</a>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer" class="footer-area section-padding">
      <div class="container">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="footer-logo">
                  <img src="<?= base_url('assets/images/Logo.jpeg') ?>" alt="Logo Mulya Aqiqah" width="100%">
                </h3>
                <div class="textwidget">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis.</p>
                </div>
                <div class="social-icon">
                  <a class="facebook" href="#"><i class="lni-facebook-filled"></i></a>
                  <a class="instagram" href="#"><i class="lni-instagram-filled"></i></a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel mb-0 pb-0">Tempat Kami</h3>
              <p class='mb-4 font-weight-bold'>Di Depan Kantor Pos Batu Phat</p>
              <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d496.66070991508786!2d97.0552232!3d5.217738!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x82a5a2b4473e1afa!2sKantor%20Pos%20Batu%20Phat!5e0!3m2!1sen!2sid!4v1568384520216!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
              <h3 class="footer-titel">Kontak Kami</h3>
              <ul class="address">
                <li>
                  <a href="#">
                    <i class="lni-map-marker"></i>
                    (Depan Kantor Pos Baru Phat) <br><br> Jalan Raya Lintas Sumatera, Panggoi, Muara Dua, Panggoi, Lhokseumawe, Kota Lhokseumawe, Aceh 24355
                  </a>
                </li>
                <li>
                  <a href="#"><i class="lni-phone-handset"></i> 
                    No Telp : <strong> 0813 3810 3066 </strong> <br>
                    No. WhatsApp : <strong> 0811 3816 100 </strong>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>  
      </div> 
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="copyright-content">
                <p>Copyright © 2020 <a rel="nofollow" href="https://uideck.com">UIdeck</a> All Right Reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </footer> 

    <a href="#" class="back-to-top">
    	<i class="lni-arrow-up"></i>
    </a>
    
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    
    <script src="<?= base_url('assets/js/jquery-min.js')?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js')?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/js/owl.carousel.min.js')?>"></script>
    <script src="<?= base_url('assets/js/wow.js')?>"></script>
    <script src="<?= base_url('assets/js/jquery.nav.js')?>"></script>
    <script src="<?= base_url('assets/js/scrolling-nav.js')?>"></script>
    <script src="<?= base_url('assets/js/jquery.easing.min.js')?>"></script>  
    <script src="<?= base_url('assets/js/main.js')?>"></script>
    <script src="<?= base_url('assets/js/form-validator.min.js')?>"></script>
    <script src="<?= base_url('assets/js/contact-form-script.min.js')?>"></script>
      
  </body>
</html>
