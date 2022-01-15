@extends('website.webpages.layout')

@section('header')
@includeIf('website.webpages.header')
@endsection


@section('content')
@includeIf('website.webpages.searchbar')
@includeIf('website.webpages.productForm')
@endsection


@section('footer')
@includeIf('website.webpages.footer')
@endsection