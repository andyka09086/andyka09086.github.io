<div class="modal fade modal-block-primary" id="addNewsAdminService" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Best Service</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo site_url('news_admin_service/SimpanData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Judul</label>
						<div class="col-sm-9">
							<input type="text" name="judul_news_service" class="form-control" placeholder="Judul"/>
						</div>
					</div><div class="form-group">
						<label class="col-sm-3 control-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea type="text" rows="5" name="deskripsi_news_service" class="form-control" placeholder="Isi"></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Image:</label>
						<div class="col-sm-9">
              <input type="file" name="image_news_service" class="font" required>
						</div>
					</div>
          <input type="hidden" name="user_id">
          <input type="hidden" name="date_news_service">
					<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
			<div class="modal-footer">
        <button name="addNewsAdminService" type="submit" class="btn btn-success"><i class="icon-pencil"></i>&nbsp;Save</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>