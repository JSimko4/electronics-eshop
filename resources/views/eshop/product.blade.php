@extends('layout.app')

@section('content')
<div id="product-page">
    @include('layout.partials.categories-list-blue')

    <div class="row d-flex justify-content-around mt-4 mb-5 mx-0">
        <div class="col-lg-5 col-sm-7 col-8 mb-md-3 d-flex align-items-center justify-content-center flex-column">
            <img src="img/ntb4.jpg" class="img-holder col-12" alt="produkt">
            <div class="small-images my-4 col-12 d-flex flex-row justify-content-between flex-wrap">
                <img class="image-product-small col-3 me-1 mb-2" src="img/ntb.jpg" alt="fotka produktu">
                <img class="image-product-small col-3 me-1 mb-2" src="img/ntb2.jpg" alt="fotka produktu">
                <img class="image-product-small col-3 me-1 mb-2" src="img/ntb3.jpg" alt="fotka produktu">
                <img class="image-product-small col-3 me-1 mb-2" src="img/ntb5.jpg" alt="fotka produktu">
            </div>
        </div>

        <section class="col-lg-5 col-11 d-flex align-items-left flex-column">
            <h1 class="mb-3">Notebook Acer V15</h1>
            <p class="product-page-text">Curabitur et blandit ante, vitae molestie metus. Cras lobortis nunc lectus, commodo mollis urna condimentum sed. Etiam at mi tortor. Cras ac elit ac ante ultricies feugiat rhoncus id erat. Vivamus sem augue, hendrerit sit amet tempor sit amet, finibus ut nibh. Quisque non magna id arcu molestie ultrices sit amet a purus. Quisque a lectus lobortis, laoreet augue eget, laoreet mi. Quisque malesuada bibendum cursus. Maecenas sed dolor auctor, consectetur leo porttitor, imperdiet magna. Proin at efficitur nibh. Vestibulum consequat velit ac augue pharetra luctus. Mauris varius hendrerit tellus id pellentesque. Integer neque dolor, viverra a lacus a, mollis posuere nibh. Mauris interdum libero interdum neque vulputate fringilla. Ut sit amet purus in lectus efficitur aliquet ac a sapien. Aliquam ultricies arcu at nulla suscipit hendrerit.</p>
            <h1 class="fs-3 text-center my-2">Cena: 599€</h1>
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
