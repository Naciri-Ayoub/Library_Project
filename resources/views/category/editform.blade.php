@extends('layouts.master')

@section('main')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-9" style="position: relative; left:8px;" >
                    <h2>Edit <b>category</b></h2>
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
                <form action="{{ url('category/update') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Edit category</h4>
					</div>
					<div class="modal-body">		
                        <input type="hidden" name="id" value="{{ $category->id }}">			
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name" value="{{ $category->name }}" required>
						</div>			
																			
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="image" class="form-control">
                            <img class="img-profile rounded-circle" width="80"
                            src="{{asset('storage/category').'/'.$category->image}}">
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" value="Update">
					</div>
				</form>
            </div>
        </div>
    </div>
    
    <script>
    </script>
@endsection
