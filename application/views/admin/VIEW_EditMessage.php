<div class="modal fade" id="edit<?php echo $row->name_id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Edit Message</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" action="<?php echo site_url('message/EditData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Nama</label>
						<div class="col-sm-9">
              <input name="name_id" value="<?php echo $row->name_id;?>" type="hidden" id="inputID" placeholder="ID">
							<input type="text" name="nama" value="<?php echo $row->nama;?>" class="form-control" placeholder="Nama" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</span>
								<input type="email" name="email" value="<?php echo $row->email;?>" class="form-control" placeholder="Email" required/>
							</div>
						</div>
						<div class="col-sm-9">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Subject</label>
						<div class="col-sm-9">
							<input type="text" name="subject" value="<?php echo $row->subject;?>" class="form-control" placeholder="Subject" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Message</label>
						<div class="col-sm-9">
							<textarea name="message" rows="5" class="form-control" placeholder="Isi Pesan"><?php echo $row->message;?></textarea>
						</div>
					</div>
					<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
      <input type="hidden" name="tanggal" value="<?php echo $row->tanggal;?>">
			<div class="modal-footer">
        <button name="editMessage" type="submit" class="btn btn-warning"><i class="icon-pencil"></i>&nbsp;Update</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>