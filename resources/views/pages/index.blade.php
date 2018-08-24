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
              <div class="container">
                  <div class="mdl-grid animated fadeInUp">
                      <div class="mdl-cell mdl-cell--12-col">
                            <p class="text-center">
                                In the heart of every child is a hunger for home. Not just for food and a place to sleep, but for
                                safety and community. Most importantly: for love. At <label for="OFOH" title="{{config('app.name')}}">OFOH</label> , 
                                in the town of butterworth, we are much more than a home for unwanted Indian 
                                orphans.
                            </p>
                            <p class="text-center">
                                We are a family, where God’s love guides us all as we grow and expand year after year. Not just
                                an Indian orphanage, we are a nearly self-sustaining organization; a working farm, a vibrant
                                school, receiving no government assistance of any kind. Take a look around and if you have 
                                any questions just get in contact with us via the menu above!                        
                            </p>
                      </div>
                  </div>
              </div>
            
              
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--12-col-phone">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp align-middle">
                        <div class="mdl-card__title">
                          <h2 class="mdl-card__title-text">
                              Our Orphanage                            
                          </h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            Our orphanage is the very heart of what we do, our children inspire us and we hope, as you look around, they will inspire you!
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <a href="/contact" class="mdl-button align-middle mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            Support
                          </a>
                        </div>
                      </div>
                </div>
                <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--12-col-phone">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp mdl-color--amber">
                        <div class="mdl-card__title">
                          <h2 class="mdl-card__title-text">Our School</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            To generate income while educating our kids we run a great kindergarten, primary and high school!
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <a href="/contact" class="mdl-button align-middle mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            Support
                          </a>
                        </div>
                      </div>
                </div>
                
                <div class="mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet mdl-cell--12-col-phone">
                    <div class="demo-card-wide mdl-card mdl-shadow--2dp align-middle">
                        <div class="mdl-card__title">
                          <h2 class="mdl-card__title-text"></h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                          Mauris sagittis pellentesque lacus eleifend lacinia...
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                          <a href="/contact" class="mdl-button align-middle mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                            Support
                          </a>
                        </div>
                      </div>
                </div>
            </div>
            <div class="mdl-grid mdl-color--white">
              <div class="mdl-cell mdl-cell--12-col">
                  <h2 class="text-center text-secondary">
                      The organisations main objectives are                 
                  </h2>
              </div>
            </div>
            <div class="mdl-grid mdl-color--white">
              <div class="mdl-cell mdl-cell--3-col"></div>
              <div class="mdl-cell mdl-cell--7-col">
                  <ul class="demo-list-icon mdl-list">
                      <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                        To provide basic care Education Health food and clothing
                    </span>
                      </li>
                      <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                        To the entire needy orphans to reach out to the entire community
                      </span>
                      </li>
                      <li class="mdl-list__item">
                        <span class="mdl-list__item-primary-content">
                        To ensure that they are properly taken care of contributes
                      </span>
                      </li>
                      <li class="mdl-list__item">
                          <span class="mdl-list__item-primary-content">
                          To the entire community as much as we can by giving to the needy                          
                        </span>
                        </li>
                    </ul>                  
              </div>
              <div class="mdl-cell mdl-cell--2-col"></div>              
            </div>
            @include('inc.footer')
        </main>
      @endsection