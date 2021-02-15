@extends('layouts.trs')

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