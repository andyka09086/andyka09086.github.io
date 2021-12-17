<header class="page-header">
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="<?php echo site_url('administrator/dashboard')?>">
					<i class="fa fa-home"></i></a>
				</li>
				<li><span>News</span></li>
				<li><span>Header</span></li>
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
				<a class="btn btn-primary" data-toggle="modal" data-target="#addNewsHeader">Add <i class="fa fa-plus"></i></a>
				<?php include("VIEW_AddNewsHeader.php")?>
        <?php } ?>
				</div>
			</div>
		</div>
		<table class="table table-bordered table-striped mb-none" id="datatable-default">
			<thead>
        <tr>
          <th>Kategori</th>
          <th>Nama</th>
          <th>Deskripsi</th>
          <th>Image</th>
          <th>Status</th>
          <th><?php if($this->session->userdata('level') == "Admin"){ ?>Action <?php }?>
					<?php if($this->session->userdata('level') == "Direktur") { ?>Validasi <?php } ?></th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($info_detail as $row) { ?>
        <tr class="gradeX">
          <td><?php echo $row->kategori_news_h;?></td>
          <td><?php echo $row->nama_news_h;?></td>
          <td><?php echo $row->deskripsi_news_h;?></td>
      <td><img class="img-rounded" src="<?php echo base_url('assets/admin/'. $row->image_news_h) ?>" width="200" height="100"></td>
          <td><?php echo $row->status;?></td>
          <td>
            <?php if($this->session->userdata('level') == "Admin"){ ?>
							<!-- hide button klo telah disetujui -->
              <?php if($row->status=="telah disetujui") { echo
						'<a class="btn btn-warning btn-sm btn-outline btn-rounded disabled" data-toggle="modal" data-target="#edit'?><?php echo $row->id_news_h; ?>"><i class="fa fa-edit"></i></a>
            <?php include("VIEW_EditNewsHeader.php")?><?php echo
						'<a class="btn btn-danger btn-sm btn-outline btn-rounded disabled" data-toggle="modal" data-target="#delete'?><?php echo $row->id_news_h; ?>"><i class="fa fa-trash-o"></i></a>
            <?php include("VIEW_DeleteNewsHeader.php")?><?php } ?>

              <?php if($row->status=="ditolak") { echo
						'<a class="btn btn-warning btn-sm btn-outline btn-rounded" data-toggle="modal" data-target="#edit'?><?php echo $row->id_news_h; ?>"><i class="fa fa-edit"></i></a>
            <?php include("VIEW_EditNewsHeader.php")?><?php echo
						'<a class="btn btn-danger btn-sm btn-outline btn-rounded" data-toggle="modal" data-target="#delete'?><?php echo $row->id_news_h; ?>"><i class="fa fa-trash-o"></i></a>
            <?php include("VIEW_DeleteNewsHeader.php")?><?php } ?>

              <?php if($row->status=="menunggu persetujuan"){ echo
						'<a class="btn btn-warning btn-sm btn-outline btn-rounded" data-toggle="modal" data-target="#edit'?><?php echo $row->id_news_h; ?>"><i class="fa fa-edit"></i></a>
            <?php include("VIEW_EditNewsHeader.php")?><?php echo
						'<a class="btn btn-danger btn-sm btn-outline btn-rounded" data-toggle="modal" data-target="#delete'?><?php echo $row->id_news_h; ?>"><i class="fa fa-trash-o"></i></a>
            <?php include("VIEW_DeleteNewsHeader.php")?><?php } ?>
						<?php } ?>


						<?php if($this->session->userdata('level') == "Direktur"){ ?>
							<!-- hide button klo telah disetujui -->
              <?php if($row->status=="telah disetujui") { echo
						'<a class="btn disabled" data-toggle="modal" data-target="#valid'?><?php echo $row->id_news_h; ?>"><i class="fa fa-check-circle fa-2x"></i></a>
            <?php include("VIEW_ValidNewsHeader.php")?><?php echo
						'<a class="btn disabled" data-toggle="modal" data-target="#tolak'?><?php echo $row->id_news_h; ?>"><i class="fa fa-times-circle fa-2x text-warning"></i></a>
            <?php include("VIEW_TolakNewsHeader.php")?><?php } ?>

              <?php if($row->status=="ditolak") { echo
						'<a class="btn disabled" data-toggle="modal" data-target="#valid'?><?php echo $row->id_news_h; ?>"><i class="fa fa-check-circle fa-2x"></i></a>
            <?php include("VIEW_ValidNewsHeader.php")?><?php echo
						'<a class="btn disabled" data-toggle="modal" data-target="#tolak'?><?php echo $row->id_news_h; ?>"><i class="fa fa-times-circle fa-2x text-warning"></i></a>
            <?php include("VIEW_TolakNewsAdminHeader.php")?><?php } ?>

              <?php if($row->status=="menunggu persetujuan"){ echo
						'<a class="btn" data-toggle="modal" data-target="#valid'?><?php echo $row->id_news_h; ?>"><i class="fa fa-check-circle fa-2x"></i></a>
            <?php include("VIEW_ValidNewsHeader.php")?><?php echo
						'<a class="btn" data-toggle="modal" data-target="#tolak'?><?php echo $row->id_news_h; ?>"><i class="fa fa-times-circle fa-2x text-warning"></i></a>
            <?php include("VIEW_TolakNewsAdminHeader.php")?><?php } ?>
						<?php } ?>
          </td>
        </tr>
      <?php } ?>
      </tbody>
		</table>
	</div>
<!-- end: page -->