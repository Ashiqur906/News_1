@extends('admin.layout.admaster')
@section('content')

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div> 
  @endif

  <div class="content-wrapper">
    @if (Session::has('myexcep'))
        @dump(Session::get('myexcep'));
    @endif
    {{-- !-- Content Header (Page header) --> --}}
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a style="color: white;" href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->    
    <!-- /.card-header -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <!-- left column -->
          <div class="col-md-9 mt-5">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {{ Form::open(['method' => 'POST', 'route' => 'category.store', 'enctype' => 'multipart/form-data']) }}
               {{ Form::model($fdata, ['route' => ['admin.pages.category.create']]) }}
                {{ Form::hidden('id', !empty($fdata->id) ? $fdata->id : null) }}
                <div class="card-body">
                  <div class="form-group">
                    {{ Form::label('name', 'Category') }}
                    {{ Form::text('name', !empty($fdata->slug) ? $fdata->slug : null, ['id' => 'name', 'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Category']) }}
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                  </div> 
                  <div class="form-check ml-2 mb-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">is active</label>
                  </div>
                </div>
                <!-- /.card-body -->            
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
              <!-- /.card -->
          </div>
            {{-- <div class="col-md-3">
              @include('admin.pages.seo.seo', ['sdata' => ($fdata && $fdata->seo)?$fdata->seo:null])
            </div> --}}
            {{-- {{ Form::close() }} --}}
          <!--/.col (left) -->
        </div>
      </div>
    </section>
    <!-- form start -->
  </div>
@endsection




