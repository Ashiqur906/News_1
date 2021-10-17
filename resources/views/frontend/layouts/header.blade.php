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
<header class="ampstart-headerbar fixed flex justify-start items-center top-0 left-0 right-0 pl2 pr4">
  <div class="P_part">
    <div class="container">
      <div class="row">
        <div class="col-10">
          <div class="row">
              <div class="col-2">
                <div
                  role="button"
                  aria-label="open sidebar"
                  on="tap:header-sidebar.toggle"
                  tabindex="0"
                  class="ampstart-navbar-trigger pr2"
                  style="margin-top: -6px; font-size: 25px;"
                >
                  ☰
                </div>
              </div>
              <div class="col-2">
                <span class="ajnews">আজকের সংবাদ ></span>
              </div>
            {{-- marquee --}}
            <div class="col-6">
              {{-- New --}}
              <div class="slide-marquee">
                <ul class="ul-list spot-anim">
                  <li class="li-list flex">
                      <div class="list-alert-spinner">
                          <div class="double-bounce"></div>
                      </div>
                    <a href=""> বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক </a>
                   </li>
                  <li class="li-list flex">
                  <div class="list-alert-spinner">
                    <div class="double-bounce">
                    </div>
                  </div>
                   <a href=""> ঢাবিতে কাল থেকে টিকাদান শুরু </a>
                    </li>
                  <li class="li-list flex">
                  <div class="list-alert-spinner">
                      <div class="double-bounce">
                      </div>
                  </div>
                   <a href=""> বিশ্বে ২৪ ঘণ্টায় ৪৬২৫ জনের মৃত্যু, সংক্রমিত তিন লক্ষাধিক  </a>
                   </li>
                  <li class="li-list flex">
                  <div class="list-alert-spinner">
                                            <div class="double-bounce"></div>
                                        </div>
                  <a href="">ঢাবিতে কাল থেকে টিকাদান শুরু</a>
                  </li>
                  <li class="li-list flex">
                  <div class="list-alert-spinner">
                                            <div class="double-bounce"></div>
                                        </div>
                  <a href=""> News number 5 </a>
                  </li>
                  <li class="li-list flex">
                  <div class="list-alert-spinner">
                                            <div class="double-bounce"></div>
                                        </div>
                  <a href=""> News number 6 </a>
                  </li>
                  <li class="li-list flex">
                  <div class="list-alert-spinner">
                                            <div class="double-bounce"></div>
                                        </div>
                  <a href=""> News number 7 </a>
                  </li>
                  <li class="li-list flex">
                  <div class="list-alert-spinner">
                                            <div class="double-bounce"></div>
                                        </div>
                  <a href=""> News number 8 </a>
                  </li>
                  <li class="li-list flex">
                  <div class="list-alert-spinner">
                                            <div class="double-bounce"></div>
                                        </div>
                  <a href=""> News number 9 </a>
                  </li>
                  <li class="li-list flex">
                  <div class="list-alert-spinner">
                                            <div class="double-bounce"></div>
                                        </div>
                  <a href=""> News number 10 </a>
                  </li>
                </ul>
              </div>
              {{-- New End --}}
              {{-- <div class="col-12">
                <span>You spin me right round, baby. Like a record, baby.</span>
                <span>You spin me right round, baby. Like a record, baby.</span>
              </div> --}}
            </div>
          </div>
        </div>
        <div class="col-2 soci_icon">
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
  <!-- top header part end -->
  <!-- menu part start -->
  <div class="P_part1">
    <div class="container">
      <amp-mega-menu height="30" layout="fixed-height">
        <nav class="bgnav">
          <ul>
            <li>
              <a href="#">সর্বশেষ</a>
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
              &#128269;
          </ul>
        </nav>
      </amp-mega-menu>
    </div>
  </div>
</header>
<!-- menu part end -->
<!-- logo part start -->
<div class="logop">
  <div class="container">
    <div class="row">
      <div class="col-2">
        <amp-img src="img/new1Logo.PNG" width="165px" height="75px"></amp-img>
      </div>
      <div class="col-7" style="background-color: rgba(207, 207, 207, 0.774);">
          <p style="text-align: center">add part</p>
      </div>
      <div class="col-3">
        <p class="logo_p_taxt" [text]="'Hello ' + foo"> ঢাকা, বুধবার, ২৯ সেপ্টেম্বর ২০২১ | ১৪ আশ্বিন ১৪২৮ বঙ্গাব্দ</p>
      </div>
    </div>
  </div>
</div>
<!-- logo part end -->