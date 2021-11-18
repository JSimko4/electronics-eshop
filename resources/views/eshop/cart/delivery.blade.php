@extends('layout.app')

@section('content')

    <section class="bg-image register-width  register-width1 container-fluid" >
        <div class="row">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="col-md-6 d-flex justify-content-ceneter flex-column align-items-center me-2">
                <div class="  mb-3 mb-md-1"><img class="img-fluid w-20" src="/img/dodacie_udaje.jpg" alt="dodacie_udaje"></div>
                <h4 class="my-2"><strong>Celková suma je {{$total}}€</strong></h4>
            </div>

            <div class="col-md-6">
                <div class="row d-flex justify-content-center align-items-center pt-2">
                    <div class="col-12 col-md-10 col-lg-10 col-xl-8">
                        <div class="card">
                            <div class="card-body p-5">

                                <form>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="name_input1">Meno</label>
                                        <input type="text" id="name_input1" class="form-control form-control-lg" />

                                    </div>


        <section class="bg-image register-width  register-width1 container-fluid">
            <form method="POST" action="{{ route('validate_delivery') }}" class="py-3 p-5">
                @csrf
                @if ($success)
                    <div class="alert alert-success">
                        Ste si objednali uspešne
                    </div>
                @endif
            <div class="row">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <div class="col-md-6 d-flex justify-content-ceneter flex-column align-items-center me-2">
                    <div class="  mb-3 mb-md-1"><img class="img-fluid w-20" src="/img/dodacie_udaje.jpg"
                                                     alt="dodacie_udaje"></div>
                    <h4 class="my-2"><strong>Celková suma je {{$total}}€</strong></h4>
                </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email_input1">E-mail</label>
                                        <input type="text" id="email_input1" class="form-control form-control-lg" />



                <div class="col-md-6">
                    <div class="row d-flex justify-content-center align-items-center pt-2">
                        <div class="col-12 col-md-10 col-lg-10 col-xl-8">
                            <div class="card">
                                <div class="card-body p-5">



                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="name_input">Meno </label>
                                            <input type="text"  name ="name" class="form-control  @error('name') is-invalid @enderror form-control-lg" id ="name"  required>
                                            @error('name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="surname">Priezvisko</label>
                                            <input type="text" name ="surname" id="surname" class="form-control  @error('surname') is-invalid @enderror form-control-lg" required>
                                            @error('surname')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror

                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="email">E-mail</label>
                                            <input type="email" name="email" id="email" class="form-control  @error('email') is-invalid @enderror form-control-lg" required>
                                            @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="telephone_number">Telefónne číslo</label>
                                            <input type="text" id="telephone_number" name="telephone_number"
                                                   class="form-control  @error('telephone_number') is-invalid @enderror  form-control-lg"required>
                                            @error('telephone_number')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 ">
                    <div class="row d-flex justify-content-center align-items-center pt-2 ">
                        <div class="col-12 col-md-10 col-lg-10 col-xl-8">
                            <div class="card">
                                <div class="card-body p-5">

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="street">Ulica </label>
                                            <input type="text" id="street" name="street" class="form-control  @error('street') is-invalid @enderror form-control-lg"required>
                                            @error('street')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="town">Názov obce</label>

                                            <input type="text" id="town" name="town"class="form-control  @error('town') is-invalid @enderror form-control-lg " required>
                                            @error('town')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="psc">PSC</label>
                                            <input type="text" id="psc" name="psc"
                                                   class="form-control  @error('psc') is-invalid @enderror form-control-lg " required>
                                            @error('psc')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <div class="form-check d-flex justify-content-center mb-5">

                                           <p>
                                               Zaplatením súhlasíte so všetkými zmluvnými podmienkami
                                           </p>
                                        </div>

                                        <div
                                            class=" container d-flex flex-column justify-content-between align-items-between col-10 ">
                                            <button type="submit" class=" btn btn-primary btn-block mt-2">Zaplatiť</button>
                                            <a href="transportation" class="btn btn-secondary btn-block mt-2">Vrátiť sa
                                                na dopravu</a>
                                        </div>

                                </div>

            <div class="col-md-6 ">
                <div class="row d-flex justify-content-center align-items-center pt-2 ">
                    <div class="col-12 col-md-10 col-lg-10 col-xl-8">
                        <div class="card">
                            <div class="card-body p-5">
                                <form>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="name_input">Ulica a č. domu</label>
                                        <input type="text" id="name_input" class="form-control form-control-lg" />

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="surname_input">Názov obce</label>

                                        <input type="text" id="surname_input" class="form-control form-control-lg" />

                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="username_input">PSČ</label>
                                        <input type="text" id="username_input" class="form-control form-control-lg" />

                                    </div>


                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="conditions_input"/>
                                        <label class="form-check-label" for="conditions_input" >
                                            Súhlasím s obchodnými <a href="/business_conditions">podmienkami</a>.
                                        </label>
                                    </div>

                                    <div class=" container d-flex flex-column justify-content-between align-items-between col-10 ">
                                        <a href="/" class=" btn btn-primary btn-block mt-2">Zaplatiť</a>
                                        <a href="/cart/transportation" class="btn btn-secondary btn-block mt-2">Vrátiť sa na dopravu</a>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </form>
        </section>

@endsection
