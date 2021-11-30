@extends('layout.app')

@section('content')
    <section class="my-5 d-flex justify-content-center align-items-center">
        <form class="col-9" method="GET" action="/admin/{{$product->id}}/edit">
            {{ csrf_field() }}
            <div class="form-group mb-3">
                <label for="name_input">Názov produktu</label>
                <input type="text" class="form-control" id="name_input" value="{{$product->name}}" name="name">
            </div>

            <div class="form-group mb-3">
                <label for="color">Farba</label>
                <select class="form-select input-sm" name="color" id="color">
                    <option value="{{$product->color_id}}">Ponechať pôvodnu farbu ({{$product->color->color}})</option>
                    @foreach($colors as $color)
                        <option value="{{$color->id}}">{{$color->color}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="category">Veľkosť pamäte (GB)</label>
                <select class="form-select input-sm" name="memory" id="category">
                    <option value="{{$product->memory_id}}">Ponechať pôvodnu veľkosť pamäte ({{$product->memory->memory}}GB)</option>
                    @foreach($memories as $memory)
                        <option value="{{$memory->id}}">{{$memory->memory}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-3">
                <label for="value_input">Cena</label>
                <input type="number" class="form-control" id="value_input" min="0" value="{{$product->price}}" name="price">
            </div>

            <div class="form-group mb-3">
                <label for="text_are_input">Popis produktu</label>
                <textarea class="form-control" id="text_are_input" rows="6" name="description">{{$product->description}}</textarea>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-sm mt-3 col-6">
                    <i class="bi bi-check-circle mb-2"></i> Upravit produkt
                </button>
            </div>
        </form>
    </section>
@endsection

