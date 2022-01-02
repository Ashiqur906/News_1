@extends('admin.layout.admaster')
@section('content')
  <div class="content-wrapper">
      <div class="card-header">
        <h3 class="card-title">Post List</h3>
          {{-- <a href="{{ route('media.add') }}" class="btn btn-primary float-right">Add Media</a> --}}
      </div>
          <!-- Main content -->
    {{-- @if(Session::has('myexcep'))
        @dump(Session::get('myexcep'));
    @endif --}}
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
                <a href="{{ route('admin.pages.post.create') }}" class="btn btn-outline-primary">+ Add Post</a>
              </div>
              <div class="w-auto mx-2">
                <a href="{{ route('admin.pages.post.list') }}" class="btn btn-outline-secondary btn-sm mt-1"><i class="fa fa-undo"></i>Clear</a>
              </div>
              <div class="w-auto ml-auto">
                <h3 class="card-title">Showing {{$posts->firstItem()}}-{{$posts->lastItem()}} of {{$posts->total()}} items.</h3>
              </div>
            </div>
          </div>
        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Post Type</th>
                <th>Release Date</th>
                <th>Landscape Image</th>
                <th>Portrait Image</th>
                <th>Action</th>
              </tr>
              <tr>
                <th><input type="number" name="id" class="form-control autoSubmit" value="{{$request->id}}"></th>
                <th><input type="text" name="title" class="form-control autoSubmit" value="{{$request->title}}"></th>
                <th><input type="text" name="post_type" class="form-control autoSubmit" value="{{$request->post_type}}"></th>
                <th><input type="text" name="release_date" class="form-control autoSubmit" value="{{$request->release_date}}"></th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @dd($posts);
              @foreach ($posts as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                <td>{{$item->post_type}}</td>
                <td>{{$item->release_date}}</td>
                <td><img src="{{asset($item->landscapeimage)}}" height="100px" width="auto" alt=""></td>
                <td><img src="{{asset($item->potraitimage)}}" height="100px" width="auto" alt=""></td>
                <td class="btn-group btn-group-sm">
                  <a href="{{url('/admin/post')}}/edit/{{$item->id}}" class="btn btn-success">Edit</a>
                  <a href="{{ url('/admin/post') }}/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
                  <a href="{{ url('/post/'.$item->slug) }}" class="btn btn-primary">View</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer clearfix">
              {!! $posts->links('pagination::bootstrap-4') !!}
          </div>
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

