@extends('admin.layout.admaster')
@section('content')
   <div class="content-wrapper">
      <div class="card-header">
        <h3 class="card-title">Category List</h3>
          {{-- <a href="{{ route('category.add') }}" class="btn btn-primary float-right">Add Category</a> --}}
      </div>
      <!-- /.card-header -->
      <section class="content">
        <div class="card">
          <div class="card-body">    
            <table class="table table-bordered table-hover dataTable" >
              <thead>
                <tr role="row">
                    <th>Id</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>      
                  {{-- @foreach ($Categories as $item)
                    <tr role="row" class="odd">
                      <td class="">{{$item->id}}</td>
                      <td>{{$item->name}}</td>
                      <td class="sorting_1 btn-group">
                        <a href="{{url('admin/category')}}/edit/{{$item->id}}" class="btn btn-success">Edit</a>
                        <a href="{{ url('admin/category') }}/delete/{{$item->id}}" class="btn btn-danger">Delete</a>                   
                        <a href="#" class="btn btn-primary">View</a>
                      </td>
                    </tr>
                  @endforeach        --}}
              </tbody>
            </table>
          </div>
          <div class="card-footer clearfix">
              {{-- {!! $Categories->links('pagination::bootstrap-4') !!} --}}
          </div>
        </div>  
      </section>  
   </div>  
  @endsection