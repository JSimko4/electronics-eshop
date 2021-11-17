@extends('layout.app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-lg-8 mb-3 pt-4">
                <!-- pocet produktov v kosiku -->
                <div class=" mb-3 mb-md-1">
                    <img class="img-fluid w-20"
                         src="img/kosik.jpg" alt="kosik">

                </div>
                <?php $total = 0 ?>
                @if(session('cart'))
                    <h4 class="mt-4 mb-4">Počet rozlišných produktov v košiku (<?php echo count(session('cart')) ?>)</h4>
                    @foreach(session('cart') as $id => $details)
                        <?php $total += $details['product']->price * $details['quantity'] ?>
                        <hr class="mt-4 mb-4">
                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3 mb-3 mb-md-1">
                                <img class="img-fluid w-100" src="img/{{$details['product']->first_image()}}" alt="acer_nitro">
                            </div>
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h5>{{$details['product']->name}}</h5>
                                        <p>{{$details['product']->description}}</p>
                                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{$id}}"><i class="fa fa-trash-o"></i> Odstrániť z košíka</button>
                                    </div>
                                    <div>
                                        <input class="quantity w-100" min="0"  data-id="{{$id}}" name="quantity" value="{{$details['quantity']}}" type="number">
                                        <p class="mt-2 text-center">Cena za jeden: <strong>{{$details['product']->price}}€</strong></p>
                                        <p class="text-center">Cena spolu: <strong>{{$details['product']->price * $details['quantity']}}€</strong></p >
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <h5 class="mt-4 mb-4">Počet rozlišných produktov v košiku  (0)</h5>
                @endif
            </div>

            <div class="col-lg-4 mb-5 pt-5 d-flex flex-column align-items-center">
                <h5 class="mb-3 mt-3">Suma k úhrade: <?php echo $total ?>€</h5>
                <a href="{{url('transportation/' . $total)}}" class="btn btn-primary btn-block">
                    Prejsť na dopravu
                </a>
            </div>
        </div>
    </section>

    <script type="text/javascript">
        $(".quantity").change(function () {
            // ak je zadana hodnota rovna 0 tak sa produkt odstrani z kosika
            if ($(this).val() > 0) {
                $.ajax({
                    url: '{{ url('update-cart') }}',
                    method: "patch",
                    // je potrebne poslat csrf _token aby middleware vedel schvalit poziadavku
                    data: {_token: '{{ csrf_token() }}', id: $(this).attr("data-id"), quantity: $(this).val()},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
            else{
                    $.ajax({
                        url: '{{ url('remove-from-cart') }}',
                        method: "DELETE",
                        // je potrebne poslat csrf _token aby middleware vedel schvalit poziadavku
                        data: {_token: '{{ csrf_token() }}', id: $(this).attr("data-id")},
                        success: function (response) {
                            window.location.reload();
                        }
                    });
                }
            });

        $(".remove-from-cart").click(function () {
            $.ajax({
                url: '{{ url('remove-from-cart') }}',
                method: "DELETE",
                // je potrebne poslat csrf _token aby middleware vedel schvalit poziadavku
                data: {_token: '{{ csrf_token() }}', id: $(this).attr("data-id")},
                success: function (response) {
                    window.location.reload();
                }
            });
        });
    </script>
@endsection
