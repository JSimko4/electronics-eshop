@extends('layout.app')

@section('content')
    <div class="row pe-0 me-0">
        <div class="d-flex justify-content-center align-items-start col-xl-2 col-12 px-2 mt-4 mb-3">
            <section class="d-flex flex-column filters p-3">
                <h1 class="fs-3 text-center filter-text">Filtrovanie</h1>

                <section class="mt-4">
                    <h1 class="fs-5">Zoradiť:</h1>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">Vzostupne</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">Zostupne</label>
                    </div>
                </section>

                <section class="mt-4">
                    <h1 class="fs-5">Cena:</h1>
                    <div class="input-group input-group-sm mb-2">
                        <span class="input-group-text price-text" id="min">Min:</span>
                        <input type="number" class="form-control py-2" aria-label="Small" aria-describedby="min" min="0">
                        <span class="input-group-text">€</span>
                    </div>

                    <div class="input-group input-group-sm">
                        <span class="input-group-text price-text" id="max">Max:</span>
                        <input type="number" class="form-control py-2" aria-label="Small" aria-describedby="max" min="0">
                        <span class="input-group-text">€</span>
                    </div>
                </section>

                <section class="mt-4">
                    <h1 class="fs-5">Operačná pamäť:</h1>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="ram1">
                        <label class="form-check-label" for="ram1">
                            8GB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="ram2">
                        <label class="form-check-label" for="ram2">
                            16GB a viac
                        </label>
                    </div>
                </section>

                <section class="mt-4">
                    <h1 class="fs-5">Vnútorna pamäť:</h1>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hard1">
                        <label class="form-check-label" for="hard1">
                            256GB
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="hard2">
                        <label class="form-check-label" for="hard2">
                            512GB a viac
                        </label>
                    </div>
                </section>

                <section class="mt-4">
                    <h1 class="fs-5">Farba:</h1>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="farba1">
                        <label class="form-check-label" for="farba1">
                            Čierna
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="farba2">
                        <label class="form-check-label" for="farba2">
                            Sivá
                        </label>
                    </div>
                </section>

                <a href="" class="text-center col-12 header-button mt-5">Filtrovať</a>
            </section>
        </div>

        <div class="col-xl-10 col-12 pb-3 ps-0 pt-4 pe-xl-2 pe-0">
            @include('layout.partials.categories-list')

            <section class="subcategories py-2 px-3 mt-1">
                <h1 class="text-center font-color-footer">Notebooky</h1>
                <div class="d-flex justify-content-between flex-wrap mt-3">
                    <a href="filter-page2.html" class="text-center header-button col-2 mx-1 mb-3">Lenovo</a>
                    <a href="filter-page2.html" class="text-center header-button col-2 mx-1 mb-3">Acer</a>
                    <a href="filter-page2.html" class="text-center header-button col-2 mx-1 mb-3">Asus</a>
                    <a href="filter-page2.html" class="text-center header-button col-2 mx-1 mb-3">Mac</a>
                    <a href="filter-page2.html" class="text-center header-button col-2 mx-1 mb-3">HP</a>
                </div>
            </section>

            <div class="d-flex justify-content-around flex-wrap mt-5">
                @foreach ($products as $product)
                    <div class="product col-10 col-sm-8 col-md-7 mb-5 col-lg-5 col-xl-5 col-xxl-3 me-1">
                        <a href="filter/{{$product->id}}">
                            <img class="product-img" src="img/{{$product->file}}" alt="produkt">
                        </a>
                        <div class="product-bottom">
                            <div class="product-name-div ps-2 d-flex align-items-center">
                                <a href="filter/{{$product->id}}" class="product-text text-center fs-5">{{$product->name}}</a>
                            </div>
                            <div class="product-price-div px-3 d-flex align-items-center">
                                <a href="filter/{{$product->id}}" class="product-text fs-5 text-center ms-3">{{$product->price}}€</a>
                                <a href="" class="mb-1 product-buy-bag"> <i class="bi bi-bag-plus-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center text-align-center subcategories py-1">
                {{ $products->links('pagination::bootstrap-4') }}

                <!--
                <a href="" class="me-4 fs-5 pageing">Začiatok</a>
                <a href="" class="me-4 fs-5 pageing">1</a>
                <a href="" class="me-4 fs-5 pageing">2</a>
                <a href="" class="me-4 fs-5 pageing">3</a>
                <a href="" class="me-4 fs-5 pageing">4</a>
                <a href="" class="me-4 fs-5 pageing">5</a>
                <a href="" class="me-4 fs-5 pageing">Koniec</a>
                -->
            </div>

        </div>
    </div>
@endsection
