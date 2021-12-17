<div class="modal fade modal-block-primary" id="addMessage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Message From Contact Us</h4>
			</div>
			<div class="modal-body">
        <form class="form-horizontal" method="POST" action="<?php echo site_url('message/SimpanData'); ?>">
          <div class="form-group">
						<label class="col-sm-3 control-label">Nama</label>
						<div class="col-sm-9">
							<input type="text" name="nama" class="form-control" placeholder="Nama" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="fa fa-envelope"></i>
								</span>
								<input type="email" name="email" class="form-control" placeholder="Email"/>
							</div>
						</div>
						<div class="col-sm-9">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Subject</label>
						<div class="col-sm-9">
							<input type="text" name="subject" class="form-control" placeholder="Subject" />
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-3 control-label">Message</label>
						<div class="col-sm-9">
							<textarea name="message" rows="5" class="form-control" placeholder="Isi Pesan"></textarea>
						</div>
					</div>
          <input type="hidden" name="tanggal">
					<input type="hidden" name="status" value="menunggu persetujuan">
			</div>
			<div class="modal-footer">
        <button name="addMessage" type="submit" class="btn btn-success"><i class="icon-pencil"></i>&nbsp;Save</button>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i>&nbsp;Close</button>
      </form>
			</div>
		</div>
	</div>
</div>