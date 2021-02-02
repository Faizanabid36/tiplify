@extends('layouts.main')
@section('content')
    {{--    <section class="ftco-section bg-light">--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div id="accordion" class="myaccordion rounded">
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
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fas fa-plus fa-stack-1x fa-inverse"></i>
                                    </span>
                                </button>
                            </h2>
                        </div>
                        <div id="collapseZero" class="collapse" aria-labelledby="headingZero"
                             data-parent="#accordion">
                            <div class="card-body">
                                <p>
                                    <span class="text-dark">Problem:</span>
                                <ul>
                                    <li><b class="text-dark">Background</b> COVID has effected not only small but
                                        large businesses too including restaurants. People start rushing into
                                        restaurants at different times and crowd throngs the restaurants which is then
                                        difficult for restaurants to manage, especially in COVID times. The policy
                                        is that restaurants cannot gather huge crowds because they have to maintain
                                        social distancing to avoid any contact between customers. The exposure risk is
                                        high when restaurants are overly crowded.
                                    </li>
                                    <li><b class="text-dark">Solution</b>
                                        The solution is that restaurants have to register on the website and then will
                                        be provided with a form. The form is for the guests to fill in their details,
                                        After this, the customer will see a screen of at what time he filled the
                                        form and will also receive an email. Customers have to show this screen/email
                                        to the staff of the restaurant so that they can book a table for
                                        themselves. By filling out this form the restaurant will also have the details
                                        of their guest lists. . It will be easy for the staff to manage the customers
                                        and provide them with their best services as they will not have to handle all
                                        the throng.
                                    </li>
                                </ul>
                                </p>
                                <p>
                                    <span class="text-dark">Getting Started:</span>
                                <ul>
                                    <li><b><i class="text-dark">If you are Restaurant Owner</i></b> you require a portal
                                        for hotel dine in
                                        reservation, you have sample prototypes that how your website will be working.
                                        All you have to do is to check if prototypes meet all the requirement.
                                    </li>
                                    <li><b class="text-dark"><i>If you are Regular Customer</i></b> Imagine you are user
                                        and need to reserve
                                        dine in. You need check that prototypes meet all the requirement of reservation
                                        form.
                                    </li>
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
                                    aria-controls="collapseOne"
                                    style="font-size: 18px"
                                >
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
                                    Name of our application is <span class="text-dark"><u>Corona Form</u></span><br>
                                </p>
                                <a target="_blank" href="{{route('home')}}" class="btn-link">
                                    <u><b>Click here</b></u>
                                </a>to navigate to the main site
                                <hr>
                                <p class="text-dark">Credentials:</p>
                                <ul>
                                    <li><b>You can start the registration process </b>
                                        <a href="{{route('restaurant')}}" target="_blank" class="text-primary"><b>
                                                here:</b>
                                        </a>
                                    </li>
                                    <li><b>Or use the below credentials on </b>
                                        <a href="{{route('login')}}" target="_blank" class="text-primary"><b>
                                                Login Screen:</b>
                                        </a>
                                    </li>
                                </ul>
                                <span class="text-dark font-weight-bold">Email: </span> Faizanabid36@gmail.com<br>
                                <span class="text-dark font-weight-bold">Password: </span> 123123123
                                <hr>
                                <p style="font-size: 18px; margin-top:15px">
                                    The below Link Contains The Overall Project Knowledge.
                                <ul>
                                    <li><b><i class="text-dark">Project Knowledge: </i></b>
                                        <a href="{{asset('docs/PROJECT_KNOWLEDGE.docx')}}" class="text-primary"><b>
                                                Download</b>
                                        </a>
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button
                                    class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    style="font-size: 18px"
                                    aria-controls="collapseTwo">
                                    Assignment Documents
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
                                <p class="page-link">
                                    <a href="{{asset('docs/introduction.pdf')}}" download class="text-dark"> 1. Introduction</a>
                                </p>
                                <p class="page-link">
                                    <a href="{{asset('docs/task_n_user_analysis.pdf')}}" download class="text-dark"> 2. Task & User Analysis</a>
                                </p>
                                <p class="page-link">
                                    <a href="{{asset('docs/conceptual_design.pdf')}}" download class="text-dark"> 3. Conceptual Design</a>
                                </p>
                                <p class="page-link">
                                    <a href="{{asset('docs/design_sketches.pdf')}}" download class="text-dark"> 4. Design Sketches</a>
                                </p>
                                <p class="page-link">
                                    <a href="{{asset('docs/prototyping.pdf')}}" download class="text-dark"> 5. Prototyping</a>
                                </p>
                                <p class="page-link">
                                    <a href="{{asset('docs/heuristic_evaluation.pdf')}}" download class="text-dark"> 6. Heuristic Evaluation</a>
                                </p>
                                <p class="page-link">
                                    <a href="{{asset('docs/user_testing.pdf')}}" download class="text-dark"> 7. User Testing</a>
                                </p>
                                <p class="page-link">
                                    <a href="{{asset('docs/team_roles.pdf')}}" download class="text-dark"> 8. Team Roles</a>
                                </p>
                                <p class="page-link">
                                    <a href="{{asset('docs/final_report.pdf')}}" download class="text-dark"> 9. Final Report</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button
                                    class="d-flex align-items-center justify-content-between btn btn-link collapsed"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    style="font-size: 18px"
                                    aria-controls="collapseThree">
                                    Teams Members
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row"
                                             style="width: 100%;margin: 0 auto;box-shadow: 0 0 10px rgba(0,0,0,0.2);border-radius: 10px">
                                            <div style="margin-left: 25px">
                                                <h2>Riffat Siddiqui</h2>
                                                <span><strong class="text-dark">Roll No: </strong>17B-44-SE</span><br>
                                                <span><strong class="text-dark">Email: </strong> 17b-044-se@students.uit.edu
                                                </span>
                                                <p>
                                                    <span class="badge text-white bg-primary">Project Manager</span>
                                                    <span class="badge text-white bg-info">Designer</span>
                                                    <br>
                                                    <span class="badge text-white bg-warning">Software Engineer</span>
                                                    <span class="badge text-white bg-success">Architect</span>
                                                </p>
                                            </div>
                                            <div style="float:right">
                                                <img class="btn-md"
                                                     width="150"
                                                     src="https://michaelrowek.com/wp-content/uploads/default.gif"
                                                     style="border-radius:50%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row"
                                             style="width: 100%;margin: 0 auto;box-shadow: 0 0 10px rgba(0,0,0,0.2);border-radius: 10px">
                                            <div style="margin-left: 25px">
                                                <h2>Faizan Abid</h2>
                                                <span><strong class="text-dark">Roll No: </strong>17B-57-SE</span><br>
                                                <span><strong class="text-dark">Email: </strong> 17b-057-se@students.uit.edu
                                                </span>
                                                <p>
                                                    <span class="badge text-white bg-danger">Project Manager</span>
                                                    <span class="badge text-white bg-dark">Designer</span>
                                                    <br>
                                                    <span class="badge text-white bg-info">Software Engineer</span>
                                                    <span class="badge text-white bg-success">Test Engineer</span>
                                                </p>
                                            </div>
                                            <div class="float-right">
                                                <img class="btn-md"
                                                     width="150"
                                                     src="https://uoch.edu.pk/wp-content/uploads/2017/11/default-male-photo.png"
                                                     style="border-radius:50%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <div class="row"
                                             style="width: 100%;margin: 0 auto;box-shadow: 0 0 10px rgba(0,0,0,0.2);border-radius: 10px">
                                            <div style="margin-left: 25px">
                                                <h2>Ibad Hashmi</h2>
                                                <span><strong class="text-dark">Roll No: </strong>17B-22-SE</span><br>
                                                <span><strong class="text-dark">Email: </strong> 17b-022-se@students.uit.edu
                                                </span>
                                                <p>
                                                    <span class="badge text-white bg-info">Software Engineer</span>
                                                    <span class="badge text-white bg-warning">Test Engineer</span>
                                                    <br>
                                                    <span class="badge text-white bg-danger">Architect</span>
                                                </p>
                                            </div>
                                            <div class="float-right">
                                                <img class="btn-md"
                                                     width="150"
                                                     src="https://uoch.edu.pk/wp-content/uploads/2017/11/default-male-photo.png"
                                                     style="border-radius:50%;">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <div class="row"
                                             style="width: 100%;margin: 0 auto;box-shadow: 0 0 10px rgba(0,0,0,0.2);border-radius: 10px">
                                            <div style="margin-left: 25px">
                                                <h2>Komal Tahir</h2>
                                                <span><strong class="text-dark">Roll No: </strong>17B-31-SE</span><br>
                                                <span><strong class="text-dark">Email: </strong> 17b-031-se@students.uit.edu
                                                </span>
                                                <p>
                                                    <span class="badge text-white bg-warning">Business Analyst</span>
                                                    <span class="badge text-white bg-dark">Architect</span>
                                                    <br>
                                                    <span class="badge text-white bg-success">Designer</span>
                                                    <span class="badge text-white bg-info">Test Engineer</span>
                                                </p>
                                            </div>
                                            <div class="float-right">
                                                <img class="btn-md"
                                                     width="150"
                                                     src="https://michaelrowek.com/wp-content/uploads/default.gif"
                                                     style="border-radius:50%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

