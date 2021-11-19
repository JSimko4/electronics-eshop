@extends('layout.app')

@section('content')
    <div class="container-fluid my-5">
        <section  class="row d-flex flex-column align-items-center mx-5 px-3">
            <h1 class="text-center mt-4">Fotky</h1>
            <a class="btn btn-success btn-sm col-3 mb-4 mt-2" href=""><i class="bi bi-images me-2"></i>Pridať ďalšie fotky</a>
        @foreach ($product->images as $image)
                <article class="p-3 my-2 d-flex justify-content-around" style="border: 2px solid black">
                    <img class="col-3" style="height: 150px;" src="/img/{{$image->filename}}" alt="fotka produktu">
                    <div class="col-7 d-flex justify-content-center align-items-center">
                        <a class="btn btn-secondary btn-sm mt-3 col-3 mx-5" href=""><i class="bi bi-pencil-square"></i> Upraviť</a>
                        <a class="btn btn-danger btn-sm mt-3 col-3" href=""><i class="fa fa-trash-o"></i>Odstrániť</a>
                    </div>
                </article>
            @endforeach
        </section>
    </div>
@endsection
