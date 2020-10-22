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
                                        <input id="firmname" type="text" class="form-control @error('firmname') is-invalid @enderror  " name="firmname"
                                               value="{{old('firmname')}}" autofocus>
                                        @error('firmname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="land"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Land') }}</label>
                                    <div class="col-md-6">
                                        <input id="land" type="text" class="form-control @error('land') is-invalid @enderror " name="land"
                                               value="{{old('land')}}">
                                        @error('land')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="state"
                                           class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                                    <div class="col-md-6">
                                        <input id="state" type="text" class="form-control @error('state') is-invalid @enderror  " name="state"
                                               value="{{old('state')}}" autofocus>
                                        @error('state')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="plz"
                                           class="col-md-4 col-form-label text-md-right">{{ __('PLZ') }}</label>

                                    <div class="col-md-6">
                                        <input id="plz" type="text" class="form-control @error('plz') is-invalid @enderror  " name="plz"
                                               value="{{old('plz')}}" autofocus>
                                        @error('plz')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="ort"
                                           class="col-md-4 col-form-label text-md-right">{{ __('ORT') }}</label>
                                    <div class="col-md-6">
                                        <input id="ort" type="text" class="form-control @error('ort') is-invalid @enderror  " name="ort"
                                               value="{{old('ort')}}" autofocus>
                                        @error('ort')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telefon"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Telefon') }}</label>

                                    <div class="col-md-6">
                                        <input id="telefon" type="text" class="form-control @error('telefon') is-invalid @enderror  " name="telefon"
                                               value="{{old('telefon')}}" autofocus>
                                        @error('telefon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
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
