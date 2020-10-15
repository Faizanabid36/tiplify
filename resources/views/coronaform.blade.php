@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div >{{ $model->firmname }}</div>
            <div class="card">
                <div class="card-header">{{ __('Corona Form') }}</div>

                <div class="card-body">
                    <form method="POST" action="/restaurant">
                        @csrf
                        <div id="form_part1">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control " name="name" value=""  autocomplete="name" autofocus>

                               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vorname" class="col-md-4 col-form-label text-md-right">{{ __('Vorname') }}</label>

                            <div class="col-md-6">
                                <input id="vorname" type="text" class="form-control" name="vorname" value=""  >

                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="telefon" class="col-md-4 col-form-label text-md-right">{{ __('Telefon') }}</label>

                            <div class="col-md-6">
                                <input id="telefon" type="text" class="form-control " name="telefon" value=""  autocomplete="name" autofocus>

                                
                            </div>
                        </div>


                        
                        <div class="form-group row mb-0">
                        <!-- <div class="col-md-6 offset-md-4">
                                
                                <button id="btn_next" type="button" class="btn btn-primary">
                                    {{ __('Next') }}
                                </button>
                            </div>
                            
                        </div>
                        <br> -->
                        </div>
                        <!-- <div id="form_part2" hidden> -->
                       
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <!-- <button id="btn_prev" type="button" class="btn btn-primary">
                                    {{ __('Previous') }}
                                </button> -->
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Senden') }}
                                </button>
                            </div>
                        </div>
                        <!-- </div> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
