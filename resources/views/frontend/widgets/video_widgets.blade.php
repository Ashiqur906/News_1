{{-- video widgets  --}}

  <div class="col-6">
    <h3 class="videoh3">{{$data['title']}}</h3>
    <amp-iframe
        width="300px"
        height="250px"
        sandbox="allow-scripts allow-same-origin"
        layout="responsive"
        frameborder="0"
        src="{{$data['video']}}"
      >
    </amp-iframe>
  </div>
