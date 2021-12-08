<!-- main part 1 right start box_one-->
<div class="col-4 mb-3 border_right">
    <a href="{{route('frontend.pages.details')}}" style="text-decoration: none">
    <amp-img src="{{$data['img']}}" width="16" height="9" layout="responsive" alt="{{$data['title']}}"></amp-img>
    <div class= "cont_1" >
        <h3 class="h_c4">{{$data['title']}}</h3>
        <p class="ptext">{{$data['details']}}</p>
    </div>
    </a>
  </div>