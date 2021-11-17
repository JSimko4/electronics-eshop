@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-center">
    <div id="carouselExampleControls" class="carousel carousel-dark slide big-product mt-4"  data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/{{$products_slider->first()->first_image()}}" class="d-block w-100 h-100 carousel-img" alt="obrazok produktu">
                <div class="product-bottom">
                    <div class="product-price-div py-1 px-3 d-flex align-items-center justify-content-between">
                        <a href="/produkt/{{$products_slider->first()->id}}" class="product-text fs-5">{{$products_slider->first()->name}}</a>
                        <div class="d-flex align-items-center py-1">
                            <a href="/produkt/{{$products_slider->first()->id}}" class="product-text fs-4 me-4">{{$products_slider->first()->price}}€</a>
                            <a href="{{ url('add-to-cart/'.$products_slider->first()->id) }}" class="product-buy-bag mb-2 fs-4"> <i class="bi bi-bag-plus-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>

            @foreach($products_slider->slice(1) as $product)
                <div class="carousel-item">
                    <img src="img/{{$product->first_image()}}" class="d-block w-100 h-100 carousel-img" alt="obrazok produktu">
                    <div class="product-bottom">
                        <div class="product-price-div py-1 px-3 d-flex align-items-center justify-content-between">
                            <a href="/produkt/{{$product->id}}" class="product-text fs-5">{{$product->name}}</a>
                            <div class="d-flex align-items-center py-1">
                                <a href="/produkt/{{$product->id}}" class="product-text fs-4 me-4">{{$product->price}}€</a>
                                <a href="{{ url('add-to-cart/'.$product->id) }}" class="product-buy-bag mb-2 fs-4"> <i class="bi bi-bag-plus-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

    <section id="products" class="mb-1 mt-3 p-4">
        <h5 class="mb-3 text-md-center text-lg-start text-xl-start text-xxl-start text-center">Najpredávanejšie produkty</h5>
        <div class="d-flex justify-content-around flex-wrap">
            @foreach ($products_top as $product)
                <div class="product col-12 col-sm-8 col-md-7 mb-5 col-lg-5 col-xl-5 col-xxl-3">
                    <a href="/produkt/{{$product->id}}">
                        <img class="product-img" src="/img/{{$product->first_image()}}" alt="produkt">
                    </a>
                    <section class="product-bottom">
                        <div class="product-name-div ps-2 d-flex align-items-center">
                            <a href="/produkt/{{$product->id}}" class="product-text text-center fs-5">{{$product->name}}</a>
                        </div>
                        <div class="product-price-div px-3 d-flex align-items-center">
                            <a href="/produkt/{{$product->id}}" class="product-text fs-5 text-center ms-3">{{$product->price}}€</a>
                            <a href="{{ url('add-to-cart/'.$product->id) }}" class="mb-1 product-buy-bag"> <i class="bi bi-bag-plus-fill"></i> </a>
                        </div>
                    </section>
                </div>
            @endforeach
        </div>
    </section>
@endsection

