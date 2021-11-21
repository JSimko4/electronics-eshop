@extends('layout.app')

@section('content')

    @if($products->isNotEmpty())
        <div class="d-flex justify-content-around flex-wrap mt-5">
            @foreach ($products as $product)
                <article class="product col-10 col-sm-8 col-md-7 mb-5 col-lg-5 col-xl-5 col-xxl-3 me-1">
                    <a href="/produkt/{{$product->id}}">
                        <img class="product-img" src="/img/{{$product->first_image()}}" alt="produkt">
                    </a>
                    <section class="product-bottom">
                        <div class="product-name-div ps-2 d-flex align-items-center">
                            <a href="/produkt/{{$product->id}}" class="product-text text-center fs-5">{{$product->name}}</a>
                        </div>
                        <div class="product-price-div px-3 d-flex align-items-center">
                            <a href="/produkt/{{$product->id}}" class="product-text fs-5 text-center ms-3">{{$product->price}}€</a>
                            <a href="{{ url('/add-to-cart/'.$product->id) }}" class="mb-1 product-buy-bag"> <i class="bi bi-bag-plus-fill"></i> </a>
                        </div>
                    </section>
                </article>
            @endforeach
        </div>
        <div class="d-flex justify-content-center py-1">
            {{ $products->links('pagination::bootstrap-4') }}
        </div>
    @else
        <div>
            <h2 class="mt-5 text-center">Neboli nájdené žiadne produkty...</h2>
        </div>
    @endif


@endsection
