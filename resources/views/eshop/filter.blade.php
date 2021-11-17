@extends('layout.app')

@section('content')
    <div class="row pe-0 me-0">
        <div class="d-flex justify-content-center align-items-start col-xl-2 col-12 px-2 mt-4 mb-3">
            <section class="d-flex flex-column filters p-3">
                <h1 class="fs-3 text-center filter-text">Filtrovanie</h1>
                @if (isset($subcategory_name))
                    <form method="POST" role="filter" action="/filter/{{$category_name}}/{{$subcategory_name}}/filteros">




                        @else
                            <form method="POST" role="filter" action="/filter/{{$category_name}}/filteros">
                            @endif
                    {{ csrf_field() }}
<!--
                    <section class="mt-4">
                        <h1 class="fs-5">Zoradiť:</h1>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                   checked>
                            <label class="form-check-label" for="flexRadioDefault2">Vzostupne</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">Zostupne</label>
                        </div>
                    </section>
-->
                    <section class="mt-4">
                        <h1 class="fs-5">Cena:</h1>
                        <div class="input-group input-group-sm mb-2">
                            <span class="input-group-text price-text" id="min_price">Min:</span>
                            <div class="col col-4 col-lg-9">
                                <input name="min_price" type="text" placeholder="...€" class="form-control">
                            </div>
                        </div>

                        <div class="input-group input-group-sm">
                            <span class="input-group-text price-text" id="max_price">Max:</span>
                            <div class="col col-4 col-lg-9">
                                <input name="max_price" type="text" placeholder="...€" class="form-control">
                            </div>
                        </div>
                    </section>


                    <section class="mt-4">
                        <h1 class="fs-5">Operačná pamäť:</h1>
                        @foreach ($memories as $memory)
                            <div class="form-check col col-12">
                                <input class="form-check-input" type="checkbox" value="{{$memory->id}}" name="memory[]">
                                <label class="form-check-label">
                                    {{$memory->memory}}
                                </label>
                            </div>
                        @endforeach

                    </section>



                    <section class="mt-4">
                        <h1 class="fs-5">Farba:</h1>
                        @foreach ($colors as $color)
                            <div class="form-check col col-12">
                                <input class="form-check-input" type="checkbox" value="{{$color->id}}" name="color[]">
                                <label class="form-check-label">
                                    {{$color->color}}
                                </label>
                            </div>
                        @endforeach
                    </section>


                    <button type="submit" class="text-center col-12 header-button mt-5">Filtrovať</button>
                </form>
            </section>
        </div>

        <div class="col-xl-10 col-12 pb-3 ps-0 pt-4 pe-xl-2 pe-0">
            <div class="filter-categories-list px-4 pb-1 d-flex justify-content-between align-items-baseline col-3">
                <a href="/">Domov</a>
                <i class="bi bi-arrow-right"></i>
                <a href="/filter/{{$category_name}}">{{$category_name}}</a>
                @if (isset($subcategory_name))
                    <i class="bi bi-arrow-right"></i>
                    <a href="/filter/{{$category_name}}/{{$subcategory_name}}">{{$subcategory_name}}</a>
                @endif
            </div>

            @if (!isset($subcategory_name))
                <section class="subcategories py-2 px-3 mt-1">
                    <h1 class="text-center font-color-footer">{{$category_name}}</h1>
                    <div class="d-flex justify-content-between flex-wrap mt-3">
                        @foreach ($subcategories as $subcategory)
                            <a href="/filter/{{$category_name}}/{{$subcategory->name}}"
                               class="text-center header-button col-2 mx-1 mb-3">{{$subcategory->name}}</a>
                        @endforeach
                    </div>
                </section>
            @endif

            <div class="d-flex justify-content-around flex-wrap mt-5">
                @foreach ($products as $product)
                    <article class="product col-10 col-sm-8 col-md-7 mb-5 col-lg-5 col-xl-5 col-xxl-3 me-1">
                        <a href="/produkt/{{$product->id}}">
                            <img class="product-img" src="/img/{{$product->first_image()}}" alt="produkt">
                        </a>
                        <section class="product-bottom">
                            <div class="product-name-div ps-2 d-flex align-items-center">
                                <a href="/produkt/{{$product->id}}"
                                   class="product-text text-center fs-5">{{$product->name}}</a>
                            </div>
                            <div class="product-price-div px-3 d-flex align-items-center">
                                <a href="/produkt/{{$product->id}}"
                                   class="product-text fs-5 text-center ms-3">{{$product->price}}€</a>
                                <a href="" class="mb-1 product-buy-bag"> <i class="bi bi-bag-plus-fill"></i> </a>
                            </div>
                        </section>
                    </article>
                @endforeach
            </div>

            <div class="d-flex justify-content-center py-1">
                {{ $products->links('pagination::bootstrap-4') }}
            </div>

        </div>
    </div>
@endsection
