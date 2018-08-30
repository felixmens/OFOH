@extends('main.layout')
    @section('content')
       @include('inc.navbar')
       <main class="mdl-layout__content">
       <div class="mdl-grid about-bg">
           <div class="mdl-cell mdl-cell--12-col">
                <!--bg image here-->
                <h1 class="container bg-light-black text-light animated fadeInUp about-heading text-center">About Us</h1>                
            </div>
       </div>
       <div class="contaier">
               <div class="mdl-grid">
                       <div class="mdl-cell mdl-cell--12-col">

                                <h2 class="text-center">Our Mission</h2>
                        <p class="text-center">
                                Building communities by reducing street kids and crime. Thereby reaching out and changing
                                lives.
                                Also benefiting in education.
                        </p>                                
                        </div>
               </div>
               <div class="container">
                        <div class="mdl-grid">
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--12-col-phone">
                        <div class="demo-card-square mdl-card">
                                        {{-- <h3 class="text-center mb-0 mt-0">Our Values</h3> --}}
                        <div class="mdl-card__title mdl-card--expand">
                                <img src="{{asset('images/our values.jpg')}}" alt="" class="img-fluid">
                        </div>
                        <div class="mdl-card__supporting-text">
                                We will provide a spiritual journey that begins with basic honesty and leads to character 
                                development and emotional, mental maturity for the Orphans. A community life style
                                that is productive and focused on personal growth. In addition the staff also are people 
                                who are passionate about making difference to focus all efforts on what is best for the 
                                orphans to gain positive and permanent changes in their lives. They are also governed by 
                                mission.
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                                {{-- <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                View Updates
                                </a> --}}
                        </div>
                        </div>
                        </div>
                        <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-tablet mdl-cell--12-col-phone">
                        <div class="demo-card-square mdl-card">
                                {{-- <h3 class="text-center mb-0 mt-0">Our Vision</h3> --}}
                        <div class="mdl-card__title mdl-card--expand">
                                <img src="{{asset('images/our-vision.jpg')}}" alt="" class="img-fluid">                               
                        </div>
                        <div class="mdl-card__supporting-text">
                        My Father Orphanage Home is located in Butterworth by a group of prominent Christians, 
                        development workers who are committed to make a difference. The aim is to improve living
                        conditions and acceptable social development in community. Also to foster a love of books and
                        reading in the children and to create a thirst for knowledge as we also want to have a library. 
                        My Father Orphanage Home is currently running a soup kitchen.
                                        
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                                {{-- <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                View Updates
                                </a> --}}
                        </div>
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