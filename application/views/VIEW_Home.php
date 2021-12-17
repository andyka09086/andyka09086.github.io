<?php include('VIEW_Head.php');?>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100">
<!--Preloader-->
<div id="preloader">
  <div id="pre-status">
    <div class="preload-placeholder"></div>
  </div>
</div>
<!--Navigation-->
<header id="menu">
  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="#menu"><img src="<?php echo base_url();?>assets/images/Logo/logo01.png" width="80px" height="40px" alt="logo"></a> </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a class="scroll" href="<?php echo site_url('home')?>">Home</a></li>
            <li><a class="scroll" href="<?php echo site_url('about')?>">About</a></li>
            <li><a class="scroll" href="<?php echo site_url('profile')?>">Profile</a></li>
            <li><a class="scroll" href="<?php echo site_url('gallery')?>">Gallery</a></li>
            <li><a class="scroll" href="<?php echo site_url('contact')?>">Contact Us</a></li>
            <li><a class="scroll" href="<?php echo site_url('news')?>">News</a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </div>
  </div>
</header>
<!--Slider-Start-->
<section id="slider">
  <div id="home-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active" style="background-image:url(<?php echo base_url('assets/images/Slider/img3.jpg')?>)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>Pengolahan Air Limbah</h1>
              <h2>PT. Ali Makmur</h2>
              <p class="content-slide">PT. Ali Makmur bergerak dalam bidang pekerjaan Pengolahan Air Limbah atau lebih dikenal dengan STP (Sewage Treatment Plant) dan WWTP (Waste Water Treatment Plant) serta pekerjaan mekanikal dan elektrikal.</p>
            </div>
          </div>
        </div>
      </div>
  <?php foreach ($slider as $row) { ?>
      <div class="item" style="background-image:url(<?php echo base_url('assets/admin/'. $row->image_slider); ?>)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1><?php echo $row->kategori_slider?></h1>
              <h2><?php echo $row->nama_kategori?></h2>
              <p class="content-slide"><?php echo $row->deskripsi_slider?></p>
            </div>
          </div>
        </div>
      </div>
  <?php } ?>
      <!-- <div class="item" style="background-image:url(<?php echo base_url('assets/images/Slider/img3.jpg')?>)">
        <div class="carousel-caption container">
          <div class="row">
             <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>Pengolahan Air Limbah</h1>
              <h2>PT. Ali Makmur</h2>
              <p class="content-slide">PT. Ali Makmur bergerak dalam bidang pekerjaan Pengolahan Air Limbah atau lebih dikenal dengan STP (Sewage Treatment Plant) dan WWTP (Waste Water Treatment Plant) serta pekerjaan mekanikal dan elektrikal.</p>
            </div>
          </div>
        </div>
      </div> -->
      <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a> </div>
  </div>
  <!--/#home-carousel-->
</section>

<!-- CHOOSE  -->
  <div class="whyschose">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Why <strong class="black">choose us</strong></h2>
            <span>Pelayanan Cepat & Tepat Dengan Harga Yang Terjangkau!</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="choose_bg wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
    <div class="container">
      <div class="white_bg">
        <div class="row">
          <?php foreach ($konten1 as $row) { ?>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="for_box">
              <i><img src="<?php echo base_url('assets/admin/'. $row->image_home_konten1); ?>"/></i>
              <h3><?php echo $row->judul_home_konten1; ?></h3>
              <p class="content-home"><?php echo $row->isi_home_konten1?></p>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
<!-- end CHOOSE -->

<!-- service process --> 
  <div class="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Service <strong class="black">Process</strong></h2>
            <span>Jalan Mudah Untuk Mendapatkan Kebutuhan & Keinginan Anda</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="service-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <i><img src="<?php echo base_url()?>assets/icon/service5.png"/></i>
            <h3>3 Tahun Garansi</h3>
            <p>Garansi yang memiliki rentang waktu sampai dengan 3 tahun</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="service-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <i><img src="<?php echo base_url()?>assets/icon/service6.png"/></i>
            <h3>Menang Berbagai Penghargaan</h3>
            <p>Berbagai penghargaan dicapai dan sudah terdaftar wajib pajak</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="service-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <i><img src="<?php echo base_url()?>assets/icon/service1.png"/></i>
            <h3>Pelayanan yang Cepat</h3>
            <p>Kami selalu siap dan tanggap dalam melayani Customer</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="service-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <i><img src="<?php echo base_url()?>assets/icon/service2.png"/></i>
            <h3>Pembayaran yang Mudah</h3>
            <p>Dapat negosiasi perihal harga dan pembayaran sesuai keinginan Customer</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="service-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <i><img src="<?php echo base_url()?>assets/icon/service3.png"/></i>
            <h3>Team yang Profesional</h3>
            <p>Dilakukan oleh pekerja yang kompeten dan berpengalaman</p>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
          <div class="service-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <i><img src="<?php echo base_url()?>assets/icon/service4.png"/></i>
            <h3>Harga yang Terjangkau</h3>
            <p>Memiliki rentang harga yang terjangkau dan ekonomis</p>
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- end service -->

<!-- our product -->
  <!-- <div class="product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h2 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">our <strong class="black">services</strong></h2>
            <span>We package the products with best services to make you a happy customer.</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="product-bg">
    <div class="product-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="product-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <i><img src="<?php echo base_url()?>assets/icon/p1.png"/></i>
              <h3>Norton Internet Security</h3>
              <span>$25.00</span>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="product-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <i><img src="<?php echo base_url()?>assets/icon/p2.png"/></i>
              <h3>Norton Internet Security</h3>
              <span>$25.00</span>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="product-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <i><img src="<?php echo base_url()?>assets/icon/p3.png"/></i>
              <h3>Norton Internet Security</h3>
              <span>$25.00</span>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="product-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <i><img src="<?php echo base_url()?>assets/icon/p4.png"/></i>
              <h3>Norton Internet Security</h3>
              <span>$25.00</span>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="product-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <i><img src="<?php echo base_url()?>assets/icon/p5.png"/></i>
              <h3>Norton Internet Security</h3>
              <span>$25.00</span>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="product-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <i><img src="<?php echo base_url()?>assets/icon/p2.png"/></i>
              <h3>Norton Internet Security</h3>
              <span>$25.00</span>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="product-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
              <i><img src="<?php echo base_url()?>assets/icon/p6.png"/></i>
              <h3>Norton Internet Security</h3>
              <span>$25.00</span>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
          <div class="product-box wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <i><img src="<?php echo base_url()?>assets/icon/p7.png"/></i>
            <h3>Norton Internet Security</h3>
            <span>$25.00</span>
          </div>
        </div> 
      </div>
    </div>
  </div>
  <div class="Clients_bg_white">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <h3 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">What Clients Say?</h3>
          </div>
        </div>
      </div> -->

      <!-- <div id="client_slider" class="carousel slide banner_Client" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#client_slider" data-slide-to="0" class="active"></li>
          <li data-target="#client_slider" data-slide-to="1"></li>
          <li data-target="#client_slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container">
              <div class="carousel-caption text-bg">
               <div class="img_bg">
                  <i><img src="<?php echo base_url()?>assets/images/lllll.png"/><span>Jone Due<br><strong class="date">12/02/2019</strong></span></i>   
               </div>
                <p style="color:black">You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-bg">
                <div class="img_bg">
                  <i><img src="<?php echo base_url()?>assets/images/lllll.png"/><span>Jone Due<br><strong class="date">12/02/2019</strong></span></i>
               </div>
                <p style="color:black">You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container">
              <div class="carousel-caption text-bg">
                 <div class="img_bg">
                  <i><img src="<?php echo base_url()?>assets/images/lllll.png"/><span>Jone Due<br><strong class="date">12/02/2019</strong></span></i>      
               </div>
                <p style="color:black">You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am really satisfied with my first laptop service.<br>
                You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. I am </p>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
  </div>
<!-- end our product -->