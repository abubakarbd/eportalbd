@extends('website.webpages.layout')

@section('header')
@includeIf('website.webpages.header')
@endsection


@section('content')
@includeIf('website.webpages.search')
@includeIf('website.webpages.slider')
@includeIf('website.webpages.eService')
@includeIf('website.webpages.homeProduct')
@includeIf('website.webpages.bottomSlider')
@endsection


@section('footer')
@includeIf('website.webpages.footer')
@endsection