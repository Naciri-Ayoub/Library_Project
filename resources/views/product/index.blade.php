@extends('layouts.master')

@section('main')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-9" style="position: relative; left:8px;" >
                    <h2>Manage <b>Products</b></h2>
                </div>
                <div class="col-sm-3" style="position: relative; right:-60px;"> 
                    <a href="{{ url('/product/create') }}" class="btn btn-dark"><i class="material-icons">&#xE147;</i> <span class="mb-3">Add New Product</span></a>
                    {{-- <a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span class="mb-3">Add New Product</span></a>			 --}}
                </div>
            </div>
        </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>QUANTITY</th>
                            <th>IMAGES</th>
                         
                            <th>CATEGORY</th>
                            <th>PRICE</th>
                            <th>CODE_BARE</th>
                            <th>DESCRIPTION</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
              
                    <tbody>
                        @foreach ($Products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->quantity }}</td>
                            <td>
                                <img class="img-profile " width="80"
                                src="{{asset('storage/product').'/'.$product->image}}">
                            </td>
                            <td>
                               {{ $product->category->name }} <br>
                                
                            </td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->code_bare }}</td>
                            <td>{{ $product->description }}</td>
                            <td style="padding-left: 12px;">
                                <a href="/product/edit/{{ $product['id'] }}"><i class="fa-solid fa-pen-to-square" style="color: blue;"></i></a>
                                {{-- <a href="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                </a> --}}
                                <a href="{{ url('/product/destroy'.'/'. $product->id) }}" class="delete">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                       
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
    </script>
@endsection
