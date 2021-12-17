<div class="modal fade" id="valid<?php echo $row->id_news_service; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">VALIDASI DATA</h4>
			</div>
			<div class="modal-body">
        <div class="alert alert-gray">Are you Sure you Want to <strong>Approve?</strong></div>
			</div>
			<div class="modal-footer">
        <a href="<?php echo site_url('news_admin_service/ValidasiData/'.$row->id_news_service); ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i>&nbsp;Yes</a>
        <button class="btn" data-dismiss="modal" aria-hidden="true"><i class="fa fa-remove"></i>&nbsp;Close</button>
      </div>
		</div>
	</div>
</div>