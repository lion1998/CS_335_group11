@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Packages</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Packages</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Packages</h3>
                <a href="{{url('admin-package/create')}}"><button type="button" class="btn btn-sm btn-outline-primary float-right">New Package</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                @include('flash-message')
                
                <table id="users" class="table table-hover display nowrap" style="width:100%">
                  <thead>
                  <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Amount</th>
                    <th>Place</th>
                    <th>Hotel</th>
                    <th>Transport</th>
                    <th>Actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($packages as $package)
                      <tr>
                        <td>{{$package->title}}</td>
                        <td>{{$package->description}}</td>
                        <td>{{$package->type}}</td>
                        <td>{{$package->amount}}</td>
                        <td>{{$package->place_id}}</td>
                        <td>{{$package->hotel_id}}</td>
                        <td>{{$package->transport_id}}</td>
                        <td> 
                          <a href="{{url('admin-package/show/'.encrypt($package->id)) }}" class="btn btn-sm btn-info" title="Show Package">
                            <i class="fas fa-eye"></i>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection