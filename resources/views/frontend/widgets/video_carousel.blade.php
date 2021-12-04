{{-- video carousel  --}}
                   <h3 class="videoh3">{{$data['title']}}</h3>
                    <amp-carousel width="718px" height="404px" layout="responsive" type="slides" style="width: 718px; height: 404px;">
                        <amp-iframe title="Video of Sintel, an independently produced short film" width="718px" height="404px" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen frameborder="0" src="{{$data['video']}}">
                        </amp-iframe>
                        <amp-iframe title="Video of Sintel, an independently produced short film" width="718px" height="404px" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen frameborder="0" src="{{$data['video']}}">
                        </amp-iframe>
                        <amp-iframe title="Video of Sintel, an independently produced short film" width="718px" height="404px" layout="responsive" sandbox="allow-scripts allow-same-origin allow-popups" allowfullscreen frameborder="0" src="{{$data['video']}}">
                        </amp-iframe>
                    </amp-carousel>