@extends('layout.app')

@section('content')
    <div class="container-fluid my-5">
        <section  class="row d-flex flex-column mx-5 px-3" style="border: 2px solid black">
            <h1 class="text-center mt-4">Fotky</h1>
            @foreach ($product->images as $image)
                <article class="p-3 my-2" style="border: 1px solid black">
                    <img style="height: 150px;" src="/img/{{$image->filename}}" alt="fotka produktu">
                </article>
            @endforeach
        </section>
    </div>
@endsection
