<?php
$nav['contact'] = 'colorlib-active';
?>
@extends('layouts.main')

@section('content')

    <div class="colorlib-contact">
        <div class="colorlib-narrow-content">
            <div class="row">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    <span class="heading-meta">Read</span>
                    <h2 class="colorlib-heading">Get in Touch</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="colorlib-icon">
                            <i class="icon-globe-outline"></i>
                        </div>
                        <div class="colorlib-text">
                            <p><a href="mailto:info@partyuniform.com">info@partyuniform.com</a></p>
                        </div>
                    </div>

                    <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="colorlib-icon">
                            <i class="icon-map"></i>
                        </div>
                        <div class="colorlib-text">
                            <p> Abuja, Nigeria</p>
                        </div>
                    </div>

                    <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                        <div class="colorlib-icon">
                            <i class="icon-phone"></i>
                        </div>
                        <div class="colorlib-text">
                            <p><a href="tel:+234 809 1142 201">+234 809 1142 201</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-md-push-1">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInLeft">
                            <form action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                                <div class="form-group">
                                    <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="map"></div>



    {{--@include('pages.home.homeContactUs')--}}

    <script src="https://maps.googleapis.com/maps/api/js?key={{ 'no map key' }}"></script>
    <script src="js/google_map.js"></script>
@endsection
