@extends('layouts.master')

@section('main')
@if (Session::has('error'))
<div style="position: absolute; bottom:12px; right:12px; z-index:12" class="alert alert-danger alert-dismissible fade show" role="alert">
<p>{{ Session::get('error') }}</p>
    
</div>
@endif

<script>
var alertList = document.querySelectorAll(".alert");
alertList.forEach(function (alert) {
    new bootstrap.Alert(alert);
});
</script>

<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-9" style="position: relative; left:8px;" >
                    <h2>Manage <b>client</b></h2>
                </div>
                <div class="col-sm-3" style="position: relative; right:-60px;">
                    <a href="{{ url('/client/create') }}" class="btn btn-dark"><i class="material-icons">&#xE147;</i> <span class="mb-3">Add New client</span></a>
                    {{-- <a href="#addModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span class="mb-3">Add New client</span></a>			 --}}
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
                            <th>IMAGE</th>
                            <th>PHONE</th>
                            <th>EMAIL</th>
                            <th>BIRTHDAY</th>
                            <th>GENDER</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
              
                    <tbody>
                        @foreach ($clients as $client)
                        
                        <tr>

                            <td>{{ $client['id'] }}</td>
                            <td>{{ $client['name'] }}</td>
                            <td>
                                <img class="img-profile" style="border-radius: 5px;" width="80"
                                src="{{asset('storage/client').'/'.$client->image}}">
                            </td>
                            <td>{{ $client['phone'] }}</td>
                            <td>{{ $client['email'] }}</td>
                            <td>{{ $client['birthday'] }}</td>
                            <td>{{ $client['gender'] }}</td>
                            <td style="padding-left: 12px;">
                                <a href="/client/edit/{{ $client['id'] }}"><i class="fa-solid fa-pen-to-square" style="color: blue;"></i></a>
                                {{-- <a href="#editModal" class="edit" data-toggle="modal" style=" margin-right:30px;">
                                    <i class="fa-solid fa-pen-to-square" style="color: blue;"></i>
                                </a> --}}
                                {{-- <a href="#deleteModal" class="delete" data-toggle="modal">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a> --}}
                                {{-- <form action="/client/destroy/{{ $client->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit">
                                        <i class="fa-solid fa-trash" style="color: red;"></i>
                                    </button>
                                </form> --}}
                                <a href="{{ url('/client/destroy'.'/'. $client->id) }}" class="delete">
                                <i class="fa-solid fa-trash" style="color: red;"></i>
                                </a>
                            </td>
                        </tr>
                        {{-- @include('client.delete') --}}
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @include('client.add')
    @include('client.edit')
    
    <script>
    </script>
@endsection
