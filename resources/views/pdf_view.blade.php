@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
           <img src="/qrcodes/{{$key}}.svg" alt="qrcode">
        </div>
    </div>
    <button class="btn btn-primary">
                                <a class="text-white" href="{{route('pdf.download')}}">
                                    Download 
                                </a>
    </button>
@endsection
