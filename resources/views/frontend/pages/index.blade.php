@extends('master')
@section('content')
<!-- main part 1 right start box_one-->
<div class="container first_1">
    <div class="row">
    <div class="col-9">
      <h2 class="h_c">প্রচ্ছদ</h2>
      <div class="row">
        <!-- widgets box_one start-->
        @for($x = 1; $x <= 1; $x++)
          @include('frontend.widgets.box_one', ['data' => [
            'img' => 'img/11.jpg',
            'title' => 'বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক',
            'details' => 'বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু'

          ]])
        @endfor
          @include('frontend.widgets.box_one', ['data' => [
            'img' => 'img/22.jpg',
            'title' => 'ঢাবিতে কাল থেকে টিকাদান শুরু',
            'details' => 'আজ রোববার বিশ্ববিদ্যালয়ের জনসংযোগ দপ্তর এ তথ্য জানিয়েছে। জনসংযোগ বিভাগের পরিচালক মাহমুদ আলমের স্বাক্ষরিত সংবাদ বিজ্ঞপ্তিতে জানানো হয়েছে, আগামীকাল সকাল  কর্মসূচি শুরু হবে।'
  
          ]])
           @include('frontend.widgets.box_one', ['data' => [
            'img' => 'img/99.jpg',
            'title' => 'চলতি মাসেই খুলবে সব বিশ্ববিদ্যালয় : মন্ত্রিপরিষদ সচিব',
            'details' => 'চলতি মাসের মধ্যে সব বিশ্ববিদ্যালয় খুলে দেওয়া হবে বলে জানিয়েছেন মন্ত্রিপরিষদ সচিব খন্দকার আনোয়ারুল ইসলাম। ৪ অক্টোবর সোমবার অনুষ্ঠিত । আগামীকাল সকাল  কর্মসূচি শুরু '
  
          ]])
           @include('frontend.widgets.box_one', ['data' => [
            'img' => 'img/10.jpg',
            'title' => '‘রোহিঙ্গা ক্যাম্পে অস্থিরতা তৈরিতে অস্ত্র আসছে মিয়ানমার থেকে’',
            'details' => 'স্বরাষ্ট্রমন্ত্রী আসাদুজ্জামান খাঁন কামাল বলেছেন, আশ্রয় শিবিরের আইনশৃঙ্খলা পরিস্থিতি যথেষ্ট ভালো। রোহিঙ্গা নেতা মোহাম্মদ মুহিবুল্লাহর হত্যাকারীদের শিগগিরই'
  
          ]])
    </div>
  </div>
    <!-- main part 1 right end-->
    <!-- main part 1 left start-->
    <div class="col-3">
      <h2 class="h_csl">সব খবর</h2>
        <div class="row mb-2 slide_text_1">
          @for($x = 1; $x <= 1; $x++)
              @include('frontend.widgets.box_two', ['data' => [
                'img' => 'img/33.jpg',
                'title' => 'বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক',
                'details' => 'বৈশ্বিক মহামারি করোনাভাইরাসের সংক্রমণ ও মৃত্যু কিছুটা কমেছে। গত একদিনে সারাবিশ্বে এ ভাইরাসে চার হাজার ৬২৫ জনের মৃত্যু হয়েছে।  আগামীকাল সকাল  কর্মসূচি শুরু'
              ]])
            @endfor
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
    </div>
    <!-- main part 1 left end-->
    </div>
    </div>
    <!-- main part 1 end-->
    <!-- main part 6 start-->
    {{-- <div class="container">
      <h2 class="h_c">আন্তর্জাতিক</h2>
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
            <div class="col-4 res_4">
              <div class="part_6_con1" style="background-image: url(img/88.jpg);" >
                <div class="test2_p6_first">
                    <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                    <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই। </span>
                </div>          
              </div>
            </div>
            <div class="col-4 res_4">
              <div class="part_6_con1" style="background-image: url(img/99.jpg);" >
                <div class="test2_p6_first">
                    <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                    <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
                </div>          
              </div>
            </div>
            <div class="col-4 res_4">
              <div class="part_6_con1" style="background-image: url(img/33.jpg);" >
                <div class="test2_p6_first">
                    <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                    <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
                </div>          
              </div>
            </div>
            <div class="col-4 res_4">
              <div class="part_6_con1" style="background-image: url(img/22.jpg);" >
                <div class="test2_p6_first">
                    <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                    <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
                </div>          
              </div>
            </div>
            <div class="col-4 res_4">
              <div class="part_6_con1" style="background-image: url(img/22.jpg);" >
                <div class="test2_p6_first">
                    <h2 class="h_p6_first">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                    <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
                </div>          
              </div>
            </div>
            <div class="col-4 res_4">
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
      <div class="row">
        <div class="col-4">
          <div class="part_6_con" style="background-image: url(img/44.jpg);" >
            <div class="test2_p6">
                <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>          
          </div>
        </div>
        <div class="col-4">
          <div class="part_6_con" style="background-image: url(img/44.jpg);" >
            <div class="test2_p6">
                <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>          
          </div>
        </div>
        <div class="col-4">
          <div class="part_6_con" style="background-image: url(img/44.jpg);" >
            <div class="test2_p6">
                <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>          
          </div>
        </div>
        <div class="col-4">
          <div class="part_6_con" style="background-image: url(img/44.jpg);" >
            <div class="test2_p6">
                <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>          
          </div>
        </div>
        <div class="col-4">
          <div class="part_6_con" style="background-image: url(img/44.jpg);" >
            <div class="test2_p6">
                <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>          
          </div>
        </div>
        <div class="col-4">
          <div class="part_6_con" style="background-image: url(img/44.jpg);" >
            <div class="test2_p6">
                <h2 class="h_p6">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h2>
                <span>বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</span>
            </div>          
          </div>
        </div>
      </div>
    </div> --}}
    <!-- main part 6 end-->
    <!-- main part 2 start-->
    <div class="container mb-5">
      <h2 class="h_c">ভিডিও সংবাদ</h2>
      <div class="row">
        {{-- video widgets  --}}
          @for($x = 1; $x <= 3; $x++)
                @include('frontend.widgets.video_widgets', ['data' => [
                  'title' => 'বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক',
                  'video' =>'https://www.youtube.com/embed/SOK_4j69wus'
                ]])
          @endfor
      </div>
    </div>
    <!-- main part 2 end-->
    <!-- main part 3 start-->
    <div class="container-fluid mt-2 mb-5" style="background-color: aliceblue">
      <div class="container mt-5 mb-5">
        <h2 class="h_c" style="margin-left: -11px; padding-top:36px;">বিনোদন</h2>
        <div class="row">
          <div class="col-4 ">
              <amp-img src="img/44.jpg" layout="responsive" width="16" height="9"></amp-img>
              <div class= "cont_2" >
                  <h3 class="h_c4">নায়িকা কৌশানীর চোখে আগামীর তারকা শান্ত খান</h3>
                  <p class="ptext">কলকাতার নতুন প্রজন্মের তারকা কৌশানী মুখার্জি এখন বাংলাদেশে। তিনি বর্তমানে ইলিশের রাজধানী চাঁদপুরে অবস্থান করছেন। তিনি বর্তমানে ইলিশের রাজধানী চাঁদপুরে অবস্থান করছেন।</p>
              </div>
            </div>
            <div class="col-4 ">
              <amp-img src="img/55.jpg" layout="responsive" width="16" height="9"></amp-img>
              <div class= "cont_2" >
                  <h3 class="h_c4">দুবাই-লন্ডনে নেশা করতে যেতেন শাহরুখ পুত্র আরিয়ন</h3>
                  <p class="ptext">প্রমোদতরীর পার্টি থেকে সোজা নারকোটিক্স কন্ট্রোল ব্যুরোর (এনসিবি) দফতরে। শাহরুখ-পুত্র এমন বিপাকেও যে পড়তে পারেন, তা বোধ হয় তিনি নিজেও ভাবেননি।</p>
              </div>
            </div>
            <div class="col-4 ">
              <amp-img src="img/66.jpg" layout="responsive" width="16" height="9"></amp-img>
              <div class= "cont_2" >
                  <h3 class="h_c4">বলিউডের দর্শকপ্রিয় ১০ জুটি</h3>
                  <p class="ptext">বলিউডি সিনেমায় প্রেম তো অবিচ্ছেদ্য। আর সেলুলয়েড পর্দায় প্রেমের কথা এলেই মনে ভাসে সেরা কিছু জুটির কথা। প্রেমের ছবির দুর্দান্ত অনস্ক্রিন রসায়ন বললে তো জুটির কথা আসবেই।</p>
              </div>
            </div>
        </div>
      </div>
    </div>
    <!-- main part 3 end-->
    <!-- main part 4 start স্পোর্টস-->
    <div class="container mt-2 mb-2">
    <h2 class="h_c">স্পোর্টস</h2>
    <div class="row">
      <div class="col-4 ">
          <amp-img src="img/77.jpg" layout="responsive" width="16" height="9"></amp-img>
          <div class= "cont_2" >
              <h3 class="h_c4">ম্যান সিটি অভিযোগ করেছে থুতু ফেলার অভিযোগ</h3>
              <p class="ptext">অ্যানফিল্ডে ২-২ ড্রয়ের সময় ম্যানচেস্টার সিটি লিভারপুলের কাছে অভিযোগ করে যে তাদের বাড়ির পেছনের রুমের কর্মীদের সাথে তাদের ঘরের ফ্যান মারার অভিযোগ। </p>
          </div>
        </div>
        <div class="col-4 ">
          <amp-img src="img/88.jpg" layout="responsive" width="16" height="9"></amp-img>
          <div class= "cont_2" >
              <h3 class="h_c4">'নাটক, রাগ, সম্মান - শিরোনামের প্রতিদ্বন্দ্বীরা ক্লাসিককে পরিবেশন করে'</h3>
              <p class="ptext">গত মৌসুমে যখন লিভারপুল এবং ম্যানচেস্টার সিটি এনফিল্ডে মুখোমুখি হয়েছিল তখন এটি ছিল 'নাটক, রাগ, সম্মান - শিরোনামের প্রতিদ্বন্দ্বীরা ক্লাসিককে পরিবেশন করে..</p>
          </div>
        </div>
        <div class="col-4 ">
          <amp-img src="img/11.png" layout="responsive" width="16" height="9"></amp-img>
          <div class= "cont_2" >
              <h3 class="h_c4">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h3>
              <p class="ptext">এটি প্রায়শই বায়ার্ন মিউনিখ, রিয়াল মাদ্রিদ, প্যারিস সেন্ট জার্মেইন এবং বার্সেলোনা হারায় না - তবে তারা সবাই ইউরোপীয় ফুটবলে একই পাগল সপ্তাহান্তে করেছে।</p>
          </div>
        </div>
    </div>
    </div>
    <!-- main part 4 end-->
    <!-- main part 7 start-->
    <div class="container mt-2 mb-2">
      <h2 class="h_c">সকল বিভাগ</h2>
      <div class="row">
        <div class="col-4 ">
            <amp-img src="img/77.jpg" layout="responsive" width="16" height="9"></amp-img>
            <div class= "cont_2" >
                <h3 class="h_c4">ম্যান সিটি অভিযোগ করেছে থুতু ফেলার অভিযোগ</h3>
                <p class="ptext">অ্যানফিল্ডে ২-২ ড্রয়ের সময় ম্যানচেস্টার সিটি লিভারপুলের কাছে অভিযোগ করে যে তাদের বাড়ির পেছনের রুমের কর্মীদের সাথে তাদের ঘরের ফ্যান মারার অভিযোগ। </p>
            </div>
          </div>
          <div class="col-4 ">
            <amp-img src="img/88.jpg" layout="responsive" width="16" height="9"></amp-img>
            <div class= "cont_2" >
                <h3 class="h_c4">'নাটক, রাগ, সম্মান - শিরোনামের প্রতিদ্বন্দ্বীরা ক্লাসিককে পরিবেশন করে'</h3>
                <p class="ptext">গত মৌসুমে যখন লিভারপুল এবং ম্যানচেস্টার সিটি এনফিল্ডে মুখোমুখি হয়েছিল তখন এটি ছিল যে তাদের বাড়ির পেছনের রুমের কর্মীদের সাথে তাদের ঘরের ফ্যান মারার অভিযোগ।</p>
            </div>
          </div>
          <div class="col-4 ">
            <amp-img src="img/11.png" layout="responsive" width="16" height="9"></amp-img>
            <div class= "cont_2" >
                <h3 class="h_c4">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h3>
                <p class="ptext">এটি প্রায়শই বায়ার্ন মিউনিখ, রিয়াল মাদ্রিদ, প্যারিস সেন্ট জার্মেইন এবং বার্সেলোনা হারায় না - তবে তারা সবাই ইউরোপীয় ফুটবলে একই পাগল সপ্তাহান্তে করেছে।</p>
            </div>
          </div>
          <div class="col-4 ">
            <amp-img src="img/11.png" layout="responsive" width="16" height="9"></amp-img>
            <div class= "cont_2" >
                <h3 class="h_c4">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h3>
                <p class="ptext">এটি প্রায়শই বায়ার্ন মিউনিখ, রিয়াল মাদ্রিদ, প্যারিস সেন্ট জার্মেইন এবং বার্সেলোনা হারায় না - তবে তারা সবাই ইউরোপীয় ফুটবলে একই পাগল সপ্তাহান্তে করেছে।</p>
            </div>
          </div>
          <div class="col-4 ">
            <amp-img src="img/11.png" layout="responsive" width="16" height="9"></amp-img>
            <div class= "cont_2" >
                <h3 class="h_c4">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h3>
                <p class="ptext">এটি প্রায়শই বায়ার্ন মিউনিখ, রিয়াল মাদ্রিদ, প্যারিস সেন্ট জার্মেইন এবং বার্সেলোনা হারায় না - তবে তারা সবাই ইউরোপীয় ফুটবলে একই পাগল সপ্তাহান্তে করেছে।</p>
            </div>
          </div>
          <div class="col-4 ">
            <amp-img src="img/11.png" layout="responsive" width="16" height="9"></amp-img>
            <div class= "cont_2" >
                <h3 class="h_c4">উইকএন্ড যখন ইউরোপের জায়ান্টরা নম্র ছিল</h3>
                <p class="ptext">এটি প্রায়শই বায়ার্ন মিউনিখ, রিয়াল মাদ্রিদ, প্যারিস সেন্ট জার্মেইন এবং বার্সেলোনা হারায় না - তবে তারা সবাই ইউরোপীয় ফুটবলে একই পাগল সপ্তাহান্তে করেছে।</p>
            </div>
          </div>
      </div>
    </div>
    <!-- main part 7 end-->


    
@endsection