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
