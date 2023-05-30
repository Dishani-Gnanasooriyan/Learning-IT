<div class="modal fade" id="update_modal<?php echo $row['id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query.php">
				<div class="modal-header">
					<h3 class="modal-title">Update User</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Firstname</label>
							<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
							<input type="text" name="category" value="<?php  echo $row['category']?>" class="form-control text-dark" required="required"/>
                          
						</div>
						<div class="custom-file">
    <input type="file"  name="sources" class="custom-file-input" id="inputGroupFile02" required="required" accept=".ai" value="<?php  echo $row['sources']?>" >
    <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
  </div>
							
                            
						
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
                <div class="input-group-append">
					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>
                    </div>
					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
				</div>
				</div>
			</form>
		</div>
	</div>
</div>