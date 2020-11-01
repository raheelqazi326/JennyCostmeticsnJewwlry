<html>
    <head>
        @livewireStyles
    </head>
    <body>
        <nav class="nav justify-content-center">
          <a class="nav-link" href="/">Home</a>
          <a class="nav-link" href="/about-us">About Us</a>
          <a class="nav-link" href="/products">Products</a>
          <a class="nav-link" href="/product">Product</a>
          <a class="nav-link" href="/faq">Faqs</a>
          <a class="nav-link" href="/login">Login</a>
          <a class="nav-link" href="/register">Register</a>
          <a class="nav-link" href="/price-lists">Price List</a>
          <a class="nav-link" href="/forgot-password">Forgot Password</a>
          <a class="nav-link" href="/checkout">Checkout</a>
          <a class="nav-link" href="/cart">Cart</a>
          <a class="nav-link" href="/contact">Contact</a>
        </nav>
        {{ $slot }}
        @livewireScripts
        <script src="{{ asset('vendor\js\require.js') }}"></script>
        <script src="{{ asset('vendor\js\app.js') }}"></script>
    </body>
</html>