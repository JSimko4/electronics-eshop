@extends('layout.app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="mb-3">
                    <div class="pt-4 ">
                        <!-- pocet produktov v kosiku -->
                        <div class=" mb-3 mb-md-1">
                            <img class="img-fluid w-20"
                                 src="img/kosik.jpg" alt="kosik">

                        </div>
                        <h5 class="mt-4 mb-4">Počet produktov v košiku  (<span>2</span> )</h5>

                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3 mb-3 mb-md-1">

                                <img class="img-fluid w-100"
                                     src="img/acer_nitro.jpg" alt="acer_nitro">

                            </div>

                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5>Acer nitro 5 </h5><!--https://www.google.com/search?q=acer+nitro+5&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjR14W-oPrzAhWM_bsIHbPHBTMQ_AUoAXoECAEQAw&biw=960&bih=968#imgrc=lQvfPB0n6VO_QM -->
                                            <p >500 Gb SSD verzia</p>

                                        </div>

                                        <div>
                                            <div class="w-100">

                                                <input class="quantity" min="0" name="quantity" value="1" type="number">

                                            </div>

                                        </div>
                                    </div>
                                    <!-- odstranenie z boostrap stranky -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <a href="#!"  class="card-link-secondary small text-uppercase mr-3"><i
                                                    class="fas fa-trash-alt mr-1"></i> Odstraniť z košika </a>

                                        </div>
                                        <p class="mb-1"><span><strong >999.99€</strong></span></p >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="row mb-4">
                            <div class="col-md-5 col-lg-3 col-xl-3 mb-3 mb-md-1">

                                <img class="img-fluid w-100"
                                     src="img/acer_nitro.jpg" alt="acer_nitro">

                            </div>

                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <h5>Acer nitro 5 </h5><!--https://www.google.com/search?q=acer+nitro+5&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjR14W-oPrzAhWM_bsIHbPHBTMQ_AUoAXoECAEQAw&biw=960&bih=968#imgrc=lQvfPB0n6VO_QM -->
                                            <p >500 Gb SSD verzia</p>

                                        </div>

                                        <div>
                                            <div class="w-100">

                                                <input class="quantity" min="0" name="quantity" value="1" type="number">

                                            </div>

                                        </div>
                                    </div>
                                    <!-- odstranenie z boostrap stranky -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <a href="#!" class="card-link-secondary small text-uppercase mr-3"><i
                                                    class="fas fa-trash-alt mr-1"></i> Odstraniť z košika </a>
                                        </div>
                                        <p class="mb-1"><span><strong >999.99€</strong></span></p >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 mb-5 pt-5 d-flex flex-column align-items-center">
                <h5 class="mb-3 mt-3">Suma k úhrade: 1999.98 €</h5>
                <a href="transportation" class="btn btn-primary btn-block">
                    Prejsť na dopravu
                </a>
            </div>
        </div>
    </section>
@endsection
