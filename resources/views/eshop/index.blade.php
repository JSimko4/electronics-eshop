@extends('layout.app')

@section('content')
    <div class="d-flex justify-content-center">
    <div id="carouselExampleControls" class="carousel carousel-dark slide big-product mt-4"  data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active d-flex justify-content-center align-items-center">
                <img src="img/ntbpink.jpg" class="d-block w-100 h-100 carousel-img" alt="obrazok produktu">
                <div class="product-bottom">
                    <div class="product-price-div py-1 px-3 d-flex align-items-center justify-content-between">
                        <a href="product-page.html" class="product-text fs-5">Huawei MateBook X Pro</a>
                        <div class="d-flex align-items-center py-1">
                            <a href="product-page.html" class="product-text fs-4 me-4">1249€</a>
                            <a href="" class="product-buy-bag mb-2 fs-4"> <i class="bi bi-bag-plus-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/acer.jpg" class="d-block w-100 h-100 carousel-img" alt="XXX">
                <div class="product-bottom">
                    <div class="product-price-div py-1 px-3 d-flex align-items-center justify-content-between">
                        <a href="product-page.html" class="product-text fs-5">Acer V15</a>
                        <div class="d-flex align-items-center py-1">
                            <a href="product-page.html" class="product-text fs-4 me-4">599€</a>
                            <a href="" class="product-buy-bag mb-2 fs-4"> <i class="bi bi-bag-plus-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/ntb6.png" class="d-block w-100 h-100 carousel-img" alt="XXX">
                <div class="product-bottom">
                    <div class="product-price-div py-1 px-3 d-flex align-items-center justify-content-between">
                        <a href="product-page.html" class="product-text fs-5">DELL Inspiron 7490</a>
                        <div class="d-flex align-items-center py-1">
                            <a href="product-page.html" class="product-text fs-4 me-4">999€</a>
                            <a href="" class="product-buy-bag mb-2 fs-4"> <i class="bi bi-bag-plus-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
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

            <div class="product col-12 col-sm-8 col-md-7 mb-5 col-lg-5 col-xl-5 col-xxl-3">
                <a href="product-page.html">
                    <img class="product-img" src="img/ntb2.jpg" alt="produkt">
                </a>
                <div class="product-bottom">
                    <div class="product-name-div ps-2 d-flex align-items-center">
                        <a href="product-page.html" class="product-text text-center fs-5">Acer V15</a>
                    </div>
                    <div class="product-price-div px-3 d-flex align-items-center">
                        <a href="product-page.html" class="product-text fs-5 text-center ms-3">599€</a>
                        <a href="" class="mb-1 product-buy-bag"> <i class="bi bi-bag-plus-fill"></i> </a>
                    </div>
                </div>
            </div>

            <div class="product col-12 col-sm-8 col-md-7 mb-5 col-lg-5 col-xl-5 col-xxl-3">
                <a href="product-page.html">
                    <img class="product-img" src="img/xbox_one.jpg" alt="produkt">
                </a>
                <div class="product-bottom">
                    <div class="product-name-div ps-2 d-flex align-items-center">
                        <a href="product-page.html" class="product-text text-center fs-5">Xbox One</a>
                    </div>
                    <div class="product-price-div px-3 d-flex align-items-center">
                        <a href="product-page.html" class="product-text fs-5 text-center ms-3">399€</a>
                        <a href="" class="mb-1 product-buy-bag"> <i class="bi bi-bag-plus-fill"></i> </a>
                    </div>
                </div>
            </div>

            <div class="product col-12 col-sm-8 col-md-7 mb-5 col-lg-5 col-xl-5 col-xxl-3">
                <a href="product-page.html">
                    <img class="product-img" src="img/ps5.jpg" alt="produkt">
                </a>
                <div class="product-bottom">
                    <div class="product-name-div ps-2 d-flex align-items-center">
                        <a href="product-page.html" class="product-text text-center fs-5">Playstation 5</a>
                    </div>
                    <div class="product-price-div px-3 d-flex align-items-center">
                        <a href="product-page.html" class="product-text fs-5 text-center ms-3">499€</a>
                        <a href="" class="mb-1 product-buy-bag"> <i class="bi bi-bag-plus-fill"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

