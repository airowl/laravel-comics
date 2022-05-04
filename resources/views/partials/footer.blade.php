<div id="footer-top">
    <div class="footer-top-content">
        <div class="footer-top-content-links">
            <div class="col">
                <h4>Dc Comics</h4>

                <ul>
                    @foreach ($footerData['dcComicsLinks'] as $element)
                    <li>
                        <a href="{{ $element['url'] }}">{{$element['text']}}</a>
                    </li>
                    @endforeach
                </ul>


                <h4>Shop</h4>
                <ul>
                    @foreach ($footerData['shopLinks'] as $element)
                        <li>
                            <a href="{{ $element['url'] }}">{{ $element['text'] }}</a>
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="col">
                <h4>Dc</h4>

                <ul>
                    @foreach ($footerData['dcLinks'] as $element)
                        <li>
                            <a href="{{ $element['url'] }}">{{ $element['text'] }}</a>
                        </li>
                    @endforeach
                </ul>

            </div>
            <div class="col">
                <h4>Sites</h4>

                <ul>
                    @foreach ($footerData['sitesLinks'] as $element)
                        <li>
                            <a href="{{ $element['url'] }}">{{ $element['text'] }}</a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
        <div class="footer-top-bg">
        </div>
    </div>
</div>

<div id="footer-bottom">
    <div class="container">
        <div class="sing-up">
            <a href="#">
                Sign-up Now!
            </a>
        </div>
        <div class="social-icons">
            <h4>Follow us</h4>
            @foreach ($footerData['iconLinks'] as $element)
                <a href="{{ $element['url']}}">
                    <img src="{{ asset($element['image'])}}" alt="Facebook Logo">
                </a>
            @endforeach


        </div>
    </div>

</div>
