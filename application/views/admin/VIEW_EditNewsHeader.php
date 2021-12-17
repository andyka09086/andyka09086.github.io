<div class="modal fade" id="edit<?php echo $row->id_news_h; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit News Header</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo site_url('news_header/EditData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Kategori</label>
						<div class="col-sm-9">
              <input name="id_news_h" value="<?php echo $row->id_news_h;?>" type="hidden" id="inputID" placeholder="ID">
							<input type="text" name="kategori_news_h" value="<?php echo $row->kategori_news_h;?>" class="form-control" placeholder="Kategori News Header"/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Nama</label>
						<div class="col-sm-9">
							<input type="text" name="nama_news_h" value="<?php echo $row->nama_news_h;?>" class="form-control" placeholder="Nama" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea name="deskripsi_news_h" rows="5" class="form-control" placeholder="Deskripsi News Header"><?php echo $row->deskripsi_news_h;?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Image</label>
            <img src="<?php echo base_url('assets/admin/'.$row->image_news_h)?>" width="100" >
						<div class="col-sm-9">
							<input type="file" name="image_news_h" class="font" required>
						</div>
					</div>
					<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
			<div class="modal-footer">
        <button name="editNewsHeader" type="submit" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp;Update</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>