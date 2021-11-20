@extends('admin.layout.admaster')
@section('content')
  <div class="content-wrapper">
    <section class="content">
      <div class="card-header">
        <h3 class="card-title">Tag List</h3>
          <a href="{{ route('admin.pages.role.create') }}" class="btn btn-primary float-right">Add Role</a>
      </div>
      <!-- /.card-header -->
    
        <div class="card">
          {{ Form::open(['method' => 'GET', 'enctype' => 'multipart/form-data']) }}
          <div class="card-header">
            <div class="row px-2">
              <div class="w-auto">
                {{ Form::select('per_page', array_combine([5,10,20,40], [5,10,20,40]), $request->per_page, ['class' => 'form-control autoSubmit']) }}
              </div>
              <div class="w-auto mx-2">
                <a href="{{ route('admin.pages.role.create') }}" class="btn btn-outline-primary">+ Add Role</a>
              </div>
              <div class="w-auto mx-2">
                <a href="{{ route('admin.pages.role.list') }}" class="btn btn-outline-secondary btn-sm mt-1"><i class="fa fa-undo"></i>Clear</a>
              </div>
              <div class="w-auto ml-auto">
                <h3 class="card-title">Showing {{$roles->firstItem()}}-{{$roles->lastItem()}} of {{$roles->total()}} items.</h3>
              </div>
            </div>
          </div>
          <div class="card-body">       
           <table  class="table table-bordered table-hover dataTable" >
              <thead>
                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending">
                        Id
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        Title
                    </th>
                  
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
                        Action
                    </th>
                </tr>
                <tr>
                  <th><input type="number" name="id" class="form-control autoSubmit" value="{{$request->id}}"></th>
                  <th><input type="text" name="name" class="form-control autoSubmit" value="{{$request->name}}"></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>  
                @foreach ($roles as $item)
                  <tr role="row" class="odd">
                    <td class="">{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td class="sorting_1 btn-group">
                      <a href="{{url('admin/tag')}}/edit/{{$item->id}}" class="btn btn-success">Edit</a>
                      <a href="{{ url('admin/tag') }}/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
                      <a href="#" class="btn btn-primary">View</a>
                    </td>
                  </tr>
                @endforeach        
              </tbody>           
            </table>
          </div>
          <div class="card-footer clearfix" style="text-align: center;">
              {!! $roles->withQueryString()->links('pagination::bootstrap-4') !!}

          </div>
        </div>
        <!-- /.card-body -->
      </div>  
    </section>  
  </div>  
@endsection
@push('customjs')
    <script>
      $(".autoSubmit").change(function() {
        $(this).parents("form").submit()
      });
    </script>
@endpush