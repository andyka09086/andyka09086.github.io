<div class="modal fade" id="edit<?php echo $row->id_news_tips; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Life Hacks</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo site_url('news_admin_tips/EditData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Judul</label>
						<div class="col-sm-9">
              <input name="id_news_tips" value="<?php echo $row->id_news_tips;?>" type="hidden" id="inputID" placeholder="ID">
							<input type="text" name="judul_news_tips" value="<?php echo $row->judul_news_tips;?>" class="form-control" placeholder="Judul"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea name="deskripsi_news_tips" rows="5" class="form-control" placeholder="Deskripsi"><?php echo $row->deskripsi_news_tips;?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Image</label>
            <img src="<?php echo base_url('assets/admin/'.$row->image_news_tips)?>" width="100" >
						<div class="col-sm-9">
							<input type="file" name="image_news_tips" class="font" required>
						</div>
					</div>
      <input type="hidden" name="user_id" value="<?php echo $row->user_id;?>">
      <input type="hidden" name="date_news_tips" value="<?php echo $row->date_news_tips;?>">
			<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
			<div class="modal-footer">
        <button name="editNewsAdminTips" type="submit" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp;Update</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>