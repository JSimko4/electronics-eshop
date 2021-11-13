@extends('layout.app')

@section('content')
    <section class="container">


        <div class="row">


            <div class="col-lg-8">


                <div class="mb-3">
                    <div class="pt-4 ">

                        <h5 class="mt-4 mb-4">Zoznam všetkých produktov na stránke (<span>2</span> )</h5>

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


                                    </div>
                                    <!-- odstranenie z boostrap stranky -->
                                    <div class="container d-flex justify-content-between align-items-center">
                                        <div class="row">
                                            <a href="#!"  class="card-link-secondary small text-uppercase mr-3"><i
                                                    class="fas fa-trash-alt mr-1"></i> Odstraniť  produkt </a>
                                            <a href="#!"  class="card-link-secondary small text-uppercase mr-3"><i
                                                    class="fas fa-trash-alt mr-1"></i> Zmenit fotku </a>
                                            <a href="#!"  class="card-link-secondary small text-uppercase mr-3"><i
                                                    class="fas fa-trash-alt mr-1"></i> Zmenit cenu </a>
                                            <a href="#!"  class="card-link-secondary small text-uppercase mr-3"><i
                                                    class="fas fa-trash-alt mr-1"></i> Upraviť popis </a>
                                        </div>

                                        <p class="mb-1"><span><strong >12.99€</strong></span></p >
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


                                    </div>
                                    <!-- odstranenie z boostrap stranky -->
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="row">
                                            <a href="#!"  class="card-link-secondary small text-uppercase mr-3"><i
                                                    class="fas fa-trash-alt mr-1"></i> Odstraniť  produkt </a>
                                            <a href="#!"  class="card-link-secondary small text-uppercase mr-3"><i
                                                    class="fas fa-trash-alt mr-1"></i> Zmenit fotku </a>
                                            <a href="#!"  class="card-link-secondary small text-uppercase mr-3"><i
                                                    class="fas fa-trash-alt mr-1"></i> Zmenit cenu </a>
                                            <a href="#!"  class="card-link-secondary small text-uppercase mr-3"><i
                                                    class="fas fa-trash-alt mr-1"></i> Upraviť popis </a>
                                        </div>
                                        <p class="mb-1"><span><strong >12.99€</strong></span></p >
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
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

