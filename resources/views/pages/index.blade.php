@extends('main.layout')
    @section('content')
       @include('inc.navbar')        
        <main class="mdl-layout__content">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('images/slide1.jpg')}}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset('images/slide2.jpg')}}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block w-100" src="{{asset('images/slide3.jpg')}}" alt="Second slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <h2 class="text-center mt-5 mb-10">Welcome to <label title="{{config('app.name')}}" for="OFOH" class="text-primary">OFOH</label> </h2>                  
                </div>
              </div>
                  <div class="mdl-grid animated fadeInUp">
                    <div class="container">
                      <div class="mdl-cell mdl-cell--12-col">
                          <p class="text-center">
                              <b>{{config('app.name')}}</b> is located in Butterworth by a group of prominent Christians, 
                              development workers who are committed to make a difference. The aim is to improve living conditions and acceptable 
                              social development in community. Also to foster a love of books and reading in the children and to create a thirst
                              for knowledge as we also want to have a library. My Father Orphanage Home is currently running a soup kitchen.
                              We are a family, where God’s love guides us all as we grow and expand year after year. 
                          </p>
                      </div>
                    </div>
                  </div>
            

                <div class="mdl-grid mdl-color--white pb-5">
                  <div class="container">
                      <div class="mdl-cell mdl-cell--12-col">
                          <h3 class="text-center text-primary">Our Aim is</h3>
                          <p class="text-center">
                           to improve living conditions and acceptable social development in community. We definitely believe that knowledge is power hence we aim at fostering the love 
                           of intuitive recommended books in the children to create a thirst for knowledge as we plan to have a 
                           library.
                          </p>
                          
                            </div>
                        </div>
                </div>

            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--12-col-phone">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp align-middle mdl-color--indigo-50">
                        <img src="{{asset('images/img1.jpg')}}" alt="" class="img-fluid">
                        <h3 class="text-center ml-3 mb-0 mt-0">
                            Our Orphanage                            
                        </h3>
                        
                        <div class="mdl-card__supporting-text">
                          We provide a christian spiritual journey that begins with basic honesty and leads to character development. 
                       </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <div class="center-align">
                            <a href="/contact" class="mdl-button align-middle mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            read more
                            </a>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--12-col-phone">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-color--amber">
                        <img src="{{asset('images/img.jpg')}}" alt="" class="img-fluid">
                        <h3 class="text-center ml-3 mb-0 mt-0">Our School</h3>
                        <div class="mdl-card__supporting-text">
                            We provide basic care for the needy.<br/>
                            We feed the Butterworth community.                              
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <div class="center-align">
                            <a href="/contact" class="mdl-button align-middle mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                              Support
                            </a>
                          </div>
                        </div>
                      </div>
                </div>
                
                <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--12-col-phone mb-5">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp align-middle  mdl-color--blue-50">
                        <img src="{{asset('images/img2.jpg')}}" alt="" class="img-fluid">
                        <h3 class="text-center ml-3 mb-0 mt-0">Our Mission</h3>
                        <div class="mdl-card__supporting-text">
                          Building communities by reducing street kids and crime. <br/>
                          Thereby reaching out and changing lives.
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <div class="center-align">
                            <a href="/about" class="mdl-button align-middle mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            read more
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>           
                </div>
                <div class="container mb-5">
                  <div class="card text-center">
                  <div class="card-header">
                  On going project
                  </div>
                  <div class="card-body">
                  <h5 class="card-title">
                  <b>{{config('app.name')}}</b> is currently running a soup kitchen.
                  </h5>
                  <button class="mdl-button mdl-js-button mdl-color--accent mdl-color-text--white align-middle">
                  Support
                  </button>
                  </div>
                  </div>
                  </div>
            @include('inc.footer')
        </main>
      @endsection