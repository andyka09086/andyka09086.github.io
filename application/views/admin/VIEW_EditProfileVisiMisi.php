<div class="modal fade" id="edit<?php echo $row->id_visimisi; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Visi Misi</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" action="<?php echo site_url('profile_visimisi/EditData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Visi</label>
						<div class="col-sm-9">
              <input name="id_visimisi" value="<?php echo $row->id_visimisi;?>" type="hidden" id="inputID" placeholder="ID">
							<textarea  name="visi" type="text" rows="10" cols="30" placeholder="Visi"><?php echo $row->visi;?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Misi</label>
						<div class="col-sm-9">
							<textarea  name="misi" type="text" rows="10" cols="30" placeholder="Misi"><?php echo $row->misi;?></textarea>
						</div>
					</div>
					<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
			<div class="modal-footer">
        <button name="editVisiMisi" type="submit" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp;Update</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>