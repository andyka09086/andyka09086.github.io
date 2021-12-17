<div class="modal fade modal-block-primary" id="addvisimisi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Visi Misi</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" action="<?php echo site_url('profile_visimisi/SimpanData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Visi</label>
						<div class="col-sm-9">
							<textarea type="text" name="visi" class="form-control" rows="10" placeholder="Silahkan isi visi anda.."></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Misi</label>
						<div class="col-sm-9">
							<textarea type="text" name="misi" class="form-control" rows="10" placeholder="Silahkan isi misi anda.."></textarea>
						</div>
					</div>
					<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
			<div class="modal-footer">
        <button name="addvisimisi" type="submit" class="btn btn-success"><i class="icon-pencil"></i>&nbsp;Save</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>