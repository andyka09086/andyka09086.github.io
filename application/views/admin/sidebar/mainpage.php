
<!DOCTYPE html>
<html class="fixed">
  <head>
    <!-- Basic -->
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-datepicker/css/datepicker3.css" />
    <!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/pnotify/pnotify.custom.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/morris/morris.css" />
    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/stylesheets/theme.css" />
    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/stylesheets/skins/default.css" />
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/stylesheets/theme-custom.css" />
    <!-- Head Libs -->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/modernizr/modernizr.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/admin/vendor/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/flot/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/flot/jquery.flot.resize.js"></script> -->
  </head>
  <body>
    <section class="body">
      <!-- start: header -->
      <header class="header">
        <div class="logo-container">
          <a href="../" class="logo">
            <img src="<?php echo base_url(); ?>assets/admin/images/logo01.png" height="35" alt="Logo" />
          </a>
          <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
          </div>
        </div>

        <!-- start: search & user box -->
        <div class="header-right">
          <div id= "userbox" class="userbox">
          <span class="name"><a href="<?php echo site_url('home')?>" title="Preview PT. Ali Makmur" target="_blank">PT. Ali Makmur &nbsp;&nbsp;<i class="fa fa-external-link"></i></a>
          </span></div>
          <span class="separator"></span>
          <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
              <i class=" fa fa-user"></i>
              <div class="profile-info">
                <span class="name"><?php echo $this->session->userdata("full_name");?></span>
                <span class="role"><?php echo $this->session->userdata("level");?></span>
              </div>
              <i class="fa custom-caret"></i>
            </a>
            <div class="dropdown-menu">
              <ul class="list-unstyled">
                <li class="divider"></li>
                <li>
                  <a role="menuitem" tabindex="-1" href="<?php echo site_url('administrator/Logout')?>"><i class="fa fa-power-off"></i> Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end: search & user box -->
      </header>
      <!-- end: header -->
<?php if($this->session->userdata('level') == "Admin"){ ?>
      <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">
          <div class="sidebar-header">
            <div class="sidebar-title">Navigation</div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
              <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
          </div>
          <div class="nano">
            <div class="nano-content">
              <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                  <li class="nav-active">
                    <a href="<?php echo site_url('administrator/dashboard')?>">
                      <i class="fa fa-home" aria-hidden="true"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-h-square" aria-hidden="true"></i>
                      <span>Home</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="<?php echo site_url('slider')?>"> Slider </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('home_konten1')?>"> Content 1 </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-list-alt" aria-hidden="true"></i>
                      <span>About</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="<?php echo site_url('about_header')?>"> Header About </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('about_konten1')?>"> Content 1 </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('about_konten2')?>"> Content 2 </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('about_konten3')?>"> Content 3 </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-building-o" aria-hidden="true"></i>
                      <span>Profile</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="<?php echo site_url('profile_header')?>"> Header Profile </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('profile_visimisi')?>"> Visi Misi </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-picture-o" aria-hidden="true"></i>
                      <span>Gallery</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="<?php echo site_url('gallery_header')?>"> Header Gallery </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('gallery_admin')?>"> Dokumentasi </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="<?php echo site_url('contact_info')?>">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Info Kontak</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('message')?>">
                      <i class="fa fa-comments-o" aria-hidden="true"></i>
                      <span>Info Pesan</span>
                    </a>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-list" aria-hidden="true"></i>
                      <span>News</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="<?php echo site_url('news_header')?>"> Header Berita </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('news_admin')?>"> Berita Terbaru </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('news_admin_tips')?>"> Berita Life Hacks </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('news_admin_service')?>"> Berita Best Service </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </aside>
<?php } ?>
<?php if($this->session->userdata('level') == "Direktur"){ ?>
      <div class="inner-wrapper">
        <!-- start: sidebar -->
        <aside id="sidebar-left" class="sidebar-left">
          <div class="sidebar-header">
            <div class="sidebar-title">Navigation</div>
            <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
              <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
            </div>
          </div>
          <div class="nano">
            <div class="nano-content">
              <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                  <li class="nav-active">
                    <a href="<?php echo site_url('administrator/dashboard')?>">
                      <i class="fa fa-home" aria-hidden="true"></i>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <!-- mau di hide supaya hanya direktur yang dapat melihat data user -->
                  <li>
                    <a href="<?php echo site_url('user')?>">
                      <i class="fa fa-users" aria-hidden="true"></i>
                      <span>Data User</span>
                    </a>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-h-square" aria-hidden="true"></i>
                      <span>Home</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="<?php echo site_url('slider')?>"> Slider </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('home_konten1')?>"> Content 1 </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-list-alt" aria-hidden="true"></i>
                      <span>About</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="<?php echo site_url('about_header')?>"> Header About </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('about_konten1')?>"> Content 1 </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('about_konten2')?>"> Content 2 </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('about_konten3')?>"> Content 3 </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-building-o" aria-hidden="true"></i>
                      <span>Profile</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="<?php echo site_url('profile_header')?>"> Header Profile </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('profile_visimisi')?>"> Visi Misi </a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-picture-o" aria-hidden="true"></i>
                      <span>Gallery</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="<?php echo site_url('gallery_header')?>"> Header Gallery </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('gallery_admin')?>"> Dokumentasi </a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="<?php echo site_url('contact_info')?>">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                      <span>Info Kontak</span>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo site_url('message')?>">
                      <i class="fa fa-comments-o" aria-hidden="true"></i>
                      <span>Info Pesan</span>
                    </a>
                  </li>
                  <li class="nav-parent">
                    <a>
                      <i class="fa fa-list" aria-hidden="true"></i>
                      <span>News</span>
                    </a>
                    <ul class="nav nav-children">
                      <li>
                        <a href="<?php echo site_url('news_header')?>"> Header Berita </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('news_admin')?>"> Berita Terbaru </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('news_admin_tips')?>"> Berita Life Hacks </a>
                      </li>
                      <li>
                        <a href="<?php echo site_url('news_admin_service')?>"> Berita Best Service </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </aside>
      <?php } ?>
        <!-- end: sidebar -->

        <section role="main" class="content-body">
					<?php $this->load->view($content); ?>
				</section>

      <aside id="sidebar-right" class="sidebar-right">
        <div class="nano">
          <div class="nano-content">
            <a href="#" class="mobile-close visible-xs"> Collapse <i class="fa fa-chevron-right"></i> </a>

            <div class="sidebar-right-wrapper">
              <div class="sidebar-widget widget-calendar">
                <h6>Upcoming Time</h6>
                <div data-plugin-datepicker data-plugin-skin="dark"></div>

                <ul>
                  <li>
                    <time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
                    <span>Company Meeting</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </aside>
    </section>

    <!-- Vendor -->
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-placeholder/jquery.placeholder.js"></script>
    

    <!-- Specific Page Vendor -->
		<script src="<?php echo base_url(); ?>assets/admin/vendor/pnotify/pnotify.custom.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap-modal.js" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.min.js" />
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-appear/jquery.appear.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/flot/jquery.flot.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/flot/jquery.flot.categories.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/raphael/raphael.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/morris/morris.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/gauge/gauge.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/snap-svg/snap.svg.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/liquid-meter/liquid.meter.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jqvmap/jquery.vmap.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="<?php echo base_url(); ?>assets/admin/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
    		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>


    <!-- Theme Base, Components and Settings -->
    <script src="<?php echo base_url(); ?>assets/admin/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?php echo base_url(); ?>assets/admin/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?php echo base_url(); ?>assets/admin/javascripts/theme.init.js"></script>

		<!-- Examples -->
		<script src="<?php echo base_url(); ?>assets/admin/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo base_url(); ?>assets/admin/javascripts/ui-elements/examples.modals.js"></script>

  </body>
</html>