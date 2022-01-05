<!doctype html>
<html ⚡4ads >
    <head>
        @include('frontend.layouts.header_css')
    </head>
    <body>
        {{-- header start --}}
        @include('frontend.layouts.header')
        {{-- header end --}}
        
        {{-- content part start --}}

        @yield('content')
        {{-- <div id="app" style="">
            @yield('content')
            <a title="Go to Top" href="#" class="gototop">
                <i class="ti-angle-up"></i>
            </a>
        </div> --}}
        {{-- content part end --}}

        {{-- footer start --}}
        @include('frontend.layouts.footer')
        {{-- footer end --}}
        @include('frontend.layouts.footer_js')
    
    </body>
</html>