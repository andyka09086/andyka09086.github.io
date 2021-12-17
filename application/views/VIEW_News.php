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
            <li><a class="scroll" href="<?php echo site_url('contact')?>">Contact Us</a></li>
            <li class="active"><a class="scroll" href="<?php echo site_url('news')?>">News</a></li>
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
      <div class="item active" style="background-image:url(<?php echo base_url('assets/admin/'. $row->image_news_h); ?>)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1><?php echo $row->kategori_news_h?></h1>
              <h2><?php echo $row->nama_news_h?></h2>
              <p ><?php echo $row->deskripsi_news_h?></p>
            </div>
          </div>
        </div>
      </div>
  </div>
  <?php } ?>
</section>
<section class="choice_area p_120">
  <div class="container">
    <div class="main_title2">
      <h2>Latest News</h2>
    </div>
    <div class="row choice_inner">
    <?php foreach ($berita_terbaru as $row) { ?>
      <div class="col-lg-3 col-md-6 choice_inner">
        <div class="choice_item">
        	<img class="img-fluid" src="<?php echo base_url(); ?>assets/admin/<?php echo $row->image_news; ?>" alt="">
        		<div class="choice_text">
        			<div class="date">
        				<a class="gad_btn" data-toggle="modal" href="#detailberita<?php echo $row->id_news;?>">Read More</a>
								<a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo date('M d, Y', strtotime($row->date_news));?></a>
        			</div>
        			<a data-toggle="modal" href="#detailberita<?php echo $row->id_news;?>"><h4><?php echo $row->judul_news?></h4></a>
        			<p><?php echo substr($row->deskripsi_news, 0,90);?>...</p>
        		</div>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>
</section>
<?php foreach ($berita_terbaru as $row) { ?>
<div class="modal fade" id="detailberita<?php echo $row->id_news; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<!-- <div class="modal-dialog"> -->
		<div class="modal-content">
			<div class="modal-header">
        <button style="background: red; color: #ffffff; float: right; font-family: comic sans ms; font-size: 12px; padding: 3px;" data-dismiss="modal" aria-hidden="true">&nbsp;<i class="fa fa-close"></i>&nbsp;</button>
				<h4 class="modal-title" style="background-color: #FFBF00; color: #000000; padding: 10px; font-size: 20px; font-family: comic sans ms;" id="myModalLabel">Latest News</h4>
			</div>
			<div class="modal-body">
        <div class="control-group">
          <div class="controls">
            <center><legend><?php echo $row->judul_news; ?></legend></center>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <center><img src="<?php echo base_url('assets/admin/'.$row->image_news)?>" width="400" height="400"></center><br>
          </div>
        </div>
        <div class="float-right">
       		<div class="media">
       			<div class="media-body">
       				<h5>Written by. <?php echo $row->user_id; ?></h5>
       				<h5><b><?php echo date('M d, Y H:i', strtotime($row->date_news)).' WIB';?><b></h5><br><br>
       			</div>
       		</div>
       	</div>
        <div class="control-group">
          <div class="controls">
            <p style="white-space:pre-wrap;" style="text-align: justify;"><?php echo $row->deskripsi_news; ?></p>
          </div>
        </div>
			</div>
		</div>
	</div>
<!-- </div> -->
<?php } ?>
<br/><br/><br/>
<!--================Service List Area =================-->
<section class="product_list_area p_100">
  <div class="container">
    <div class="row product_list_inner">
      <div class="col-lg-6">
        <div class="main_title2">
          <h2>Best Service Deals</h2>
        </div>
        <div class="product_list">
    <?php foreach ($best_service as $row) { ?>
          <div class="media">
            <div class="d-flex">
              <img src="<?php echo base_url(); ?>assets/admin/<?php echo $row->image_news_service; ?>" alt="" />
            </div>
            <div class="media-body">
              <div class="choice_text">
                <a data-toggle="modal" href="#detailservice<?php echo $row->id_news_service;?>"><h4><?php echo $row->judul_news_service?></h4></a>
                <div class="date">
                  <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo date('M d, Y', strtotime($row->date_news_service));?></a>
                </div>
              </div>
            </div>
          </div>
    <?php } ?>
        </div>
      </div>
      <!-- Modal Best Service -->
<?php foreach ($best_service as $row) { ?>
<div class="modal fade" id="detailservice<?php echo $row->id_news_service; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
        <button style="background: red; color: #ffffff; float: right; font-family: comic sans ms; font-size: 12px; padding: 3px;" data-dismiss="modal" aria-hidden="true">&nbsp;<i class="fa fa-close"></i>&nbsp;</button>
				<h4 class="modal-title" style="background-color: #FFBF00; color: #000000; padding: 10px; font-size: 20px; font-family: comic sans ms;" id="myModalLabel">Life Hacks</h4>
			</div>
			<div class="modal-body">
        <div class="control-group">
          <div class="controls">
            <center><legend><?php echo $row->judul_news_service; ?></legend></center>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <center><img src="<?php echo base_url('assets/admin/'.$row->image_news_service)?>" width="400" height="400"></center><br>
          </div>
        </div>
       	<div class="float-right">
       		<div class="media">
       			<div class="media-body">
       				<h5>Written by. <?php echo $row->user_id; ?></h5>
       				<h5><b><?php echo date('M d, Y H:i', strtotime($row->date_news_service)).' WIB';?><b></h5><br><br>
       			</div>
       		</div>
       	</div>
        <div class="control-group">
          <div class="controls">
            <p style="white-space:pre-wrap;" style="text-align: justify;"><?php echo $row->deskripsi_news_service; ?></p>
          </div>
        </div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
      <div class="col-lg-6">
        <div class="main_title2">
          <h2>Life Hacks</h2>
        </div>
        <div class="product_list">
          <?php foreach ($life_hacks as $row) { ?>
          <div class="media">
            <div class="d-flex">
              <img src="<?php echo base_url(); ?>assets/admin/<?php echo $row->image_news_tips; ?>" alt="" />
            </div>
            <div class="media-body">
              <div class="choice_text">
                <a data-toggle="modal" href="#detailtips<?php echo $row->id_news_tips;?>"><h4><?php echo $row->judul_news_tips?></h4></a>
                <div class="date">
                  <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i><?php echo date('M d, Y', strtotime($row->date_news_tips));?></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
    <!--================End Service List Area =================-->
<?php foreach ($life_hacks as $row) { ?>
<div class="modal fade" id="detailtips<?php echo $row->id_news_tips; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
        <button style="background: red; color: #ffffff; float: right; font-family: comic sans ms; font-size: 12px; padding: 3px;" data-dismiss="modal" aria-hidden="true">&nbsp;<i class="fa fa-close"></i>&nbsp;</button>
				<h4 class="modal-title" style="background-color: #FFBF00; color: #000000; padding: 10px; font-size: 20px; font-family: comic sans ms;" id="myModalLabel">Life Hacks</h4>
			</div>
			<div class="modal-body">
        <div class="control-group">
          <div class="controls">
            <center><legend><?php echo $row->judul_news_tips; ?></legend></center>
          </div>
        </div>
        <div class="control-group">
          <div class="controls">
            <center><img src="<?php echo base_url('assets/admin/'.$row->image_news_tips)?>" width="400" height="400"></center><br>
          </div>
        </div>
       	<div class="float-right">
       		<div class="media">
       			<div class="media-body">
       				<h5>Written by. <?php echo $row->user_id; ?></h5>
       				<h5><b><?php echo date('M d, Y H:i', strtotime($row->date_news_tips)).' WIB';?><b></h5><br><br>
       			</div>
       		</div>
       	</div>
        <div class="control-group">
          <div class="controls">
            <p style="white-space:pre-wrap;" style="text-align: justify;"><?php echo $row->deskripsi_news_tips; ?></p>
          </div>
        </div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
<br/><br/><br/>