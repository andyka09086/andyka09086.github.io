<div class="modal fade" id="edit<?php echo $row->id_about_konten3; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit About Content 3</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" action="<?php echo site_url('about_konten3/EditData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Judul</label>
						<div class="col-sm-9">
              <input name="id_about_konten3" value="<?php echo $row->id_about_konten3;?>" type="hidden" id="inputID" placeholder="ID">
							<input type="text" name="judul_about_konten3" value="<?php echo $row->judul_about_konten3;?>" class="form-control" placeholder="Judul Konten" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Isi</label>
						<div class="col-sm-9">
							<textarea name="isi_about_konten3" rows="10" class="form-control" placeholder="Isi Konten"><?php echo $row->isi_about_konten3;?></textarea>
						</div>
					</div>
					<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
			<div class="modal-footer">
        <button name="editAboutKonten3" type="submit" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp;Update</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>