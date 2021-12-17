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
            <li><a class="scroll" href="<?php echo site_url('profile')?>">Profile</a></li>
            <li class="active"><a class="scroll" href="<?php echo site_url('gallery')?>">Gallery</a></li>
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
      <div class="item active" style="background-image:url(<?php echo base_url('assets/admin/'. $row->image_gallery_h); ?>)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
               <h1><?php echo $row->kategori_gallery_h?></h1>
              <h2><?php echo $row->nama_gallery_h?></h2>
              <p ><?php echo $row->deskripsi_gallery_h?></p>
            </div>
          </div>
        </div>
      </div>
  </div>
  <?php } ?>
  <!--/#home-carousel-->
</section>
<!--Portfolio-Section-Start-->
<section id="portfolio">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2>GALLE<span>RY</span></h2>
        <div class="line"></div>
        <p><span><strong> </strong></span> </p>
      </div>
    </div>
    <!-- <div class="text-center">
      <ul class="portfolio-filter">
        <li><a class="active" href="#" data-filter="*">All Works</a></li>
        <li><a href="#" data-filter=".creative">Creative</a></li>
        <li><a href="#" data-filter=".corporate">Corporate</a></li>
        <li><a href="#" data-filter=".portfolio">Portfolio</a></li>
      </ul>
      <!/#portfolio-filter-->
    </div>
    <div class="container">
    <div class="portfolio-filter">
    </div>
    <div class="portfolio-items">
      <?php foreach ($dokumentasi as $row) { ?>
      <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item">
        <div class="portfolio-item-inner"> <img class="img-responsive" src="<?php echo base_url('assets/admin/'. $row->image_gallery); ?>" alt="">
          <div class="portfolio-info"> <a class="preview" href="<?php echo base_url('assets/admin/'. $row->image_gallery); ?>" data-rel="prettyPhoto"><i class="fa fa-plus-circle"></i></a>
            <h6><?php echo $row->judul_gallery?></h6>
            <p><?php echo $row->deskripsi_gallery?></p>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>