@extends('layout.app')

@section('content')
    <section class="container-fluid">
        <div class="d-flex row justify-content-around mb-3">


            <section class="col-lg-7 pt-4 order-md-2 order-lg-1">
                <h3 class="mt-4 mb-0">Počet produktov v databáze ({{$total}})</h3>
                <div class="row mb-2">
                    @foreach($products as $product)
                        <hr class="mt-4 mb-4">
                        <article class="row mb-4">
                            <div class="d-flex align-items-center col-md-5 col-lg-3 col-xl-3 mb-3 mb-md-1">
                                <img class="img-fluid w-100" src="img/{{$product->first_image()}}" alt="acer_nitro">
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <a href="/produkt/{{$product->id}}" class="fs-4">{{$product->name}}</a>
                                <p class="my-3">{{$product->description}}</p>
                                <p>Cena: <strong>{{$product->price}}€</strong></p>
                                <div class="row d-flex justify-content-between">
                                    <a class="btn btn-primary btn-sm mt-3 col-12" href="/admin/edit/{{$product->id}}"><i class="bi bi-pencil-square"></i> Zmeniť názov, popis, cenu</a>
                                    <a class="btn btn-primary btn-sm mt-3 col-12" href="/admin/edit-images/{{$product->id}}"><i class="bi bi-images"></i>Pridať alebo vymazať fotky</a>
                                    <form method="POST" action="/admin/{{$product->id}}" class="px-0">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm mt-3 col-12 me-2"><i class="fa fa-trash-o"></i> Odstrániť produkt</button>
                                    </form>
                                </div>
                            </div>
                        </article>
                    @endforeach
                        <div class="d-flex justify-content-center py-1">
                            {{ $products->links('pagination::bootstrap-4') }}
                        </div>
                </div>
            </section>

            <div class="col-lg-3 order-md-1 order-lg-2">
                <div class="mb-4">
                    <div class="pt-5">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Pridajte Fotku</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>

                        <form>
                            <div class="form-group mb-3">
                                <label for="name_input">Názov produktu</label>
                                <input type="text" class="form-control" id="name_input" placeholder="Názov..">
                            </div>
                            <div class="form-group mb-3">
                                <label for="value_input">Cena</label>
                                <input type="number" class="form-control" id="value_input" placeholder="Cena..">
                            </div>

                            <div class="form-group mb-3">
                                <label for="text_are_input">Popis produktu</label>
                                <textarea class="form-control" id="text_are_input" rows="3" placeholder="Popis produktu.."></textarea>
                            </div>
                        </form>
                        <button class="btn btn-success btn-sm mt-3 col-12 me-2">
                            <i class="bi bi-check-circle mb-2"></i> Pridať produkt
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

