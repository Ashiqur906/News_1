@extends('admin.layout.admaster')
@section('content')
<div class="content-wrapper">
      <div class="card-header">
        <h3 class="card-title">Users List</h3>
      </div>
          <!-- Main content -->
    {{-- @if(Session::has('myexcep'))
        @dump(Session::get('myexcep'));
    @endif --}}
      <!-- /.card-header -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        {{ Form::open(['method' => 'POST', 'route' => 'users.store', 'enctype' => 'multipart/form-data']) }}
        <div class="row">
          <!-- left column -->
          <div class="col-md-9">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
          
              {{ Form::hidden('id', !empty($fdata->id) ? $fdata->id : null) }}
                <div class="card-body">
                  <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', !empty($fdata->name) ? $fdata->name : null, ['id' => 'name', 'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Name']) }}
                    @error('name')
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
                    @enderror  
                  </div>
                  <div class="form-group">
                    {!! Form::label('image', 'Image') !!}
                    @isset($fdata->image)
                    <div style="min-height: 100px">
                      <img src="{{asset($fdata->image)}}" height="100px" width="auto" alt=""> 
                    </div>               
                    @endisset                                    
                    {!! Form::file('image', ['class' => 'form-control']) !!}
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  
                  <div class="form-group">
                    {{ Form::label('description', 'Description') }}
                    {{ Form::textarea('description', !empty($fdata->description) ? $fdata->description : null, ['rows' => 3, 'placeholder' => 'Description..', 'class' => 'htmltexteditor form-control ' . ($errors->has('description') ? ' is-invalid' : '')]) }}
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
       
                  </div>
                  
                  <div class="form-group">
                    {{ Form::label('dob', 'Date of Birth ') }}
                    {{ Form::date('dob', $fdata->dob ? date('Y-m-d', strtotime($fdata->dob)) : null, ['id' => 'dob', 'class' => $errors->has('dob') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Date of Birth']) }}
                    @error('dob')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
  
                  <div class="form-group">
                    {{ Form::label('years_active', 'Date of Years active ') }}
                    {{ Form::date('years_active', $fdata->years_active ? date('Y-m-d', strtotime($fdata->years_activegit )) : null, ['id' => 'years_active', 'class' => $errors->has('years_active') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Date of Years active']) }}
                    @error('years_active')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    {{ Form::label('dead', 'Date of Years active end ') }}
                    {{ Form::date('dead', $fdata->dead ? date('Y-m-d', strtotime($fdata->dead)) : null, ['id' => 'dead', 'class' => $errors->has('dead') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Date of Dead']) }}
                    @error('dead')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>                
                  <div class="form-group">
                    {{ Form::label('link', 'Facebook Link') }}
                    {{ Form::text('link', !empty($fdata->link) ? $fdata->link : null, ['id' => 'link', 'class' => $errors->has('link') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Facebook Link']) }}
                    @error('link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    {{ Form::label('link', 'Email Link') }}
                    {{ Form::text('link', !empty($fdata->link) ? $fdata->link : null, ['id' => 'link', 'class' => $errors->has('link') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Email Link']) }}
                    @error('link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    {{ Form::label('link', 'Instagram Link') }}
                    {{ Form::text('link', !empty($fdata->link) ? $fdata->link : null, ['id' => 'link', 'class' => $errors->has('link') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Instagram Link']) }}
                    @error('link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    {{ Form::label('link', 'Twitter Link') }}
                    {{ Form::text('link', !empty($fdata->link) ? $fdata->link : null, ['id' => 'link', 'class' => $errors->has('link') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Twitter Link']) }}
                    @error('link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    {{ Form::label('link', 'Linkedin Link') }}
                    {{ Form::text('link', !empty($fdata->link) ? $fdata->link : null, ['id' => 'link', 'class' => $errors->has('link') ? 'form-control is-invalid' : 'form-control', 'placeholder' => 'Linkedin Link']) }}
                    @error('link')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              <!-- /.card -->
            </div>
        </div>   
        {{ Form::close() }}
      </div>
    </section>
    <!-- form start -->    
  </div>
  @endsection
   