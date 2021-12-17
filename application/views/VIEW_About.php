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
            <li><a class="scroll" href="<?php echo site_url('home')?>">Home</a></li>
            <li class="active"><a class="scroll" href="<?php echo site_url('about')?>">About</a></li>
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
  <?php foreach ($header as $row) { ?>
  <div id="home-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active" style="background-image:url(<?php echo base_url('assets/admin/'. $row->image_about_h); ?>)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1><?php echo $row->kategori_about_h?></h1>
              <h2><?php echo $row->nama_about_h?></h2>
              <p style="white-space:pre-wrap;"><?php echo $row->deskripsi_about_h?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <!--/#home-carousel-->
</section>
<!--About-Section-Start-->
<section id="about">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2>Tentang <span>KAMI</span></h2>
        <div class="line"></div>
        <p><span><strong>Bertanggung jawab</strong></span> terhadap lingkungan dan yang akan selalu berurusan dengan instansi terkait selama beroperasinya gedung.</p>
      </div>
    </div>
  <div class="row">
  <?php foreach ($konten1 as $row) { ?>
    <div class="col-md-12 ab-sec">
      <div class="col-md-12">     
        <h3 class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms"><span></span><?php echo $row->judul_about_konten1?></h3>
        <p style="white-space:pre-wrap;" class="wow fadeInUp" data-wow-duration="2000ms" data-wow-delay="300ms"><span><strong></strong></span> <?php echo $row->isi_about_konten1?></p>
    </div>
  </div>
  <?php } ?>
  </div>
    <div class="row">
    <div class="col-md-12 ab-sec">
      <div class="col-md-6">
        <br/><br/>
      <?php foreach ($konten2 as $row) { ?>
        <h3 class="wow fadeInLeft" data-wow-duration="2000ms" data-wow-delay="300ms"><span></span><?php echo $row->judul_about_konten2?></h3>
        <p style="white-space:pre-wrap;" class="wow fadeInUp" data-wow-duration="3000ms" data-wow-delay="300ms"><span><strong></strong></span><?php echo $row->isi_about_konten2?></p>
      <?php } ?>
      </div>
      <div class="col-md-6 ab-sec-img wow bounceIn" data-wow-duration="5000ms" data-wow-delay="300ms">
        <div class="tentang_kami">
        <img class="img-rounded img-thumbnail" src="<?php echo base_url('assets/admin/'. $row->image_about_konten2); ?>" alt="">
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 ab-sec">
      <div class="col-md-12">
      <?php foreach ($konten3 as $row) { ?>
        <h3 class="wow bounce" data-wow-duration="1000ms" data-wow-delay="300ms"><span></span><?php echo $row->judul_about_konten3?></h3>
        <p style="white-space:pre-wrap;" class="wow rotateInUpRight" data-wow-duration="1000ms" data-wow-delay="300ms"><span><strong></strong></span><?php echo $row->isi_about_konten3?></p>
      <?php } ?>
      </div>
    </div>
  </div>
</section>