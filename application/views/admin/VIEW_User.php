<header class="page-header">
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li>
					<a href="<?php echo site_url('administrator/dashboard')?>">
					<i class="fa fa-home"></i></a>
				</li>
				<li><span>Data User</span></li>
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
				<a class="btn btn-primary" data-toggle="modal" data-target="#addUser">Add <i class="fa fa-plus"></i></a>
				<?php include("VIEW_AddUser.php")?>
				</div>
			</div>
		</div>
		<table class="table table-bordered table-striped mb-none" id="datatable-default">
			<thead>
				<tr>
					<th>Username</th>
					<th>Password</th>
					<th>Full Name</th>
					<th>Email</th>
					<th>Level</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
			<?php foreach ($info_detail as $row) { ?>
				<tr class="gradeX">
					<td><?php echo $row->username;?></td>
					<td><?php echo $row->password;?></td>
					<td><?php echo $row->full_name;?></td>
					<td><?php echo $row->email;?></td>
					<td><?php echo $row->level;?></td>
					<td>
						<a class="btn btn-warning btn-sm btn-outline btn-rounded" data-toggle="modal" data-target="#edit<?php echo $row->user_id;?>"><i class="fa fa-edit"></i> Edit</a>
						<?php include("VIEW_EditUser.php")?>
						<a class="btn btn-danger btn-sm btn-outline btn-rounded" data-toggle="modal" data-target="#delete<?php echo $row->user_id; ?>"><i class="fa fa-trash-o"></i> Delete</a>
						<?php include("VIEW_DeleteUser.php")?>
					</td>

				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
									
<!-- end: page -->