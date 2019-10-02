<?php
    $nav['about'] = 'colorlib-active';
?>
@extends('layouts.main')

@section('content')



    @include('pages.home.homeAbout')

{{--    @include('pages.home.homeBlog')--}}

    @include('pages.home.homeContactUs')
@endsection
