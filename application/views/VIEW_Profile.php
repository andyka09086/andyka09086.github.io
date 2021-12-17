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
            <li><a class="scroll" href="<?php echo site_url('about')?>">About</a></li>
            <li class="active"><a class="scroll" href="<?php echo site_url('profile')?>">Profile</a></li>
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
      <div class="item active" style="background-image:url(<?php echo base_url('assets/admin/'. $row->image_profile_h); ?>)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1><?php echo $row->kategori_profile_h?></h1>
              <h2><?php echo $row->nama_profile_h?></h2>
              <p class="content-slide"><?php echo $row->deskripsi_profile_h?></p>
            </div>
          </div>
        </div>
      </div>
  </div>
  <?php } ?>
  <!--/#home-carousel-->
</section>
<section id="about">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2>PROFILE <span>PERUSAHAAN</span></h2>
        <div class="line"></div>
        <h2> <span>VISI & MISI</span></h2>
  <?php foreach ($visimisi as $row) { ?>
<p align="left" style="white-space:pre-wrap;"><span><strong>Visi</strong></span><br>
<?php echo $row->visi?>
<br><br>
<span><strong>Misi</strong></span><br>
<?php echo $row->misi?></p><br>
<?php } ?>
      </div>
    </div>
     <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2> <span>Struktur Perusahaan</span></h2>
        <div class="line"></div>
        <img src="<?php echo base_url()?>assets/images/Struktur OG.PNG"/>
      </div>
    </div>
      </div>
    </div>
  </div>
</section>