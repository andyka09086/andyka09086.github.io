<?php
  foreach ($info_detail as $row) :
?>
<div class="modal fade" id="edit<?php echo $row->user_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit User</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" action="<?php echo site_url('user/EditData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Full Name</label>
						<div class="col-sm-9">
              <input name="user_id" value="<?php echo $row->user_id;?>" type="hidden" id="inputID" placeholder="ID">
							<input type="text" name="full_name" value="<?php echo $row->full_name;?>" class="form-control" placeholder="Full Name" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</span>
								<input type="email" name="email" value="<?php echo $row->email;?>" class="form-control" placeholder="Email" required/>
							</div>
						</div>
						<div class="col-sm-9">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Username</label>
						<div class="col-sm-9">
							<input type="text" name="username" value="<?php echo $row->username;?>" class="form-control" placeholder="Username" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Password</label>
						<div class="col-sm-9">
							<input type="password" name="password" value="<?php echo $row->password;?>" class="form-control" placeholder="Password" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Level</label>
						<div class="col-sm-9">
							<select name="level" class="form-control">
								<option value="blank">...</option>
								<option value="Admin">Admin</option>
								<option value="Direktur">Direktur</option>
							</select>
							<!-- <input type="password" name="password" value="<?php echo $row->password;?>" class="form-control" placeholder="Password" /> -->
						</div>
					</div>
			</div>
			<div class="modal-footer">
        <button name="editUser" type="submit" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp;Update</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>
<?php endforeach; ?>