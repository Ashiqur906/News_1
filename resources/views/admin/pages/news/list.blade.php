@extends('admin.layout.admaster')
@section('content')
  <div class="content-wrapper">
      <div class="card-header">
        <h3 class="card-title">Media List</h3>
          {{-- <a href="{{ route('media.add') }}" class="btn btn-primary float-right">Add Media</a> --}}
      </div>
          <!-- Main content -->
    {{-- @if(Session::has('myexcep'))
        @dump(Session::get('myexcep'));
    @endif --}}
      <!-- /.card-header -->
    <section class="content">
      <div class="card">
        <div class="card-body">
          <table class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Media Type</th>
                <th>Release Date</th>
                <th>Landscape Image</th>
                <th>Portrait Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              {{-- @foreach ($movie as $item)
              <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->media_type}}</td>
                <td>{{$item->release_date}}</td>
                <td><img src="{{asset($item->landscapeimage)}}" height="100px" width="auto" alt=""></td>
                <td><img src="{{asset($item->potraitimage)}}" height="100px" width="auto" alt=""></td>
                <td class="btn-group btn-group-sm">
                  <a href="{{url('/admin/media')}}/edit/{{$item->id}}" class="btn btn-success">Edit</a>
                  <a href="{{ url('/admin/media') }}/delete/{{$item->id}}" class="btn btn-danger">Delete</a>
                  <a href="{{ url('/media/'.$item->slug) }}" class="btn btn-primary">View</a>
                </td>
              </tr>
              @endforeach --}}
            </tbody>
          </table>
        </div>
        <div class="card-footer clearfix">
              {{-- {!! $movie->links('pagination::bootstrap-4') !!} --}}
          </div>
      </div>
    </section>
  </div>
@endsection
