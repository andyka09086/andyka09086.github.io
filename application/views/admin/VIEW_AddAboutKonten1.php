<div class="modal fade modal-block-primary" id="addAboutKonten1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Add About Content 1</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" action="<?php echo site_url('about_konten1/SimpanData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Judul</label>
						<div class="col-sm-9">
							<input type="text" name="judul_about_konten1" class="form-control" placeholder="Judul Konten" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Isi</label>
						<div class="col-sm-9">
							<textarea name="isi_about_konten1" rows="10" class="form-control" placeholder="Isi Konten"></textarea>
						</div>
					</div>
					<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
			<div class="modal-footer">
        <button name="addAboutKonten1" type="submit" class="btn btn-success"><i class="icon-pencil"></i>&nbsp;Save</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>