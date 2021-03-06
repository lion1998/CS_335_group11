@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Hotel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('admin-hotel')}}">Hotels</a></li>
              <li class="breadcrumb-item active">Create Hotels</li>
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
            
            <!-- Horizontal Form -->
            <div class="card card-info">
              <!-- form start -->
              <form class="form-horizontal" method="POST" action="{{ route('admin-hotel.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                  @include('flash-message')

                  <div class="form-group row">
                    <label for="name" class="col-sm-4 col-form-label text-md-right">Name</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required>

                      @error('name')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="mobile_number'" class="col-sm-4 col-form-label text-md-right">Mobile No</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('mobile_number') is-invalid @enderror" name="mobile_number" id="mobile_number" placeholder="Mobile Number" required>

                      @error('mobile_number')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="email" class="col-sm-4 col-form-label text-md-right">Email</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email" required>

                      @error('email')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="address" class="col-sm-4 col-form-label text-md-right">Address</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Address" required>

                      @error('address')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="type" class="col-sm-4 col-form-label text-md-right">Type</label>
                    <div class="col-sm-6">
                      <select style="width: 100%;" class="form-control @error('type') is-invalid @enderror" name="type" id="type" required>
                        <option selected>Select Hotel Type</option>
                        <option value="1 Star">1 Star</option>
                        <option value="2 Star">2 Star</option>
                        <option value="3 Star">3 Star</option>
                        <option value="4 Star">4 Star</option>
                        <option value="5 Star">5 Star</option>
                    </select>

                      @error('type')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="charges" class="col-sm-4 col-form-label text-md-right">Charges</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control @error('type') is-invalid @enderror" name="charges" id="charges" placeholder="charges" required>

                      @error('charges')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="picture" class="col-sm-4 col-form-label text-md-right">picture</label>
                    <div class="col-sm-6">
                      <input type="file" class="form-control @error('type') is-invalid @enderror" name="picture" id="picture" placeholder="picture" required>

                      @error('picture')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right">Create</button>
                </div>
                <!-- /.card-footer -->
              </form>
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