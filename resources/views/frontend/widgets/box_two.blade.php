
<a href="{{route('frontend.pages.details')}}" style="text-decoration: none">
    <div class="row mb-2 slide_text_1">
        {{-- <a href="{{route('frontend.pages.details')}}" style="text-decoration: none"> --}}
            <div class="col-5">
                <amp-img src="{{$data['img']}}" layout="responsive"  alt="{{$data['title']}}" width="16" height="16"></amp-img>
            </div>
            <div class="col-7 slide_text">
                <h3>{{$data['title']}}</h3>
                <p>{{$data['details']}}</p>
            </div>
        {{-- </a> --}}
    </div>
</a>