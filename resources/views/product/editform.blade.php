@extends('layouts.master')

@section('main')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-9" style="position: relative; left:8px;" >
                    <h2>Edit <b>product</b></h2>
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
                <form action="{{ url('product/update') }}" method="post" enctype="multipart/form-data">
					@csrf
					<div class="modal-header">						
						<h4 class="modal-title">Edit product</h4>
					</div>
					<div class="modal-body">		
                        <input type="hidden" name="id" value="{{ $product->id }}">			
						<div class="form-group">
							<label>Name</label>
							<input type="text" class="form-control" name="name" value="{{ $product->name }}" required>
						</div>	
						<div class="form-group">
							<label>category</label>
							<select name="category_id" id="category">
								@foreach ($categories as $category)
									<option value="{{ $category['id'] }}" {{ $category['id']==$product->category_id? 'selected' : '' }}>{{ $category['name'] }}</option>
								@endforeach
							
							</select>
						</div>
						<div class="form-group">
							<label>Quantity</label>
							<input type="text" name="quantity" value="{{ $product->quantity }}" class="form-control" >
							@error('quantity')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label>price</label>
							<input type="text" name="price" value="{{ $product->price }}" class="form-control" >
							@error('price')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>
						<div class="form-group">
							<label>description</label>
							<input type="text" name="description" value="{{ $product->description }}" class="form-control" >
							@error('description')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>	
						<div class="form-group">
							<label>code_bare</label>
							<input type="text" name="code_bare" value="{{ $product->code_bare }}" class="form-control" >
							@error('code_bare')
								<span class="text-danger">{{ $message }}</span>
							@enderror
						</div>																	
						<div class="form-group">
							<label>Image</label>
							<input type="file" name="image" class="form-control">
                            <img class="img-profile rounded-circle" width="80"
                            src="{{asset('storage/product').'/'.$product->image}}">
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
