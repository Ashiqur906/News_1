@extends('master')
@section('content')
<!-- main part 1 right start box_one-->
<div class="container">
  <div class="row">
    <h2 class="h_c mt-3">প্রচ্ছদ</h2>
    <div class="col-9 border_right">
      <div class="row border_bottom">
        <!-- widgets box_one start-->
        <div class="col-8">
          <div class="row border_right">
            @foreach ($posts as $key=> $item)
              @if ($key < 1 )
                <div class="col-6">
                  <h3>{{$item->title}}</h3>
                  <p>{{$item->description}}</p>
                  <span class="time_span"> &#9202; {{date('d-m-Y', strtotime($item->release_date))}}</span>
                </div>
                <div class="col-6">
                  <amp-img src="{{$item->potraitimage}}" layout="responsive" width="16" height="9"></amp-img>
                  <p>{{$item->title}}</p>
                  <span  class="time_span">ছবি: প্রথম আলো</span>
                </div>
              @endif    
            @endforeach
          </div>
        </div>
        {{-- main-parrt-1-right  --}}
        <div class="col-4">
          @foreach ($posts as $key=> $item)
            @if ($key < 1 )
              <h3>{{$item->title}}</h3>
              <p>{{$item->description}}</p>
              <span> &#9202; {{date('d-m-Y', strtotime($item->release_date))}}</span>
              <amp-img src="img/sports.PNG" layout="responsive" width="16" height="9"></amp-img>
            @endif 
          @endforeach
        </div>
      </div>
      <div class="row border_bottom">
        @foreach ($posts as $key => $item)
          @if($key < 6)
          <div class="col-4">
            <div class="border_right text_content">
              <h3>{{$item->title}}</h3>
              <p>{{$item->description}}</p>
              <span  class="time_span"> &#9202; {{date('d-m-Y', strtotime($item->release_date))}}</span>
            </div>
          </div>
          @endif 
        @endforeach
      </div>
      <div class="row border_bottom mt-3">
          @foreach ($posts as $key => $item)
            @if($key < 3)
              <div class="col-4">
                <div class="row">
                  <div class="col-5">
                    <amp-img src="{{$item->potraitimage}}" layout="responsive" width="16" height="16"></amp-img>
                    <span  class="time_span"> &#9202; {{date('d-m-Y', strtotime($item->release_date))}}</span>
                  </div>
                  <div class="col-7 border_right text_content">
                    <h3>{{$item->title}}</h3>
                  </div>
                </div>
              </div>
            @endif    
          @endforeach
      </div>  
      <div class="row border_bottom mt-3">
        @foreach ($posts as $key => $item)
          @if($key < 3)
            <div class="col-4">
              <div class="row">
                <div class="col-5">
                  <amp-img src="{{$item->potraitimage}}" layout="responsive" width="16" height="16"></amp-img>
                  <span  class="time_span"> &#9202; {{date('d-m-Y', strtotime($item->release_date))}}</span>
                </div>
                <div class="col-7 border_right text_content">
                  <h3>{{$item->title}}</h3>
                </div>
              </div>
            </div>
          @endif  
        @endforeach
      </div>
    </div>
    <!-- main part 1 right end-->
    <!-- main part 1 left start-->
    <div class="col-3">
      <div class="row mb-4" style="height: 300px; background: rgb(226 226 226 / 50%); margin-left: 0px;">

      </div>
      <h2 class="h_left">সব খবর</h2>
       <div class="row mar_left">
          @foreach ($posts as $key => $item)
           @if ($key < 1)
            <amp-img src="{{$item->potraitimage}}" layout="responsive" width="16" height="9"></amp-img>
            <p class="mt-2">{{$item->title}}</p>
            <span  class="time_span">ছবি: প্রথম আলো</span>
           @endif
          @endforeach
       </div>
       <div class="row mb-2">
          @foreach ($posts as $key => $item)
            @if ( $key < 4)
              <a href="{{route('frontend.pages.details')}}" style="text-decoration: none">
                <div class="row mb-2 slide_text_1">
                        <div class="col-5">
                            <amp-img src="{{$item->potraitimage}}" layout="responsive"  alt="{{$item->title}}" width="16" height="16"></amp-img>
                        </div>
                        <div class="col-7 slide_text">
                            <h3>{{$item->title}}</h3>
                            <p>{{$item->description}}</p>
                        </div>
                    {{-- </a> --}}
                </div>
              </a>
            @endif
          @endforeach
        </div>
      </div>
   </div>
  </div>
  <!-- main part 1 left end-->
</div>
<div class="container mt-5">
  <h2 class="h_c">আন্তর্জাতিক</h2>
  <div class="row">
    <div class="col-6 border_right">
      @foreach ($posts as $key=> $item)
        @if ($key < 1)
        <div class="border_bottom pb-2">
          <amp-img src="{{$item->potraitimage}}" layout="responsive" width="16" height="9"></amp-img>
          <span  class="time_pic pt-2">ছবি: প্রথম আলো</span>
          <h3>{{$item->title}}</h3>
          <p>{{$item->description}}</p>
          <span  class="time_span">&#9202; {{date('d-m-Y', strtotime($item->release_date))}}</span> 
        </div>
        @endif
      @endforeach
    </div>
    <div class="col-6">
      <div class="row mb-2">
        @foreach ($posts as $key=> $item)
          @if ($key< 2)
            <a href="{{route('frontend.pages.details')}}" style="text-decoration: none">
              <div class="row mb-2 slide_text_1">
                  {{-- <a href="{{route('frontend.pages.details')}}" style="text-decoration: none"> --}}
                      <div class="col-5">
                          <amp-img src="{{$item->potraitimage}}" layout="responsive"  alt="{{$item->title}}" width="16" height="16"></amp-img>
                      </div>
                      <div class="col-7 slide_text_large">
                          <h3>{{$item->title}}</h3>
                          <p>{{$item->description}}</p>
                      </div>
                  {{-- </a> --}}
              </div>
            </a> 
          @endif
        @endforeach
        </div>
    </div>
  </div>
</div>

  <!-- main part end -->
  <div class="container">
      <div class="row">
        <div class="col-9">
          <h2 class="h_c">বাংলাদেশ</h2>
          <div class="row">
            <!-- widgets box_one start-->
            @foreach ($posts as $key=> $item)
              @if ($key < 6)
                <div class="col-4 mb-3 border_right">
                  <a href="{{route('frontend.pages.details')}}" style="text-decoration: none">
                  <amp-img src="{{$item->potraitimage}}" width="16" height="9" layout="responsive" alt="{{$item->title}}"></amp-img>
                  <div class= "cont_1" >
                      <h3 class="h_c4">{{$item->title}}</h3>
                      <p class="ptext">{{$item->description}}</p>
                  </div>
                  </a>
                </div>
              @endif
            @endforeach
          </div>
        </div>
        <!-- main part 1 right end-->
        <!-- main part 1 left start-->
        <div class="col-3">
          <h2 class="h_csl">সব খবর</h2>
            <div class="row mb-2 slide_text_1">
                @foreach ($posts as $key=> $item)
                  @if ($key < 5)
                    <a href="{{route('frontend.pages.details')}}" style="text-decoration: none">
                      <div class="row mb-2 slide_text_1">
                              <div class="col-5">
                                  <amp-img src="{{$item->potraitimage}}" layout="responsive"  alt="{{$item->title}}" width="16" height="16"></amp-img>
                              </div>
                              <div class="col-7 slide_text">
                                  <h3>{{$item->title}}</h3>
                                  <p>{{$item->description}}</p>
                              </div>
                          {{-- </a> --}}
                      </div>
                    </a>
                  @endif
               @endforeach
            </div>
        </div>
      </div>
    </div>
    <!-- main part 1 left end-->
  </div>
    </div>
    <!-- main part 1 end-->
    <!-- main part 6 start-->
    <div class="container">
      <h2 class="h_c">বাণিজ্য</h2>
      <div class="row">
        <div class="col-6" style="margin-right: -25px">
          <div class="part_6_con11" style="background-image: url(img/77.jpg);" >
            <div class="test_p6">
              <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
              <span class="test_spa">বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই। বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই। বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই। বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-4 border_right">
              <div class="part_6_con1" style="background-image: url(img/88.jpg);" >
                <div class="test2_p6_first">
                    <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                    <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই। </span>
                </div>          
              </div>
            </div>
            <div class="col-4 border_right">
              <div class="part_6_con1" style="background-image: url(img/99.jpg);" >
                <div class="test2_p6_first">
                    <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                    <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
                </div>          
              </div>
            </div>
            <div class="col-4">
              <div class="part_6_con1" style="background-image: url(img/33.jpg);" >
                <div class="test2_p6_first">
                    <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                    <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
                </div>          
              </div>
            </div>
            <div class="col-4 border_right">
              <div class="part_6_con1" style="background-image: url(img/22.jpg);" >
                <div class="test2_p6_first">
                    <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                    <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
                </div>          
              </div>
            </div>
            <div class="col-4 border_right">
              <div class="part_6_con1" style="background-image: url(img/22.jpg);" >
                <div class="test2_p6_first">
                    <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                    <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
                </div>          
              </div>
            </div>
            <div class="col-4">
              <div class="part_6_con1" style="background-image: url(img/22.jpg);" >
                <div class="test2_p6_first">
                    <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                    <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
                </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- main part 6 end-->
    <!-- main part 2 start-->
    <div class="container mb-5 fixed flex">
      <h2 class="h_c">ভিডিও সংবাদ</h2>
      <div class="row">
        <div class="col-8">
          <div class="row">
            {{-- video widgets  --}}
            {{-- @for($x = 1; $x <= 2; $x++)
            @include('frontend.widgets.video_widgets', ['data' => [
              'title' => 'বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক',
              'video' =>'https://www.youtube.com/embed/SOK_4j69wus'
            ]])
            @endfor --}}
            @foreach($posts as $key=> $item)
              @if($key < 2)
                <div class="col-6">
                  <h3 class="videoh3">{{$item->title}}</h3>
                  <amp-iframe
                      width="300px"
                      height="250px"
                      sandbox="allow-scripts allow-same-origin"
                      layout="responsive"
                      frameborder="0"
                      src="{{$item->link}}"
                    >
                  </amp-iframe>
               </div>
              @endif
            @endforeach
          </div>
       </div>
        <div class="col-4" style="background:#f0f0f0;">
          <amp-ad width="300" height="250" type="foo">
            <p>Add</p>
          </amp-ad>
        </div>
      </div>
    </div>
    <!-- main part 2 end-->
    <!-- main part 3 start-->
    <div class="container mt-2 mb-5">
      <div class="container mt-5 mb-5">
        <h2 class="h_c">বিনোদন</h2>
        <div class="row">
          @foreach ($posts as $key=> $item)
            @if ($key < 6)
              <div class="col-3 mt-2 border_right">
                <a href="{{route('frontend.pages.details')}}" style="text-decoration: none">
                <amp-img src="{{$item->potraitimage}}" width="16" height="9" layout="responsive" alt="{{$item->title}}"></amp-img>
                <div class= "cont_1" >
                    <h3 class="h_c4">{{$item->title}}</h3>
                    <p class="ptext">{{$item->description}}</p>
                </div>
                </a>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
    <!-- main part 3 end-->
    <div class="container">
      <div class="row">
        <h2 class="h_c">লাইফস্টাইল</h2>
        <div class="col-3">
          <div class="part_6_con" style="background-image: url(img/11.jpg);" >
            <div class="test2_p6">
                <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>          
          </div>
        </div>
        <div class="col-3">
          <div class="part_6_con" style="background-image: url(img/44.jpg);" >
            <div class="test2_p6">
                <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>          
          </div>
        </div>
        <div class="col-3">
          <div class="part_6_con" style="background-image: url(img/11.jpg);" >
            <div class="test2_p6">
                <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>          
          </div>
        </div>
        <div class="col-3">
          <div class="part_6_con" style="background-image: url(img/66.jpg);" >
            <div class="test2_p6">
                <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>          
          </div>
        </div>
        <div class="col-3">
          <div class="part_6_con" style="background-image: url(img/77.jpg);" >
            <div class="test2_p6">
                <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>          
          </div>
        </div>
        <div class="col-3">
          <div class="part_6_con" style="background-image: url(img/44.jpg);" >
            <div class="test2_p6">
                <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>          
          </div>
        </div>
        <div class="col-6">
          <div class="row">
            <div class="col-12 ml-2 mr-2" style="background: #e2e2e2; height: 295px; margin-left: 12px;">
              <amp-ad width="300" height="250" type="foo">
                <p>Add</p>
              </amp-ad>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- main part 4 start স্পোর্টস-->
    <div class="container mt-2 mb-2">
    <h2 class="h_c">স্পোর্টস</h2>
    <div class="row">
      <div class="col-4" style="border: 1px solid #e2e2e2;">
        <span style="margin-left: 46px; margin-top: 46px;">মতামত</span>
        <h3 class="" style="margin-left: -42px; margin-right: 211px; font-size: 27px; margin-left: -46px; padding: 3px; margin-top: 100px; background: rgba(70, 70, 230, 0.603)">‘বন্দুকযুদ্ধে’ আসামি <br>নিহত</h3>
        <p style="text-align: left; margin-top: 67px; padding: 34px; margin-bottom: 133px;">বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</p>
      </div>
      <div class="col-8">
        <div class="row">
          <div class="col-4 border_right">
            <amp-img src="img/77.jpg" layout="responsive" width="16" height="9"></amp-img>
            <div class= "cont_2" >
                <h3 class="h_c4">ম্যান সিটি অভিযোগ করেছে থুতু ফেলার অভিযোগ</h3>
                <p class="ptext">অ্যানফিল্ডে ২-২ ড্রয়ের সময় ম্যানচেস্টার সিটি লিভারপুলের কাছে অভিযোগ করে যে তাদের বাড়ির পেছনের রুমের কর্মীদের সাথে তাদের ঘরের ফ্যান মারার অভিযোগ। </p>
            </div>
          </div>
          <div class="col-4 border_right">
            <amp-img src="img/88.jpg" layout="responsive" width="16" height="9"></amp-img>
            <div class= "cont_2" >
                <h3 class="h_c4">'নাটক, রাগ, সম্মান - শিরোনামের প্রতিদ্বন্দ্বীরা ক্লাসিককে পরিবেশন করে'</h3>
                <p class="ptext">গত মৌসুমে যখন লিভারপুল এবং ম্যানচেস্টার সিটি এনফিল্ডে মুখোমুখি হয়েছিল তখন এটি ছিল 'নাটক, রাগ, সম্মান - শিরোনামের প্রতিদ্বন্দ্বীরা ক্লাসিককে পরিবেশন করে..</p>
            </div>
          </div>
          <div class="col-4">
            <amp-img src="img/11.png" layout="responsive" width="16" height="9"></amp-img>
            <div class= "cont_2" >
                <h3 class="h_c4">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h3>
                <p class="ptext">এটি প্রায়শই বায়ার্ন মিউনিখ, রিয়াল মাদ্রিদ, প্যারিস সেন্ট জার্মেইন এবং বার্সেলোনা হারায় না - তবে তারা সবাই ইউরোপীয় ফুটবলে একই পাগল সপ্তাহান্তে করেছে।</p>
            </div>
          </div>
        </div>
        <div class="row mt-2">
          <div class="col-12 ml-2 mr-2" style="background: #e2e2e2; height: 215px; margin-left: 12px;">
            <amp-ad width="300" height="250" type="foo">
              <p>Add</p>
            </amp-ad>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- main part 4 end-->
    <!-- main part 7 start-->
    <div class="container mt-2 mb-2">
      <h2 class="h_c">সকল বিভাগ</h2>
      <div class="row">
        @foreach ($posts as $key=> $item)
              @if ($key < 6)
                <div class="col-3 mt-2 border_right">
                  <a href="{{route('frontend.pages.details')}}" style="text-decoration: none">
                  <amp-img src="{{$item->potraitimage}}" width="16" height="9" layout="responsive" alt="{{$item->title}}"></amp-img>
                  <div class= "cont_1" >
                      <h3 class="h_c4">{{$item->title}}</h3>
                      <p class="ptext">{{$item->description}}</p>
                  </div>
                  </a>
                </div>
              @endif
            @endforeach
          <div class="col-6 mt-2">
            <div class="row">
              <div class="col-12 ml-2 mr-2" style="background: #e2e2e2; height: 356px; margin-left: 12px;">
                <amp-ad width="300" height="250" type="foo">
                  <p>No ad for you</p>
                </amp-ad>
              </div>
            </div>
          </div>
      </div>
    </div>
    <!-- main part 7 end-->
    <div class="container">
      <div class="row">
        <h2 class="h_c">সকল বিভাগ</h2>
        <div class="col-4 border_right">
          <div class="row mb-2">
            @foreach ($posts as $key=> $item)
              @if ($key < 5)
                <a href="{{route('frontend.pages.details')}}" style="text-decoration: none">
                  <div class="row mb-2 slide_text_1">
                          <div class="col-5">
                              <amp-img src="{{$item->potraitimage}}" layout="responsive"  alt="{{$item->title}}" width="16" height="16"></amp-img>
                          </div>
                          <div class="col-7 slide_text">
                              <h3>{{$item->title}}</h3>
                              <p>{{$item->description}}</p>
                          </div>
                      {{-- </a> --}}
                  </div>
                </a>
              @endif
            @endforeach
          </div>
        </div>
        <div class="col-4 border_right">
            @foreach ($posts as  $key=> $item)
              @if ($key < 2)
              <div class="border_bottom mb-1 pb-5">
                <amp-img src="{{$item->potraitimage}}" layout="responsive" width="16" height="9"></amp-img>
                <span  class="time_span">ছবি: প্রথম আলো</span>
                <h3>{{$item->title}}</h3>
                <p>{{$item->description}}</p>
                <span  class="time_span"> &#9202; {{date('d-m-Y', strtotime($item->release_date))}}</span>
              </div>
              @endif
            @endforeach
        </div>
        <div class="col-4">
          <div class="row mb-2">
            @foreach ($posts as $item)
                <a href="{{route('frontend.pages.details')}}" style="text-decoration: none">
                  <div class="row mb-2 slide_text_1">
                          <div class="col-5">
                              <amp-img src="{{$item->potraitimage}}" layout="responsive"  alt="{{$item->title}}" width="16" height="16"></amp-img>
                          </div>
                          <div class="col-7 slide_text">
                              <h3>{{$item->title}}</h3>
                              <p>{{$item->description}}</p>
                          </div>
                      {{-- </a> --}}
                  </div>
                </a>
          @endforeach
            </div>
        </div>
      </div>
    </div>
@endsection