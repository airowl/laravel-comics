<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
        {{-- include serve per importare parti del body che devo rimanere fissi per tutte le pagine --}}
        @include('partials.header')
    </header>

    <main>
        @yield('main-content')
    </main>

    <footer>
        {{-- include serve per importare parti del body che devo rimanere fissi per tutte le pagine --}}
        @include('partials.footer')
    </footer>

</body>
</html>
