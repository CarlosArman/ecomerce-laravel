<header>
    <div class="top-nav container">
        <a href="/"><div class="logo">La Tienda de Pumbah</div></a>

        <ul>
            <li><a href="{{ route('shop.index') }}">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li>
                  <a href="{{ route('cart.index') }}">Cart <span class="cart-count">
                      @if (Cart::instance('default')->count() > 0)
                      <span>{{ Cart::instance('default')->count() }}</span></span>
                      @endif
                  </a>
            </li>
        </ul>
    </div> <!-- end top-nav -->
</header>
