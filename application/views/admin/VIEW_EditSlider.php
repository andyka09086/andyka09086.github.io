<div class="modal fade" id="edit<?php echo $row->id_slider; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Slider</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="<?php echo site_url('slider/EditData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Kategori Slider</label>
						<div class="col-sm-9">
              <input name="id_slider" value="<?php echo $row->id_slider;?>" type="hidden" id="inputID" placeholder="ID">
							<input type="text" name="kategori_slider" value="<?php echo $row->kategori_slider;?>" class="form-control" placeholder="Kategori Slider" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Nama Kategori</label>
						<div class="col-sm-9">
							<input type="text" name="nama_kategori" value="<?php echo $row->nama_kategori;?>" class="form-control" placeholder="Nama Kategori (Company Name)" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea name="deskripsi_slider" rows="5" class="form-control" placeholder="Isi Pesan"><?php echo $row->deskripsi_slider;?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Image</label>
            <img src="<?php echo base_url('assets/admin/'.$row->image_slider)?>" width="100" >
						<div class="col-sm-9">
							<input type="file" name="image_slider" class="font" required>
						</div>
					</div>
					<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
			<div class="modal-footer">
        <button name="editSlider" type="submit" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp;Update</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>