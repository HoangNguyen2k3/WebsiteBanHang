@extends('layouts.master')

@section('title')
<title>Search Results</title>
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
            <img src="{{ asset('HN/styles/images/body-img/silder/banner2.png') }}" alt="" />
        </div>
        <div class="main-container">
            
            @include('Components.sidebar')
            <div class="outstanding-products" id="feature">
                <div class="title text-center" style="text-transform: uppercase;">
                    <p>Search Results for "{{ request()->input('query') }}":</p>
                </div>
                
                @if($products->count() > 0) 
                <div id="produces" class="row row-cols-1 row-cols-md-4 g-4">
                    @foreach ($products as $product)
                        <div class="col" style="margin-bottom: 30px">
                            <a href="{{ route('details_products',['id'=>$product->id]) }}">
                                <div class="card h-100">
                                    <div class="image-card">
                                        <img src="{{ config('app.base_url').$product->feature_image_path }}" class="card-img-top" alt="..." />
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title" style="display: inline; color: black">{{ $product->name }}</h6>
                                        <br>
                                        <span class="price-and-discount">
                                            <em class="card-text-sale">{{ number_format($product->price * 1.3) }} VNĐ</em>
                                            <small>-30%</small>
                                        </span>
                                        <p class="card-text">{{ number_format($product->price) }} VNĐ</p>
                                        <div class="item-rating">
                                            <p>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star dark"></i>
                                            </p>
                                            <p class="item-rating-total">{{ mt_rand(50, 150) }}</p>
                                        </div>
                                    </div>
                                    <a class="text-body-secondary add-to-cart" data-url="{{ route('addToCart', ['id' => $product->id]) }}">
                                        <button class="card-footer btn btn-primary">
                                            Add to cart
                                            <i class="bi bi-cart3"></i>
                                        </button>
                                    </a>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                @else
                <br><br>
                <div id="produces">
                    <div class="col-12">
                        <div class="alert alert-info text-center">
                            No products found matching your search query.
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
