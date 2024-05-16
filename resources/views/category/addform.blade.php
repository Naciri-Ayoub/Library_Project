@extends('layouts.master')

@section('main')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-9" style="position: relative; left:8px;" >
                    <h2>Add <b>category</b></h2>
                </div>
            </div>
        </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            {{-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
				<form action="{{ url('category/store') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Add Category</h4>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control" >
							@error('name')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div><div class="form-group">
							<label>Image</label>
							<input type="file" name="image" class="form-control" >
							@error('image')
								<span class="text-danger">{{ $message }}</span>
							@enderror
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
    
    <script>
    </script>
@endsection
