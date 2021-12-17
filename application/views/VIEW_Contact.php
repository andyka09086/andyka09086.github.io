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
            <li><a class="scroll" href="<?php echo site_url('gallery')?>">Gallery</a></li>
            <li class="active"><a class="scroll" href="<?php echo site_url('contact')?>">Contact Us</a></li>
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
      <div class="item active"><iframe style="padding-top:85px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7933.16172738998!2d106.79942607234982!3d-6.186804265704269!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f68fd07c2aa1%3A0xcf3604226cae6bc9!2sKota%20Bambu%20Sel.%2C%20Kec.%20Palmerah%2C%20Kota%20Jakarta%20Barat%2C%20Daerah%20Khusus%20Ibukota%20Jakarta!5e0!3m2!1sid!2sid!4v1636896230264!5m2!1sid!2sid" width="100%" height="650"></iframe>
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <!-- <h1>We Are Cosmix</h1>
              <h2>Creative Themes</h2>
              <p>Cosmix – A One Page Parallax, HTML5 and Responsive Template suitable for any creative business agency. Multiple pages also included in this theme with lots of CSS and JQuery animations</p> -->
            </div>
          </div>
        </div>
      </div>
  </div>
  <!--/#home-carousel-->
</section>
<!--Contact-Section-Start-->
<section id="contact">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2>KONTAK <span>KAMI</span></h2>
        <div class="line"></div>
        <p><span><strong>Hubungi Kami</strong></span> jika ada yang ingin anda tanyakan untuk mendapatkan informasi lebih lanjut.</p>
      </div>
    </div>
    <div class="text-center">
      <div class="col-md-6 col-sm-6 contact-sec-1">
        <h4>INFO <span>CONTACT</span></h4>
  <?php foreach ($contact_info as $row) { ?>
        <ul class="contact-form">
          <li><i class="fa fa-map-marker"></i>
            <h6><strong> Alamat : </strong><?php echo $row->alamat?></h6>
          </li>
          <li><i class="fa fa-envelope"></i>
            <h6><strong> Email Kami : </strong><?php echo $row->email?></h6>
          </li>
          <li><i class="fa fa-phone"></i>
            <h6><strong> Telp : </strong><?php echo $row->telp?></h6>
          </li>
          <li><i class="fa fa-wechat"></i>
            <h6><strong> Website : </strong><?php echo $row->website?></h6>
          </li>
        </ul>
  <?php } ?>
      </div>
      <div class="col-md-6 col-sm-6">
        <form id="main-contact-form" name="contact-form" method="post" action="<?php echo site_url('contact/SimpanData'); ?>">
          <div class="row  wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required="required">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email Address" required="required">
              </div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Tuliskan Isi Pesan Anda..." required="required"></textarea>
          </div>
          <a class="btn-send col-md-12 col-sm-12 col-xs-12" href="#" onclick="document.getElementById('main-contact-form').submit()">Send Now</a>
        </form>
      </div>
    </div>
  </div>
</section>