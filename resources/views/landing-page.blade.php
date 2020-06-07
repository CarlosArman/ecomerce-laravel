<!DOCTYPE html>
<html lang=es>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>La Tienda de Pumbah</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    </head>
    <body>
        <header>
          <div class="top-nav container">
              <div class="logo"> La Tienda de Pumbah</div>
              <ul class="nav navbar-nav">
                <li><a href="{{ route('shop.index') }}">SHOP</a></li>
                <li><a href="#">ABOUT</a></li>
                <li><a href="#">BLOG</a></li>
                <li>
                      <a href="{{ route('cart.index') }}">CART <span class="cart-count">
                          @if (Cart::instance('default')->count() > 0)
                          <span>{{ Cart::instance('default')->count() }}</span></span>
                          @endif
                      </a>
                </li>
              </ul>
          </div> <!-- End top-nav -->
          <div class="hero container">

              <div class="hero-copy">
                  <h1>Gracias por escoger la Tienda de Pumbah</h1>
                  <p> Aqui podrás realizar compras, navegar y encontrar tus artículos favoritos al mejor precio y de la mejor calidad al alcance de tu mano.</p>
                  <div class="hero-buttons">
                    <a href="{{ route('shop.index') }}" class="button button-white">Go to Shop</a>
                    <a href="{{ route('about') }}" class="button button-white">About</a>
                </div>
              </div><!-- End hero-copy -->

              <div class="hero-image">
                    <img src="img/cart.png" alt="hero image">
              </div>
          </div><!-- End hero -->
        </header>

        <div class="featured-section">
            <div class="container">
                <h1 class="text-center">Productos</h1>

                <p class="section-description text-center">Contamos con una variedad de categorías en donde encontrarás todo tipo de productos que requieres para el hogar, el entretenimiento y tu bienestar diario.</p>

                <div class="text-center button-container">
                    <a href="#" class="button">Featured</a>
                    <a href="#" class="button">On Sale</a>
                </div>


                <div class="products text-center">
                    @foreach ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->slug )}}"><img src="{{ asset('img/products/'.$product->slug.'.jpg')}}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->slug )}}"><div class="product-name">{{$product->name}}</div></a>
                        <div class="product-price">S/. {{$product->price}}</div>
                    </div>
                    @endforeach
                </div> <!-- end products -->

                <div class="text-center button-container">
                    <a href="{{ route('shop.index') }}" class="button">View more products</a>
                </div>

            </div> <!-- end container -->

        </div> <!-- end featured-section -->

        <div class="blog-section">
            <div class="container">
                <h1 class="text-center">From Our Blog</h1>

                <p class="section-description text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et sed accusantium maxime dolore cum provident itaque ea, a architecto alias quod reiciendis ex ullam id, soluta deleniti eaque neque perferendis.</p>

                <div class="blog-posts">
                    <div class="blog-post" id="blog1">
                        <a href="#"><img src="img/blog1.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 1</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                    </div>
                    <div class="blog-post" id="blog2">
                        <a href="#"><img src="img/blog2.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 2</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                    </div>
                    <div class="blog-post" id="blog3">
                        <a href="#"><img src="img/blog3.png" alt="blog image"></a>
                        <a href="#"><h2 class="blog-title">Blog Post Title 3</h2></a>
                        <div class="blog-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est ullam, ipsa quasi?</div>
                    </div>
                </div> <!-- end blog-posts -->
            </div> <!-- end container -->
        </div> <!-- end blog-section -->


          @include('partials.footer')



    </body>
</html>
