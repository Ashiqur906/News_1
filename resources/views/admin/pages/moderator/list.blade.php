@extends('admin.layouts.admaster')
@section('content')

  <div class="content-wrapper">
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
      <div class="card-header">
        <h3 class="card-title">Moderator List</h3>
      </div>
      <!-- /.card-header -->
      <section class="content">
        <div class="card">
        {{ Form::open(['method' => 'GET', 'enctype' => 'multipart/form-data']) }}
          <div class="card-header">
            <div class="row px-2">
              <div class="w-auto">
                {{ Form::select('per_page', array_combine([5,10,20,40], [5,10,20,40]), $request->per_page, ['class' => 'form-control autoSubmit']) }}
              </div>
              <div class="w-auto mx-2">
                <a href="{{ route('people.add') }}" class="btn btn-outline-primary">+ Add Moderator</a>
              </div>
              <div class="w-auto mx-2">
                <a href="{{ route('people.index') }}" class="btn btn-outline-secondary btn-sm mt-1"><i class="fa fa-undo"></i>Clear</a>
              </div>
              <div class="w-auto ml-auto">
                <h3 class="card-title">Showing {{$moderator->firstItem()}}-{{$moderator->lastItem()}} of {{$moderator->total()}} items.</h3>
              </div>
            </div>
          </div>
          <div class="card-body"> 
            <table class="table table-bordered table-hover dataTable">
              <thead>
                <tr role="row">
                  <th>Id</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Photo</th>
                  <th>Gender</th>
                  <th>Action</th>
                </tr>
                <tr>
                  <th><input type="number" name="id" class="form-control autoSubmit" value="{{$request->id}}"></th>
                  <th><input type="text" name="name" class="form-control autoSubmit" value="{{$request->name}}"></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($moderator as $item)
                    <tr role="row" class="odd">
                      <td class="">{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td>{{$item->slug}}</td>
                      <td><img src="{{asset($item->image)}}" height="180px" width="140px" alt=""></td>
                      <td>{{$item->gender}}</td>
                      <td class="sorting_1 btn-group">
                        <a href="{{url('admin/entity')}}/edit/{{$item->id}}" class="btn btn-success">Edit</a>
                        <a href="{{ url('admin/entity') }}/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
                        <a href="{{ url('/profile/'.$item->slug) }}" class="btn btn-primary">View</a>
                      </td>
                    </tr>
                  @endforeach
              </tbody>
            </table>                     
          </div>
          <div class="card-footer clearfix">
              {!! $moderator->withQueryString()->links('pagination::bootstrap-4') !!}
          </div>
        </div> 
      </section>
      <!-- /.card-body -->
  </div>
@endsection
@push('customjs')
<script>
  $(".autoSubmit").change(function() {
    $(this).parents("form").submit()
  });
</script>
@endpush