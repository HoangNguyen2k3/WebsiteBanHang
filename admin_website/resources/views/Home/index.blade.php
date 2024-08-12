@extends('layouts.master')
@section('title')
<title>Home page</title>
@endsection
@section('css')
<link rel="stylesheet" href="">
@endsection
@section('js')
<link rel="stylesheet" href="">
@endsection
@section('content')
<section>
<div class="home-content">
  <div class="banner">
    <img
      {{-- src="{{asset('HN/styles/images/body-img/silder/banner2.png')}}" --}}
       src="{{asset('HN/styles/images/test1.gif')}}"
      alt=""
    />
  </div>
    <!-- carousel start -->
    <div class="carousel-container" id="carousel-container">
      <div class="carousel1-container" id="carousel1-container"></div>
  
      <div class="carousel2-container" id="carousel2-container"></div>
    </div>
    <!-- carousel end -->


  <div class="main-container">
      @include('Components.sidebar')

      @include('Components.content')
  </div>
</div>
    <div class="bestSeller-contain">
      <div class="title">
        <p>SẢN PHẨM ĐƯỢC TÌM KIẾM NHIỀU NHẤT TUẦN QUA</p>
      </div>
      <div class="bestSeller" id="carousel-products"></div>
    </div>
</section>
@endsection
