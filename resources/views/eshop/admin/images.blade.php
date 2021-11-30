@extends('layout.app')

@section('content')
    <div class="container-fluid my-5">
        <section class="row mx-5 px-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Fotka/y sa nepodarilo pridať!</strong>
                </div>
            @endif

            <h1 class="text-center mt-2 mb-4">Pridať ďalšie fotky</h1>
            <form method="post" action="/admin/edit-images/{{$product->id}}/add" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="input-group increment" >
                    <input type="file" name="images[]" class="form-control">
                    <button id="images" class="btn btn-success btn-add-img" type="button">Ďalšie</button>
                </div>
                <div class="clone hide">
                    <div class="control-group lst input-group mt-2">
                        <input type="file" name="images[]" class="form-control">
                        <button class="btn btn-danger btn-remove-img" type="button">Odstrániť</button>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-sm col-3 mb-4 w-100" href="">
                    <i class="bi bi-images me-2"></i>Pridať fotky
                </button>
            </form>
        </section>

        <section class="row d-flex flex-column align-items-center mx-5 px-3">
            <h1 class="text-center mt-4">Fotky</h1>
            @if (count($product->images) > 0)
                @foreach ($product->images as $image)
                    <article class="p-3 my-2 d-flex justify-content-around" style="border: 2px solid black">
                        <img class="col-3" style="height: 150px;" src="/img/{{$image->filename}}" alt="fotka produktu">
                        <div class="col-5 d-flex justify-content-center align-items-center">
                            <form method="POST" action="/admin/edit-images/{{$image->id}}/remove" class="w-100">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mt-3 me-2 w-100"><i class="fa fa-trash-o"></i> Odstrániť fotku</button>
                            </form>
                        </div>
                    </article>
                @endforeach
            @else
                <h4 class="text-center mt-4">K danému produktu nie sú žiadne fotky.</h4>
            @endif
        </section>
    </div>

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
