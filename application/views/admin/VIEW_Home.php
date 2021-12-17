<header class="page-header">
	<h2>Dashboard</h2>
	<div class="right-wrapper pull-right">
		<ol class="breadcrumbs">
			<li>
				<a href="<?php echo site_url('administrator/dashboard')?>">
				<i class="fa fa-home"></i>
				</a>
			</li>
			<li><span>Dashboard</span></li>
		</ol>
		<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
	</div>
</header>

<!-- start: page -->
<section class="panel">
	<div class="panel-body">
		<div class="dashboard">
			<header class="clearfix">
				<div class="row">
					<div class="col-sm-12">
            <h2 class="text-center">SELAMAT DATANG DI HALAMAN <?php echo strtoupper($this->session->userdata("level"))?></h2>
					</div>
				</div>
			</header>
    </div>
	</div>
</section>
<!-- end: page -->