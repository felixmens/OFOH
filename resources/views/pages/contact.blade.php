@extends('main.layout')
    @section('content')
       @include('inc.navbar')
       <main class="mdl-layout__content">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <div class="container">
                        <p class="text-center">
                                If you would like to contact our orphanage, if you have any questions/concerns/thoughts or if you 
                                just want to say “hello” please feel free to contact us using the form below. We would love to hear 
                                from you and will endeavor to reply as soon as possible. 
                                Questions regarding <b>adoption</b> or <b>arranged marriages</b> will not be replied to.
                            </p>
                </div>
            </div>
        </div>
        <div class="container">
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" id="sample1">
                    <label class="mdl-textfield__label" for="sample1">Name</label>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="email" id="email">
                    <label class="mdl-textfield__label" for="phone">Email</label>
                </div>
            </div>
            <div class="mdl-cell mdl-cell--4-col">
                <div class="mdl-textfield mdl-js-textfield">
                    <input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="phone">
                    <label class="mdl-textfield__label" for="phone">Phone</label>
                    <span class="mdl-textfield__error">Digits only</span>
                </div>
            </div>
        </div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label full-width">
                    <textarea class="mdl-textfield__input" type="text" rows= "4" cols="20" id="message"></textarea>
                    <label class="mdl-textfield__label" for="message">Message</label>
                </div>
            </div>
        </div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <!-- Accent-colored raised button with ripple -->
                <button class="full-width mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
                    Submit
                </button>
            </div>
        </div>
        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3460.3456744756318!2d31.018468414310068!3d-29.854303281951914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef7a9c5e6f794cb%3A0x76a3ca13081bb0dd!2sButterworth!5e0!3m2!1sen!2sza!4v1534805971179" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>                
            </div>
        </div>
        </div>
       @include('inc.footer')
    </main>
    @endsection