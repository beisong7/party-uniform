<?php
    $nav['home'] = 'colorlib-active';
?>
@extends('layouts.main')

@section('content')
    @include('pages.home.slides')


    @include('pages.home.homeAbout')


    @include('pages.home.homeService')


    @include('pages.home.homeCounter')


    @include('pages.home.homeWork')


{{--    @include('pages.home.homeBlog')--}}

    @include('pages.home.homeContactUs')
@endsection
