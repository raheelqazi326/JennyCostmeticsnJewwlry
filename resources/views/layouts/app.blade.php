<html>
    <head>
        @livewireStyles
    </head>
    <body>
        <nav class="nav justify-content-center">
          <a class="nav-link" href="/">Home</a>
          <a class="nav-link" href="/contact">Contact</a>
        </nav>
        {{ $slot }}
        @livewireScripts
        <script src="{{ asset('vendor\js\require.js') }}"></script>
        <script src="{{ asset('vendor\js\app.js') }}"></script>
    </body>
</html>