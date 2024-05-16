@extends('layouts.master')

@section('main')

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-9" style="position: relative; left:8px;" >
                    <h2>Manage <b>Orders</b></h2>
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
                            <th>CLIENTS</th>
                            <th>DELIVERY ADDRESS</th>
                            <th>PHONE</th>
                            <th>TOTAL</th>
                            <th>CREATED AT</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->client->name }}</td>
                            
                            <td>{{ $order->delivery_address }}</td>
                            <td>{{ $order->phone }}</td>
                            <td>{{ $order->total }}</td>
                            <td>{{ $order->created_at }}</td>
                            <td style="padding-left: 12px;">
                               
                                <a href="{{ url('/order/destroy'.'/'. $order->id) }}" class="delete">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a>
                                <a href="{{ url('/order/show'.'/'. $order->id) }}" class="delete">
                                    <i class="fa-solid fa-eye" style="color: green;"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('order.edit')
    @include('order.delete')
    <script>
    </script>
@endsection
