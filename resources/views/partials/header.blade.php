<div id="header">
    <div class="main-logo">
        <img src="{{ asset('img/dc-logo.png') }}" alt="Logo DC">
    </div>
    <nav class="header-nav">
        <ul>

            @foreach ($headerData as $element)
                <li>
                    <a href="{{ $element['url'] }}">{{ $element['text'] }}</a>
                </li>
            @endforeach


        </ul>
    </nav>
</div>

{{--:class="{ active: link.current}"--}}
