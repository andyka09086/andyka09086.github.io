<div class="modal fade modal-block-primary" id="addProfileHeader" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Image For Profile Header</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo site_url('profile_header/SimpanData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Kategori</label>
						<div class="col-sm-9">
							<input type="text" name="kategori_profile_h" class="form-control" placeholder="Kategori Profile Header" required/>
						</div>
					</div><div class="form-group">
						<label class="col-sm-3 control-label">Nama</label>
						<div class="col-sm-9">
							<input type="text" name="nama_profile_h" class="form-control" placeholder="Nama Profile"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea name="deskripsi_profile_h" class="form-control" placeholder="Deskripsi Profile Header" rows="5"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Image:</label>
						<div class="col-sm-9">
              <input type="file" name="image_profile_h" class="font" required>
						</div>
					</div>
					<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
			<div class="modal-footer">
        <button name="addProfile" type="submit" class="btn btn-success"><i class="icon-pencil"></i>&nbsp;Save</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>