@extends('layout.app')

@section('content')
    <section class="container">
        <div class="row mb-3">
            <div class="col-lg-8 pt-4 ">
                <h5 class="mt-4 mb-4">Zoznam všetkých produktov na stránke (2)</h5>
                <div class="row mb-4">
                    @foreach($products as $product)
                        <hr class="mt-4 mb-4">
                        <article class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3 mb-3 mb-md-1">
                                <img class="img-fluid w-100" src="img/{{$product->first_image()}}" alt="acer_nitro">
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5>{{$product->name}}</h5>
                                        <p>{{$product->description}}</p>
                                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{$product->id}}"><i class="fa fa-trash-o"></i> Odstrániť z košíka</button>
                                    </div>
                                    <div>
                                        <p class="mt-2 text-center">Cena: <strong>{{$product->price}}€</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="container d-flex justify-content-between align-items-center">
                                <div class="row">
                                    <a href="#!"  class="card-link-secondary small text-uppercase mr-3">
                                        <i class="fas fa-trash-alt mr-1"></i>Odstraniť  produkt
                                    </a>
                                    <a href="#!"  class="card-link-secondary small text-uppercase mr-3">
                                        <i class="fas fa-trash-alt mr-1"></i> Zmenit fotku
                                    </a>
                                    <a href="#!"  class="card-link-secondary small text-uppercase mr-3">
                                        <i class="fas fa-trash-alt mr-1"></i> Zmenit cenu
                                    </a>
                                    <a href="#!"  class="card-link-secondary small text-uppercase mr-3">
                                        <i class="fas fa-trash-alt mr-1"></i> Upraviť popis
                                    </a>
                                </div>
                                <p class="mb-1"><strong>12.99€</strong></p >
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-3">
                <div class="mb-4">
                    <div class="pt-5">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pridajte Fotku</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        <form>
                            <div class="form-group">
                                <label for="name_input">Názov produktu</label>
                                <input type="text" class="form-control" id="name_input" placeholder="meno">
                            </div>
                            <div class="form-group">
                                <label for="value_input">Cena</label>
                                <input type="number" class="form-control" id="value_input" placeholder="Cena">
                            </div>

                            <div class="form-group">
                                <label for="text_are_input">Popis produktu</label>
                                <textarea class="form-control" id="text_are_input" rows="3"></textarea>
                            </div>
                        </form>
                        <a href="transportation.html" class="btn btn-primary btn-block">
                            Pridať produkt
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

