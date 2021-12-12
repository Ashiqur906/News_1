@extends('master')
@section('content')
    <!-- details part1 start -->
    <div class="container first_1">
      <div class="row">
        @for($x = 1; $x <= 1; $x++)
          @include('frontend.widgets.details_one', ['data' => [
           'header' =>'বাংলাদেশ',
           'img' => 'img/d11.jpg',
           'title' => 'সুরেন্দ্র কুমার সিনহার বিরুদ্ধে মামলার রায় পেছাল',
           'details' => 'প্রতারণা ও জালিয়াতির মাধ্যমে ফারমার্স ব্যাংকের (বর্তমানে পদ্মা ব্যাংক) চার কোটি টাকা আত্মসাতের অভিযোগে সাবেক প্রধান বিচারপতি সুরেন্দ্র কুমার সিনহাসহ ১১ জনের বিরুদ্ধে করা মামলার রায় ঘোষণার তারিখ পিছিয়েছে। রায় ঘোষণার নতুন তারিখ ২১ অক্টোবর।
            প্রতারণা ও জালিয়াতির মাধ্যমে ফারমার্স ব্যাংকের (বর্তমানে পদ্মা ব্যাংক) চার কোটি টাকা আত্মসাতের অভিযোগে সাবেক প্রধান বিচারপতি সুরেন্দ্র কুমার সিনহাসহ ১১ জনের বিরুদ্ধে করা মামলার রায় ঘোষণার তারিখ পিছিয়েছে। রায় ঘোষণার নতুন তারিখ ২১ অক্টোবর।',
           'date' => 'প্রকাশ: ১২ অক্টোবর ২০২১, ১১: ২৪',
           'people' =>'নিজস্ব প্রতিবেদক'
 
          ]])
        @endfor
                <div class="col-3">
                  <div class="row mb-4" style="height: 300px; background: rgb(226 226 226 / 50%); margin-left: 0px; margin-top: 204px;">
            
                  </div>
                  <h2 class="h_left">সব খবর</h2>
                  <div class="row mar_left">
                    <amp-img src="img/22.jpg" layout="responsive" width="16" height="9"></amp-img>
                    <p class="mt-2">ঢাবিতে কাল থেকে টিকাদান শুরু</p>
                    <span  class="time_span">ছবি: প্রথম আলো</span>
                  </div>
                  <div class="row mb-2">
                    @for($x = 1; $x <= 5; $x++)
                        @include('frontend.widgets.box_two', ['data' => [
                          'img' => 'img/33.jpg',
                          'title' => 'বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক',
                          'details' => 'বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু'
            
                        ]])
                      @endfor
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- details 1st part end --}}
    
     {{-- details 2nd part start --}}
    {{-- <div class="container-fluid mt-2 mb-5" style="background-image: url(img/33.jpg);">
      <div class="container mt-5 mb-5">
        <h2 class="h_c">বাংলাদেশ</h2>
        <div class="row">
          <div class="col-4 ">
              <amp-img src="img/44.jpg" layout="responsive" width="16" height="9"></amp-img>
              <div class= "cont_2" >
                  <h4 class="h_c4">নায়িকা কৌশানীর চোখে আগামীর তারকা শান্ত খান</h4>
                  <p class="ptext">কলকাতার নতুন প্রজন্মের তারকা কৌশানী মুখার্জি এখন বাংলাদেশে। তিনি বর্তমানে ইলিশের রাজধানী চাঁদপুরে অবস্থান করছেন। তিনি বর্তমানে ইলিশের রাজধানী চাঁদপুরে অবস্থান করছেন।</p>
              </div>
            </div>
            <div class="col-4 ">
              <amp-img src="img/55.jpg" layout="responsive" width="16" height="9"></amp-img>
              <div class= "cont_2" >
                  <h4 class="h_c4">দুবাই-লন্ডনে নেশা করতে যেতেন শাহরুখ পুত্র আরিয়ন</h4>
                  <p class="ptext">প্রমোদতরীর পার্টি থেকে সোজা নারকোটিক্স কন্ট্রোল ব্যুরোর (এনসিবি) দফতরে। শাহরুখ-পুত্র এমন বিপাকেও যে পড়তে পারেন, তা বোধ হয় তিনি নিজেও ভাবেননি।</p>
              </div>
            </div>
            <div class="col-4 ">
              <amp-img src="img/66.jpg" layout="responsive" width="16" height="9"></amp-img>
              <div class= "cont_2" >
                  <h4 class="h_c4">বলিউডের দর্শকপ্রিয় ১০ জুটি</h4>
                  <p class="ptext">বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</p>
              </div>
            </div>
        </div>
      </div>
    </div> --}}
    {{-- details 2nd part end --}}
    {{-- details 3nd part start --}}
    {{-- <div class="container">
      <div class="row">
        <div class="col-3" style="padding-left: 39px;">
          <h2 class="h_csl_det">সব খবর</h2>
            <div class="row mb-2 slide_text_1">
              <div class="col-5">
                <amp-img src="img/22.jpg" layout="responsive" width="16" height="16"></amp-img>
              </div>
              <div class="col-7 slide_text">
                <h3>বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক</h3>
                <p>বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু</p>
              </div>
            </div>
            <div class="row mb-2 slide_text_1">
              <div class="col-5">
                <amp-img src="img/33.jpg" layout="responsive" width="16" height="16"></amp-img>
              </div>
              <div class="col-7 slide_text">
                <h3>ঢাবিতে কাল থেকে টিকাদান শুরু</h3>
                <p>আজ রোববার বিশ্ববিদ্যালয়ের জনসংযোগ দপ্তর এ তথ্য জানিয়েছে। জনসংযোগ বিভাগের পরিচালক মাহমুদ আলমের স্বাক্ষরিত সংবাদ বিজ্ঞপ্তিতে জানানো হয়েছে, আগামীকাল সকাল  কর্মসূচি শুরু হবে।</p>
              </div>
            </div>
            <div class="row mb-2 slide_text_1">
              <div class="col-5">
                <amp-img src="img/44.jpg" layout="responsive" width="16" height="16"></amp-img>
              </div>
              <div class="col-7 slide_text">
                <h3>ঢাবিতে কাল থেকে টিকাদান শুরু</h3>
                <p>আজ রোববার বিশ্ববিদ্যালয়ের জনসংযোগ দপ্তর এ তথ্য জানিয়েছে। জনসংযোগ বিভাগের পরিচালক মাহমুদ আলমের স্বাক্ষরিত সংবাদ বিজ্ঞপ্তিতে জানানো হয়েছে, আগামীকাল সকাল  কর্মসূচি শুরু হবে।</p>
              </div>
            </div>
            <div class="row mb-2 slide_text_1">
              <div class="col-5">
                <amp-img src="img/55.jpg" layout="responsive" width="16" height="16"></amp-img>
              </div>
              <div class="col-7 slide_text">
                <h3>ঢাবিতে কাল থেকে টিকাদান শুরু</h3>
                <p>আজ রোববার বিশ্ববিদ্যালয়ের জনসংযোগ দপ্তর এ তথ্য জানিয়েছে। জনসংযোগ বিভাগের পরিচালক মাহমুদ আলমের স্বাক্ষরিত সংবাদ বিজ্ঞপ্তিতে জানানো হয়েছে, আগামীকাল সকাল  কর্মসূচি শুরু হবে।</p>
              </div>
            </div>
            <div class="row mb-2 slide_text_1">
              <div class="col-5">
                <amp-img src="img/66.jpg" layout="responsive" width="16" height="16"></amp-img>
              </div>
              <div class="col-7 slide_text">
                <h3>বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক</h3>
                <p>বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু</p>
              </div>
            </div>
            <div class="row mb-2 slide_text_1">
              <div class="col-5">
                <amp-img src="img/77.jpg" layout="responsive" width="16" height="16"></amp-img>
              </div>
              <div class="col-7 slide_text">
                <h3>বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক</h3>
                <p>বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু</p>
              </div>
            </div>
        </div>
        <div class="col-9">
          <div class="row">
             <h2 class="h_csl_det2">ভিডিও সংবাদ</h2>
            <div class="col-6">
              <amp-carousel width="470px" height="348px" layout="responsive" type="slides" style="width: 470px; height: 348px;">
                  <amp-iframe title="Video of Sintel, an independently produced short film" width="470px" height="348px" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen frameborder="0" src="https://www.youtube.com/embed/SOK_4j69wus">
                  </amp-iframe>
                  <amp-iframe title="Video of Sintel, an independently produced short film" width="470px" height="348px" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen frameborder="0" src="https://www.youtube.com/embed/SOK_4j69wus">
                  </amp-iframe>
                  <amp-iframe title="Video of Sintel, an independently produced short film" width="470px" height="348px" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen frameborder="0" src="https://www.youtube.com/embed/SOK_4j69wus">
                  </amp-iframe>
              </amp-carousel>
              <h3 class="videoh3">‘রোহিঙ্গা ক্যাম্পে অস্থিরতা তৈরিতে অস্ত্র আসছে মিয়ানমার থেকে’</h3>
            </div>
            <div class="col-6">
              <amp-carousel width="470px" height="348px" layout="responsive" type="slides" style="width: 470px; height: 348px;">
                  <amp-iframe title="Video of Sintel, an independently produced short film" width="470px" height="348px" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen frameborder="0" src="https://www.youtube.com/embed/SOK_4j69wus">
                  </amp-iframe>
                  <amp-iframe title="Video of Sintel, an independently produced short film" width="470px" height="348px" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen frameborder="0" src="https://www.youtube.com/embed/SOK_4j69wus">
                  </amp-iframe>
                  <amp-iframe title="Video of Sintel, an independently produced short film" width="470px" height="348px" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen frameborder="0" src="https://www.youtube.com/embed/SOK_4j69wus">
                  </amp-iframe>
              </amp-carousel>
              <h3 class="videoh3">‘রোহিঙ্গা ক্যাম্পে অস্থিরতা তৈরিতে অস্ত্র আসছে মিয়ানমার থেকে’</h3>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    {{-- details 3nd part end --}}
    <div class="container first_2">
        <div class="row">
            <span class="cat_d_h2"> বাংলাদেশ সম্পর্কিত আরও পড়ুন</span>
            <div class="col-7">
               {{-- details 3  --}}
                @for($x = 1; $x <= 1; $x++)
                  @include('frontend.widgets.details_3', ['data' => [
                  'img' => 'img/22.jpg',
                  'title' => 'বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক',
                  'details' => 'বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু',
                  ]])
                @endfor


                {{-- <div class="row">
                    <div class="col-5">
                        <h3>বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক</h3>
                        <p style="text-align: justify;">বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু</p>
                    </div>
                    <div class="col-7">
                         <amp-img src="img/22.jpg" layout="responsive" width="16" height="9"></amp-img>
                         <h3>বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক</h3>
                    </div>
                </div> --}}
            </div>
            <div class="col-5" style="background-color: #85858521">
                <div class="row">
                  {{-- details 4  --}}
                      @for($x = 1; $x <= 4; $x++)
                        @include('frontend.widgets.details_4', ['data' => [
                        'img' => 'img/22.jpg',
                        'title' => 'উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল',
                        'details' => 'বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই'
                        ]])
                      @endfor   
                    {{-- <div class="col-6">
                        <div class="part_6_con1" style="background-image: url(img/22.jpg);" >
                            <div class="test2_p6_first">
                                <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
                            </div>          
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="part_6_con1" style="background-image: url(img/22.jpg);" >
                            <div class="test2_p6_first">
                                <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
                            </div>          
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="part_6_con1" style="background-image: url(img/22.jpg);" >
                            <div class="test2_p6_first">
                                <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
                            </div>          
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    @endsection