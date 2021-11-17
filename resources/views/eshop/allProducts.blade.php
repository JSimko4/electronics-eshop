@extends('layout.app')

@section('content')

    @if($products->isNotEmpty())

        @foreach ($products as $product)
            <div class="post-list">
                <article class="product col-10 col-sm-8 col-md-7 mb-5 col-lg-5 col-xl-5 col-xxl-3 me-1">
                    <a href="/produkt/{{$product->id}}">
                        <img class="product-img" src="/img/{{$product->first_image()}}" alt="produkt">
                    </a>
                    <section class="product-bottom">
                        <div class="product-name-div ps-2 d-flex align-items-center">
                            <a href="filter/{{$product->id}}" class="product-text text-center fs-5">{{$product->name}}</a>
                        </div>
                        <div class="product-price-div px-3 d-flex align-items-center">
                            <a href="filter/{{$product->id}}" class="product-text fs-5 text-center ms-3">{{$product->price}}€</a>
                            <a href="" class="mb-1 product-buy-bag"> <i class="bi bi-bag-plus-fill"></i> </a>
                        </div>
                    </section>
                </article>

            </div>
        @endforeach
    @else
        <div>
            <h2>Neboli najdene ziadne produkty</h2>
        </div>
    @endif


@endsection
