
 <!-- Start Sidebar -->
 <amp-sidebar
 id="header-sidebar"
 class="ampstart-sidebar px3"
 layout="nodisplay"
 style="width: 255px;"
>
 <div class="flex justify-start items-center ampstart-sidebar-header">
   <div
     role="button"
     aria-label="close sidebar"
     on="tap:header-sidebar.toggle"
     tabindex="0"
     class="ampstart-navbar-trigger items-start"
     style="color:black; font-size: 25px;" 
   >
     ✕
   </div>
 </div>
 <nav class="ampstart-sidebar-nav ampstart-nav ">
   <ul class="list-reset m0 p0 ampstart-label" style="color:black;">
        {{-- @foreach ($category as $list) 
          <li class="ampstart-nav-item">
            <a class="ampstart-nav-link" href="#">{{$list->name}}</a>
          </li>
        @endforeach --}}
        <li class="ampstart-nav-item">
          <a class="ampstart-nav-link" href="#">বাংলাদেশ</a>
        </li>
       <li class="ampstart-nav-item">
         <a class="ampstart-nav-link" href="#">আন্তর্জাতিক</a>
       </li>
       <li class="ampstart-faq-item">
         <a href="#" class="text-decoration-none">বিনোদন</a>
       </li>
       <li class="ampstart-faq-item">
         <a href="#" class="text-decoration-none">স্পোর্টস</a>
       </li>
       <li class="ampstart-nav-item">
         <a class="ampstart-nav-link" href="#">টেক</a>
       </li>
       <li class="ampstart-nav-item">
         <a class="ampstart-nav-link" href="#">লাইফস্টাইল</a>
       </li>
       <li class="ampstart-faq-item">
         <a href="#" class="text-decoration-none">আজব</a>
       </li>
       <li class="ampstart-faq-item">
         <a href="#" class="text-decoration-none">আর্কাইভ</a>
       </li>
   </ul>
 </nav>
</amp-sidebar>
<!-- end Sidebar -->
<!-- top header part start -->
{{-- <header class="ampstart-headerbar  justify-start items-center top-0 left-0 right-0 pl2 pr4"> --}}
  <!-- logo part start -->
  <div class="">
    <div class="container">
      <div class="row">
        <div class="col-5 mt-2">
          <div class="flex justify-start items-center ampstart-sidebar-header"
            role="button"
            aria-label="open sidebar"
            on="tap:header-sidebar.toggle"
            tabindex="0"
            class="ampstart-navbar-trigger pr2"
            style="margin-top: -6px; font-size: 25px;"
            >
            ☰
          </div>
            <form class="sample-form" method="GET" action="/documentation/examples/api/submit-form" target="_top">
            <input type="search" placeholder="Search..." name="search">
            <input type="submit" value="search">
          </form>
          <p class="logo_p_taxt" [text]="'Hello ' + foo"> ঢাকা, বুধবার, ২৯ সেপ্টেম্বর ২০২১ | ১৪ আশ্বিন ১৪২৮ বঙ্গাব্দ</p>
        </div>
        <div class="col-2">
          <amp-img src="img/palo-bangla.svg" layout="responsive" class="logo_img" width="165px" height="75px"></amp-img>
        </div>
        <div class="col-5 so-icon text-center" style="text-align: center;">
          <amp-social-share
                                class="round mr1"
                                type="facebook"
                                width="27"
                                height="27"

                                data-param-app_id="563400841004160"
                        >
                        </amp-social-share>
                        <amp-social-share
                                class="circle mr1"
                                type="twitter"
                                width="27"
                                height="27"
                        >
                        </amp-social-share>
                        <amp-social-share
                                class="circle mr1"
                                type="whatsapp"
                                width="27"
                                height="27"
                        >
                        </amp-social-share>
                        <amp-social-share
                                class="circle mr1"
                                type="linkedin"
                                width="27"
                                height="27"
                        >
                        </amp-social-share>
        </div>
      </div>
    </div>
  </div>
  <!-- logo part end -->
    <div class="P_part">
      <div class="container">
         <div class="row">
            <div class="col-2">
                <span class="ajnews">আজকের সংবাদ </span>
            </div>
            <div class="col-10 marbg">
              <marquee >
                 <a href="#" style="color:white;">⦿ বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক</a>
                 <a href="#" style="margin-left: 50px; color:white;">⦿ ঢাবিতে কাল থেকে টিকাদান শুরু</a>
                 <a href="#" style="margin-left: 50px; color:white;">⦿ সুরেন্দ্র কুমার সিনহার বিরুদ্ধে মামলার রায় পেছাল</a>
                </marquee>
            </div>
         </div>
      </div>
    </div>
  <!-- top header part end -->
  <!-- menu part start -->
<header class="ampstart-headerbar flex justify-start items-center top-0 left-0 right-0 pl2 pr4">
  <div class="P_part1">
    <div class="container">
      <amp-mega-menu height="30" layout="fixed-height" class="pt-3 ampstart-headerbar">
        <nav class="bgnav">
          <ul style="display: flex; justify-content: space-between; flex-wrap: wrap; flex-direction: row;">
              {{-- <a style="color: white; font-size: 23px; margin-left: -35px;" href="http://127.0.0.1:8000/">&#8962;</a> --}}
            <li>
              <span role="button">সর্বশেষ</span>
                <div role="dialog" style="background-color: #000104; width: 15%; width: 15%; margin-top: 6px;">
                  <ol>
                    <li style="display: block; text-decoration: none;"><a href="#">আন্তর্জাতিক</a></li>
                    <li style="display: block; text-decoration: none;"><a href="#">বিনোদন</a></li>
                    <li style="display: block; text-decoration: none;"><a href="#">খেলা</a></li>
                  </ol>
                </div>
            </li>
            <li>
              <a href="{{ route('frontend.pages.details')}}">বাংলাদেশ</a>
            </li>
            <li>
              <a href="#">আন্তর্জাতিক</a>
            </li>
            <li>
              <a href="#">বিনোদন</a>
            </li>
            <li>
              <a href="#">খেলা</a>
            </li>
            <li>
              <a href="#">টেক</a>
            </li>
            <li>
              <a href="#">লাইফস্টাইল</a>
            </li>
            <li>
              <a href="#">চাকরি</a>
            </li>
            <li>
              <a href="#">বাণিজ্য</a>
            </li>
            <li>
              <a href="#">সকল বিভাগ</a>
            </li>
            <li>
              <a href="#">আর্কাইভ</a>
            </li>
            {{-- <li class="ml-20">
              <form class="sample-form" method="GET" action="/documentation/examples/api/submit-form" target="_top">
                <input type="search" placeholder="Search..." name="search">
                <input type="submit" value="search">
              </form>
            </li> --}}
          </ul>
        </nav>
      </amp-mega-m
      enu>
    </div>
  </div>
</header>
<!-- menu part end -->
