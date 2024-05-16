	<!-- Edit Modal HTML -->
	<div id="editModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form>
					<div class="modal-header">						
						<h4 class="modal-title">Add Category</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" required>
						</div>			
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" >
							@error('email')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label>gender</label>
							<input type="text" name="gender" class="form-control" >
							@error('gender')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" name="phone" class="form-control" >
							@error('phone')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label>Birthday</label>
							<input type="date" name="birthday" class="form-control" >
							@error('birthday')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>																
						<div class="form-group">
							<label>Image</label>
							<input type="file" class="form-control" required>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>