@extends('admin.layout.admaster')
@section('content')
  <div class="content-wrapper">
    <section class="content">
      <div class="card-header">
        <h3 class="card-title">Tag List</h3>
          {{-- <a href="{{ route('admin.pages.tag.list') }}" class="btn btn-primary float-right">Add Tag</a> --}}
      </div>
      <!-- /.card-header -->
    
        <div class="card">
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
              </thead>
              <tbody>  
                {{-- @foreach ($tags as $item)
                  <tr role="row" class="odd">
                    <td class="">{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td class="sorting_1 btn-group">
                      <a href="{{url('admin/tag')}}/edit/{{$item->id}}" class="btn btn-success">Edit</a>
                      <a href="{{ url('admin/tag') }}/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
                      <a href="#" class="btn btn-primary">View</a>
                    </td>
                  </tr>
                @endforeach         --}}
              </tbody>           
            </table>
          </div>
          <div class="card-footer clearfix">
              {{-- {!! $tags->links('pagination::bootstrap-4') !!} --}}
          </div>
        </div>
        <!-- /.card-body -->
      </div>  
    </section>  
  </div>  
@endsection