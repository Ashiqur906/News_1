@extends('admin.layout.admaster')
@section('content')
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  @if(session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div> 
  @endif

  <div class="content-wrapper">
    {{-- !-- Content Header (Page header) --> --}}
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tag</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Tag</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              {{-- {{ Form::open(['method' => 'POST', 'route' => 'tag.add', 'enctype' => 'multipart/form-data']) }}
                {{ Form::hidden('id', !empty($fdata->id) ? $fdata->id : null) }}
                
                <div class="card-body">
                  <div class="form-group">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', !empty($fdata->name) ? $fdata->name : null, ['id' => 'name', 'class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Name']) }}
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    {{ Form::label('Slug', 'Slug') }}
                    {{ Form::text('slug', !empty($fdata->slug) ? $fdata->slug : null, ['id' => 'slug', 'class' => $errors->has('slug') ? 'form-control is-invalid' : 'form-control','placeholder' => 'Slug']) }}
                    @error('slug')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror   --}}
                  </div>
                
                  
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">is active</label>
                  </div>
                </div>
                <!-- /.card-body -->
              
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                {{-- {{ Form::close() }} --}}
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->

        </div>
      </div>
    </section>
    <!-- form start -->
          
    
  </div>

@endsection




