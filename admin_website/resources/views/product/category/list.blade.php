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
            <img src="{{ asset('HN/styles/images/body-img/silder/banner2.png') }}" alt="" />
        </div>
        
        <div class="main-container">
            <div class="left-container" style="margin-top: 70px;margin-left: 30px">
                <form action="" method="GET">
                    <div class="form-group">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ request('name') }}">
                    </div>
                    <div class="form-group">
                        <label for="time">Thời gian đăng bán:</label>
                        <select class="form-select" id="time" name="time">
                            <option value="" selected>--Chọn thời gian--</option>
                            <option value="newest" {{ request('time') == 'newest' ? 'selected' : '' }}>Mới nhất</option>
                            <option value="oldest" {{ request('time') == 'oldest' ? 'selected' : '' }}>Cũ nhất</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price_sort">Sắp xếp theo giá tiền:</label>
                        <select class="form-select" id="price_sort" name="price_sort">
                            <option value="" selected>--Chọn loại sắp xếp--</option>
                            <option value="increase" {{ request('price_sort') == 'increase' ? 'selected' : '' }}>Tăng dần</option>
                            <option value="decrease" {{ request('price_sort') == 'decrease' ? 'selected' : '' }}>Giảm dần</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Giá tiền:</label>
                        <div class="input-group mb-3">
                            <input type="number" id="min_price" name="min_price" class="form-control" placeholder="Giá từ..." aria-label="Giá từ" value="{{ request('min_price') }}">
                            <input type="number" id="max_price" name="max_price" class="form-control" placeholder="Đến..." aria-label="Đến" value="{{ request('max_price') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="manufacturer">Hãng sản xuất:</label>
                        <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="{{ request('manufacturer') }}">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary w-100">Lọc</button>
                </form>
            </div>
            <div class="outstanding-products" id="feature">
                <div class="title text-center" style="text-transform: uppercase;">
                    <p>SẢN PHẨM DANH MỤC {{ $currentCategory->name }}</p>
                </div>

                @if($products->count() > 0)
                <div id="produces" class="row row-cols-3 row-cols-md-4 g-4">
                    @foreach ($products as $product)
                    <div class="col" style="margin-bottom: 30px">
                        <a href="{{ route('details_products',['id'=>$product->id]) }}">
                            <div class="card h-100">
                                <div class="image-card">
                                    <img src="{{ config('app.base_url').$product->feature_image_path }}" class="card-img-top" alt="...">
                                </div>
          
                                <div style="flex: 1 1 auto; padding-left: 15px; padding-right: 5px; color: var(--bs-card-color);">
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
                                    <p style="margin-bottom: 5px" class="card-text">Số lượng: {{ $product->max_number }}</p>
                                </div>
                                <a style="margin-top: 0px" class="text-body-secondary add-to-cart" data-url="{{ route('addToCart',['id'=>$product->id]) }}">
                                    <button class="card-footer">               
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
                            Không có sản phẩm nào thuộc danh mục sản phẩm này
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
