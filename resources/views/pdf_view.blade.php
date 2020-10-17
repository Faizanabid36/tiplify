@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-left" style="width:100%">
           <img src="{{asset('/images/1.PNG')}}" alt="qrcode">
        </div>
        <div class="row justify-content" >
        <div style="background-color:white">
        <h1 style="margin-left:80px">{{$user->restaurant->firmname}}</h1>
        <img src="/qrcodes/{{$user->restaurant->unique_key}}.svg" style="margin-left:50px" width="150px" height="200px" alt="qrcode">
        </div>
       
        <img src="{{asset('/images/2.PNG')}}" alt="qrcode" style="width:63%" >
           
        </div>
        <div class="row justify-content ">
        <button class="btn btn-primary ">
        <a class="text-white" href="{{route('pdf.download')}}">
            Download 
         </a>
    </button>
        </div>
    </div>
    
@endsection
