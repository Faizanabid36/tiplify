@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                    <p>
                        Use the link to fill the form:
                        <br>
                            <img src="{{$user->qr_code_path}}" alt="QRCode" width="200px" height="200px">
                            <br>
                        <a href="{{route('corona_form.view',$user->restaurant->unique_key)}}">
                            {{route('corona_form.view',$user->restaurant->unique_key)}}
                        </a>
                        <p>
                            <button class="btn btn-primary">
                                <a class="text-white" href="{{route('download.xlsx')}}">
                                    Download Excel Sheet
                                </a>
                            </button>
                            <button class="btn btn-primary">
                                <a class="text-white" href="{{route('pdf.download')}}">
                                    Download PDF
                                </a>
                            </button>
                        </p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
