@extends('layout')

@section('title', 'Products')

@section('extra-css')

@endsection

@section('content')

    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Home</a>
              <i class="fa fa-chevron-right breadcrumb-separator"></i>
            <span>Shop</span>
        </div>
    </div>

    <div class="products-section container">
        <div class="sidebar">
            <h3>Por Categoría</h3>
            <ul>
                <li><a href="#">Abarrotes</a></li>
                <li><a href="#">Frutas y Verduras</a></li>
                <li><a href="#">Lácteos y Huevos</a></li>
                <li><a href="#">Todo Carnes</a></li>
                <li><a href="#">Bebidas</a></li>
                <li><a href="#">Panadería y Pastelería</a></li>
                <li><a href="#">Dulces</a></li>
            </ul>

            <h3>By Price</h3>
            <ul>
                <li><a href="#">$0 - $700</a></li>
                <li><a href="#">$700 - $2500</a></li>
                <li><a href="#">$2500+</a></li>
            </ul>
        </div> <!-- end sidebar -->
        <div>
            <h1>Productos</h1>
            <div class="products text-center">

                @foreach ($products as $product)
                    <div class="product">
                        <a href="{{ route('shop.show', $product->slug )}}"><img src="{{ asset('img/products/'.$product->slug.'.jpg')}}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->slug )}}"><div class="product-name">{{ $product->name }}</div></a>
                        <div class="product-price">{{ $product->price }}</div>

                        <!-- <a href="{{ route('shop.show', $product->slug) }}"><img src="{{ asset('img/products/'.$product->slug.'.jpg') }}" alt="product"></a>
                        <a href="{{ route('shop.show', $product->slug) }}"><div class="product-name">{{ $product->name }}</div></a> -->
                    </div>
                @endforeach

            </div> <!-- end products -->
        </div>
    </div>

@endsection
