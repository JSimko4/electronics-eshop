@extends('layout.app')

@section('content')
<div id="product-page">
    @include('layout.partials.categories-list-blue')

    <div class="row d-flex justify-content-around mt-4 mb-5 mx-0">
        <div class="col-lg-5 col-sm-7 col-8 mb-md-3 d-flex align-items-center justify-content-center flex-column">
            <img src="/img/{{$product->first_image()}}" class="img-holder col-12" alt="produkt">
            <div class="small-images my-4 col-12 d-flex flex-row justify-content-between flex-wrap">
                @foreach($product->images->slice(1) as $image)
                    <img class="image-product-small col-3 me-1 mb-2" src="/img/{{$image->filename}}" alt="fotka produktu">
                @endforeach
            </div>
        </div>

        <section class="col-lg-5 col-11 d-flex align-items-left flex-column">
            <h1 class="mb-3">{{$product->name}}</h1>
            <p class="product-page-text">{{$product->description}}</p>
            <h1 class="fs-3 text-center my-2">Cena: {{$product->price}}€</h1>
            <div class="d-flex justify-content-center align-items-baseline mt-4">
                <input type="number" id="typeNumber" class="product-page-counter" min="1" max="9999" placeholder="1"/>
                <a href="" class="text-center product-page-add-butt ms-5">Pridať do košíka</a>
            </div>
        </section>
    </div>

    <script>
        jQuery(document).ready(function($){
            $(".image-product-small").each(function(){
                $(this).unbind().click(function(){
                    let imageHolder = $('.img-holder');
                    let imageHolderSrc = imageHolder.attr('src');

                    imageHolder.attr('src',$(this).attr("src"));
                    $(this).attr("src", imageHolderSrc)
                });
            });
        });
    </script>
</div>
@endsection
