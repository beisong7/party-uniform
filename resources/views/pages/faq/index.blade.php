<?php
$nav['faq'] = 'colorlib-active';
?>
@extends('layouts.main')

@section('content')
    @include('pages.faq.faq')


    {{--    @include('pages.home.homeBlog')--}}

    @include('pages.home.homeContactUs')
@endsection
