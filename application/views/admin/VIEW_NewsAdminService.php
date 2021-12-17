<header class="page-header">
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="<?php echo site_url('administrator/dashboard')?>">
					<i class="fa fa-home"></i></a>
				</li>
				<li><span>News</span></li>
				<li><span>Best Service Deals</span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
</header>
<!-- start: page -->
<div class="panel-body">
	<div class="row">
		<div class="col-sm-6">
			<div class="mb-md">
				<!-- Modal Bootstrap -->
        <?php if($this->session->userdata('level') == "Admin"){ ?>
				<a class="btn btn-primary" data-toggle="modal" data-target="#addNewsAdminService">Add <i class="fa fa-plus"></i></a>
				<?php include("VIEW_AddNewsAdminService.php")?>
        <?php } ?>
				</div>
			</div>
		</div>
		<table class="table table-bordered table-striped mb-none" id="datatable-default">
			<thead>
        <tr>
          <th>Judul</th>
          <th>Deskripsi</th>
          <th>Diedit oleh</th>
          <th>Tanggal</th>
          <th>Image</th>
          <th>Status</th>
          <th><?php if($this->session->userdata('level') == "Admin"){ ?>Action <?php }?>
					<?php if($this->session->userdata('level') == "Direktur") { ?>Validasi <?php } ?></th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($info_detail as $row) { ?>
        <tr class="gradeX">
          <td><?php echo $row->judul_news_service;?></td>
          <td><p style="white-space:pre-wrap;"><?php echo $row->deskripsi_news_service;?></p></td>
          <td><?php echo $row->user_id;?></td>
          <td><?php echo $row->date_news_service;?></td>
      <td><img class="img-rounded" src="<?php echo base_url('assets/admin/'. $row->image_news_service) ?>" width="200" height="100"></td>
          <td><?php echo $row->status;?></td>
          <td>
            <?php if($this->session->userdata('level') == "Admin"){ ?>
							<!-- hide button klo telah disetujui -->
              <?php if($row->status=="telah disetujui") { echo
						'<a class="btn btn-warning btn-sm btn-outline btn-rounded disabled" data-toggle="modal" data-target="#edit'?><?php echo $row->id_news_service; ?>"><i class="fa fa-edit"></i></a>
            <?php include("VIEW_EditNewsAdminService.php")?><?php echo
						'<a class="btn btn-danger btn-sm btn-outline btn-rounded disabled" data-toggle="modal" data-target="#delete'?><?php echo $row->id_news_service; ?>"><i class="fa fa-trash-o"></i></a>
            <?php include("VIEW_DeleteNewsAdminService.php")?><?php } ?>

              <?php if($row->status=="ditolak") { echo
						'<a class="btn btn-warning btn-sm btn-outline btn-rounded" data-toggle="modal" data-target="#edit'?><?php echo $row->id_news_service; ?>"><i class="fa fa-edit"></i></a>
            <?php include("VIEW_EditNewsAdminService.php")?><?php echo
						'<a class="btn btn-danger btn-sm btn-outline btn-rounded" data-toggle="modal" data-target="#delete'?><?php echo $row->id_news_service; ?>"><i class="fa fa-trash-o"></i></a>
            <?php include("VIEW_DeleteNewsAdminService.php")?><?php } ?>

              <?php if($row->status=="menunggu persetujuan"){ echo
						'<a class="btn btn-warning btn-sm btn-outline btn-rounded" data-toggle="modal" data-target="#edit'?><?php echo $row->id_news_service; ?>"><i class="fa fa-edit"></i></a>
            <?php include("VIEW_EditNewsAdminService.php")?><?php echo
						'<a class="btn btn-danger btn-sm btn-outline btn-rounded" data-toggle="modal" data-target="#delete'?><?php echo $row->id_news_service; ?>"><i class="fa fa-trash-o"></i></a>
            <?php include("VIEW_DeleteNewsAdminService.php")?><?php } ?>
						<?php } ?>


						<?php if($this->session->userdata('level') == "Direktur"){ ?>
							<!-- hide button klo telah disetujui -->
              <?php if($row->status=="telah disetujui") { echo
						'<a class="btn disabled" data-toggle="modal" data-target="#valid'?><?php echo $row->id_news_service; ?>"><i class="fa fa-check-circle fa-2x"></i></a>
            <?php include("VIEW_ValidNewsAdminService.php")?><?php echo
						'<a class="btn disabled" data-toggle="modal" data-target="#tolak'?><?php echo $row->id_news_service; ?>"><i class="fa fa-times-circle fa-2x text-warning"></i></a>
            <?php include("VIEW_TolakNewsAdminService.php")?><?php } ?>

              <?php if($row->status=="ditolak") { echo
						'<a class="btn disabled" data-toggle="modal" data-target="#valid'?><?php echo $row->id_news_service; ?>"><i class="fa fa-check-circle fa-2x"></i></a>
            <?php include("VIEW_ValidNewsAdminService.php")?><?php echo
						'<a class="btn disabled" data-toggle="modal" data-target="#tolak'?><?php echo $row->id_news_service; ?>"><i class="fa fa-times-circle fa-2x text-warning"></i></a>
            <?php include("VIEW_TolakNewsAdminService.php")?><?php } ?>

              <?php if($row->status=="menunggu persetujuan"){ echo
						'<a class="btn" data-toggle="modal" data-target="#valid'?><?php echo $row->id_news_service; ?>"><i class="fa fa-check-circle fa-2x"></i></a>
            <?php include("VIEW_ValidNewsAdminService.php")?><?php echo
						'<a class="btn" data-toggle="modal" data-target="#tolak'?><?php echo $row->id_news_service; ?>"><i class="fa fa-times-circle fa-2x text-warning"></i></a>
            <?php include("VIEW_TolakNewsAdminService.php")?><?php } ?>
						<?php } ?>
          </td>
        </tr>
      <?php } ?>
      </tbody>
		</table>
	</div>
<!-- end: page -->