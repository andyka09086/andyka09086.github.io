<div class="modal fade" id="edit<?php echo $row->id_home_konten1; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Home Content 1</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo site_url('home_konten1/EditData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Judul</label>
						<div class="col-sm-9">
              <input name="id_home_konten1" value="<?php echo $row->id_home_konten1;?>" type="hidden" id="inputID" placeholder="ID">
							<input type="text" name="judul_home_konten1" value="<?php echo $row->judul_home_konten1;?>" class="form-control" placeholder="Judul Konten" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Isi</label>
						<div class="col-sm-9">
							<textarea name="isi_home_konten1" rows="5" class="form-control" placeholder="Isi Konten"><?php echo $row->isi_home_konten1;?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Image</label>
            <img src="<?php echo base_url('assets/admin/'.$row->image_home_konten1)?>" width="100" >
						<div class="col-sm-9">
							<input type="file" name="image_home_konten1" class="font" required>
						</div>
					</div>
					<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
			<div class="modal-footer">
        <button name="editHomeKonten1" type="submit" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp;Update</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>