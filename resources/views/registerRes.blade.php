@extends('layouts.main')

@section('content')
<section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center ">
          <div class="col-md-12">
            <div class="wrapper">
              <div class="row no-gutters ">
                <div class="col-lg-6 col-md-7 order-md-last d-flex align-items-stretch">
                  <div class="contact-wrap w-100 p-md-5 p-4 ">
                    <img src="{{asset('assets/images/image 16.png')}}" style="width: inherit;" >
                   
                  </div>
                </div>

                <div class="col-lg-6 col-md-5 d-flex align-items-stretch text-center ">
                  <div class="info-wrap bg-primary w-100 p-md-5 p-4 ">
                    <h2 style=" text-align: center;  color: white;font-weight: 900; font-size: 50px;">Hello!</h2>
                    <p class="mb-4" style=" text-align: center;color: white;font-weight: 200;">Angaben zum Unternehmen/Location</p>
                    
                    <form method="POST" action="{{route('restaurant.store')}}" id="contactForm" name="contactForm" class=" ">
                    @csrf  
                    <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="firmname" id="firmname" placeholder="Firmname" style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="land" id="land" placeholder="Land" style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="state" id="state" placeholder="State" style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="plz" id="plz" placeholder="PLZ" style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="ort" id="ort" placeholder="ORT" style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input type="text" class="form-control" name="telefon" id="telefon" placeholder="Telefon" style=" border-radius: 25px;background-color: white;background-position: left top;background-repeat: repeat; width: 100%; height: 55px; border: 2px solid white;">
                          </div>
                        </div>
                        <div class="col-md-12">
                     <div class="form-group" style="margin-top:10px;">
                     <button 
                     style=" border-radius: 25px;background-color: #eb295c;background-position: left top;background-repeat: repeat; width: 200px; height: 50px; border: 2px solid #eb295c;color: white;">
                    Weiter
                </button>
                     </div>
                  </div>
                       
                       
                        
                      </div>
                    </form>
                     
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection
@section('footer')
<footer class="footer">
      <div class="container-fluid px-lg-5">
        <div class="row">
          <div class="col-md-9 py-5">
            <div class="row">
              <div class="col-md-4 mb-md-0 mb-4">
                <h2 class="footer-heading">Powered by tiplify - das bargelslose Trinkgeld </h2>
                
                
              </div>
              
            </div>
            
          </div>
          <div class="col-md-3 py-md-5 py-4 aside-stretch-right pl-lg-5">
            <h2 class="footer-heading">AGB | Datenschutz | Impressum</h2>
            
          </div>
        </div>
      </div>
    </footer>
@endsection
