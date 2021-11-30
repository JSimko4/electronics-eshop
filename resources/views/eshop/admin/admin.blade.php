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

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Produkt nebol pridaný!</strong>
                                <br> <br>
                                Skontrolujte či ste zadali správny názov, cenu a popis produktu.
                                <br>
                                Na úspešne pridanie produktu je nutné nahrať minimálne 1 fotku.
                            </div>
                        @endif

                        <form method="post" action="/admin/add" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group mb-3">
                                <label for="name_input">Názov produktu</label>
                                <input type="text" class="form-control" id="name_input" name="name" placeholder="Názov..">
                            </div>

                            <div class="form-group mb-3">
                                <label for="category">Kategória</label>
                                <select class="form-select input-sm" name="category" id="category">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="category">Podkategória</label>
                                <select class="form-select input-sm" name="subcategory" id="category">
                                    @foreach($subcategories as $subcategory)
                                        <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="category">Farba</label>
                                <select class="form-select input-sm" name="color" id="category">
                                    @foreach($colors as $color)
                                        <option value="{{$color->id}}">{{$color->color}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="category">Veľkosť pamäte (GB)</label>
                                <select class="form-select input-sm" name="memory" id="category">
                                    @foreach($memories as $memory)
                                        <option value="{{$memory->id}}">{{$memory->memory}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="value_input">Cena</label>
                                <input type="number" class="form-control" id="value_input" name="price" placeholder="Cena..">
                            </div>

                            <div class="form-group mb-3">
                                <label for="text_are_input">Popis produktu</label>
                                <textarea class="form-control" id="text_are_input" name="description" rows="3" placeholder="Popis produktu.."></textarea>
                            </div>

                            <label for="formFile" class="form-label">Pridať fotky</label>
                            <div class="input-group increment" >
                                <input type="file" name="images[]" class="form-control">
                                <button class="btn btn-success btn-add-img" type="button">Ďalšie</button>
                            </div>
                            <div class="clone hide">
                                <div class="control-group lst input-group mt-2">
                                    <input type="file" name="images[]" class="form-control">
                                    <button class="btn btn-danger btn-remove-img" type="button">Odstrániť</button>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm col-12 me-2">
                                <i class="bi bi-check-circle mb-2"></i> Pridať produkt
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-add-img").click(function(){
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });
            $("body").on("click",".btn-remove-img",function(){
                $(this).parents(".control-group").remove();
            });
        });
    </script>
@endsection

