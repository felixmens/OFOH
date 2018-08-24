@extends('main.layout')
    @section('content')
       @include('inc.navbar')
       <div class="mdl-grid about-bg mdl-layout">
           <div class="mdl-cell mdl-cell--12-col">
                <!--bg image here-->
                        <h1 class="container bg-light-black text-light animated fadeInUp about-heading text-center">About Us</h1>                
            </div>
       </div>
       <div class="container">
            <p>
                    The Good Shepherd Agricultural Mission is an independent, non-governmental, social development organization that has been providing support to those in need since 1952. ‘The Mission’ works in an array of areas, support to lepers, vocational training, education, disaster relief etc. but it’s primary focus is the care and protection of orphan children.
    
                    The Mission works hard to provide a loving home and family for every child in its care working hard to promote family relationships and impart a spirit of responsibility in every member of the organization.
            </p>
       </div>
       @include('inc.footer')
    @endsection