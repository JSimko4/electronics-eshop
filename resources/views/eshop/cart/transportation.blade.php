@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row  ">
            <div class="col-lg-8">
                <div class="mb-3">
                    <div class="pt-4 ">
                        <!-- pocet produktov v kosiku -->
                        <div class=" mb-3 mb-md-1">
                            <img class="img-fluid w-20" src="/img/doprava.png" alt="doprava">
                        </div>

                        <img class=" img w-1" src="/img/tranport_uvod.jpg" alt="doprava">
                        <div class="row mb-4">
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                    <label class="w-100">
                                        Zvoľte spôsob dopravy
                                        <select class="form-select form-select-lg mb-3" >
                                            <optgroup label="Zvoľte spôsob dopravy"></optgroup>
                                            <option value="1">Sloveska pošta + 2.99€ (doručenie do 3-4 dni)</option>
                                            <option value="2">DHL-expresná doprava + 4€ (doručenie do 2 dní)</option>
                                        </select>
                                    </label>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-7 col-lg-9 col-xl-9">
                                <label class="w-100">
                                    Zvoľte spôsob platby
                                    <select class="form-select form-select-lg mb-3" >
                                        <optgroup label="Zvoľte spôsob platby"></optgroup>
                                        <option value="1">Dobierkou</option>
                                        <option value="2">Platba kartou</option>
                                        <option value="3">Prevodom na účet</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center">
            <div class="col-10 mb-3">
                <a href="/cart" class="btn btn-secondary btn-block">Vrátit sa naspäť do košika</a>
                <a href="/cart/delivery" class="btn btn-primary btn-block">Pokračovať</a>
            </div>
        </div>
    </div>
@endsection
