@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{route('restaurant.store')}}">
                            @csrf
                            <div id="form-restaurant">
                                <div class="form-group row">
                                    <label for="firmname"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Firm Name') }}</label>
                                    <div class="col-md-6">
                                        <input id="firmname" type="text"
                                               class="form-control"
                                               name="firmname"
                                               value="{{old('firmname')}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="land"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Land') }}</label>
                                    <div class="col-md-6">
                                        <input id="land" type="text"
                                               class="form-control" name="land"
                                               value="{{old('land')}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="state"
                                           class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                                    <div class="col-md-6">
                                        <input id="state" type="text"
                                               class="form-control" name="state"
                                               value="{{old('state')}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="plz"
                                           class="col-md-4 col-form-label text-md-right">{{ __('PLZ') }}</label>

                                    <div class="col-md-6">
                                        <input id="plz" type="text"
                                               class="form-control" name="plz"
                                               value="{{old('plz')}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ort"
                                           class="col-md-4 col-form-label text-md-right">{{ __('ORT') }}</label>
                                    <div class="col-md-6">
                                        <input id="ort" type="text"
                                               class="form-control" name="ort"
                                               value="{{old('ort')}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telefon"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Telefon') }}</label>

                                    <div class="col-md-6">
                                        <input id="telefon" type="text"
                                               class="form-control"
                                               name="telefon"
                                               value="{{old('telefon')}}" autofocus>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                                <!-- </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
