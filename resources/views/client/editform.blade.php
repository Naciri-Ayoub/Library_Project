@extends('layouts.master')

@section('main')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-9" style="position: relative; left:8px;" >
                    <h2>Edit <b>client</b></h2>
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
                <form action="{{ url('client/update') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Edit Client</h4>
					</div>
					<div class="modal-body">		
                        <input type="hidden" name="id" value="{{ $client->id }}">			
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name" value="{{ $client->name }}" required>
						</div>			
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" value="{{ $client->email }}" class="form-control" >
							@error('email')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label>gender</label>
							<input type="text" name="gender" value="{{ $client->gender }}" class="form-control" >
							@error('gender')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label>Phone</label>
							<input type="text" name="phone" value="{{ $client->phone }}" class="form-control" >
							@error('phone')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label>Birthday</label>
							<input type="date" name="birthday" value="{{ $client->birthday }}" class="form-control" >
							@error('birthday')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>																
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="image" class="form-control">
                            <img class="img-profile rounded-circle" width="80"
                            src="{{asset('storage/client').'/'.$client->image}}">
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
