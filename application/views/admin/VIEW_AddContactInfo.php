<div class="modal fade modal-block-primary" id="addContactInfo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Contact Info</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" action="<?php echo site_url('contact_info/SimpanData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Alamat</label>
						<div class="col-sm-9">
							<textarea type="text" name="alamat" class="form-control" placeholder="Alamat" required></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</span>
								<input type="email" name="email" class="form-control" placeholder="Email"/>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Telp</label>
						<div class="col-sm-9">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-phone"></i>
								</span>
								<input type="text" name="telp" class="form-control" placeholder="No. Telp"/>
							</div>
						</div>
					</div>
          <div class="form-group">
						<label class="col-sm-3 control-label">Website</label>
						<div class="col-sm-9">
							<input type="text" name="website" class="form-control" placeholder="Website"/>
						</div>
					</div>
					<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
			<div class="modal-footer">
        <button name="addContactInfo" type="submit" class="btn btn-success"><i class="icon-pencil"></i>&nbsp;Save</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>