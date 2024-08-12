@extends('layouts.master')
<!DOCTYPE html>
<html lang="en">
<head>
    @section('title')
<title>Home page</title>
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('home1/home.css') }}">
@endsection
@section('js')
<link rel="stylesheet" href="{{ asset('home1/home.js') }}">
@endsection
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
@section('content')
<div class="cart_wrapper">
@include('cart.components.cart_component')
</div>

<br>

@endsection
</html>