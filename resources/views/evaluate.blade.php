@extends('layouts.main')
@section('content')
    {{--    <section class="ftco-section bg-light">--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div id="accordion" class="myaccordion">
                    <div class="card">
                        <div class="card-header" id="headingZero">
                            <h2 class="mb-0">
                                <button
                                    class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                    data-toggle="collapse" data-target="#collapseZero" aria-expanded="false"
                                    aria-controls="collapseZero"
                                    style="font-size: 18px"
                                >
                                    Startup Instructions
                                    <span class="fa-stack fa-sm">
{{--                                        <i class="fas fa-circle fa-stack-2x"></i>--}}
                                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseZero" class="active collapse show" aria-labelledby="headingZero"
                             data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    Getting Started:
                                <ul>
                                    <li><b><i>If you are Restaurant Owner</i></b> you require a portal for hotel dine in
                                        reservation, you have sample prototypes that how your website will be working.
                                        All you have to do is to check if prototypes meet all the requirement.
                                    </li>
                                    <li><b>If you are Regular Customer</b> Imagine you are user and need to reserve
                                        dine in. You need check that prototypes meet all the requirement of reservation
                                        form.
                                    </li>
                                </ul>
                                </p>
                                <p>
                                    The System specifications are:
                                <ul>
                                    <li><b><i>Server:</i></b> AWS</li>
                                    <li><b><i>Database:</i></b> MySQL</li>
                                    <li><b><i>Browsers Supported:</i></b> Chrome, Mozilla, IE, Safari</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingZero">
                            <h2 class="mb-0">
                                <button
                                    class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                    data-toggle="collapse" data-target="#collapseOne" aria-expanded="false"
                                    aria-controls="collapseOne">
                                    Prototype Link
                                    <span class="fa-stack fa-sm">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    The below Button contains the URL of the Prototypes.
                                </p>
                                <button class="btn btn-sm btn-secondary rounded" style="height: 55px">
                                    <a href="{{route('home')}}" class="text-white">View Prototypes</a>
                                </button>
                                <p>
                                    The below Link Contains The Overall Project Knowledge.
                                </p>
                                <ul>
                                    <li><b><i>Project Knowledge: </i></b><a href="{{route('home')}}"
                                                                            class="text-primary"><b> Download</b></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button
                                    class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    User Analysis and Task Analysis
                                    <span class="fa-stack fa-2x">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                             data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li><b>User Analysis: </b>
                                        <a href="" download=""> Download</a>
                                    </li>
                                    <li><b>Task Analysis: </b>
                                        <a href="" download=""> Download</a>
                                    </li>
                                    {{--                                    <li><b>Task Scenarios: </b>--}}
                                    {{--                                        <a href="" download=""> Download</a>--}}
                                    {{--                                    </li>--}}

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button
                                    class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Teams roles and tasks
                                    <span class="fa-stack fa-2x">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                             data-parent="#accordion">
                            <div class="card-body">
                                <ul>
                                    <li><b><i> Ibad Hassan Hashmi</i></b></li>
                                    <li><b><i> Riffat Siddiqui</i></b></li>
                                    <li><b><i> Faizan Abid</i></b></li>
                                    <li><b><i> Komal Tahir</i></b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

