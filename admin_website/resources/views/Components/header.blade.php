

<!-- Bao gồm jQuery và Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<div class="header-containter">
    <!-- header -->
    <div class="header">
        <!-- header-left -->
        <a style="text-decoration: none" href="{{ route('comehome') }}">
            <div class="header-left">
                <div class="logo">
                    <img src="{{asset('HN/styles/images/header-img/logo-1.jpg')}}" alt="" />
                </div>
                <div class="name-shop">
                    <span class="name-E">E</span>lectronics
                    <span class="name-E">S</span>hop
                </div>
            </div>
        </a>

        <!-- header-mid -->
        <div class="header-mid">
            <div class="header-mid-search">
                <input id="search" type="text" placeholder="Tìm kiếm" />
                <i class="fa-solid fa-keyboard"></i>
            </div>
            <div class="header-mid-search-icon">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>

        <!-- header-right -->
        <div class="header-right">
            @if(session()->has('user'))
            <a style="text-decoration: none; color: white; font-size: 18px;" href="{{ route('details_account',['user'=>$user]) }}"">
            <div class="avt" >
                <img src="https://gcs.tripi.vn/public-tripi/tripi-feed/img/474088vdY/hinh-anh-nhung-con-cho-de-thuong_092948873.jpg" alt="" /> 
                <a  style="text-decoration: none; color: white; font-size: 18px;padding-top: 5px;line-height: 100%;" href="{{ route('details_account',['user'=>$user]) }}"> {{ session('user')->name }}</a>
            </div>   
            </a>
             
            @else
                <a href="#" style="text-decoration: none; color: white; font-size: 18px;">
                    <i class="fa fa-user khongcogachduoi"></i> Account
                </a>
            @endif

            <a href="{{ route('showCart') }}" style="text-decoration: none; color: white; font-size: 18px;">
                <i class="fa fa-shopping-cart khongcogachduoi"></i> Cart
            </a>
            @if(session()->has('user'))
            <a href="{{ route('orders.index') }}" style="text-decoration: none; color: white; font-size: 18px;">
                <i class="fa fa-list"></i> Orders
            </a>
        @endif
        
     
            @if(session()->has('user'))
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" style="text-decoration: none; color: white; font-size: 18px;background-color: #589ff1;border: none">
                        <i class="fa fa-lock"></i> Logout
                    </button>
                </form>
            @else
                <a href="{{ route('loginat') }}" style="text-decoration: none; color: white; font-size: 18px;">
                    <i class="fa fa-lock khongcogachduoi"></i> Login
                </a>
            @endif

            
        </div>
    </div>
    <!-- header -->

    <!-- header-navbar -->
    <ul class="nav nav-pills" id="header-navbar">
        @foreach ($categorys as $indexCategory=>$categoryItem)
            @if($categoryItem->categoryChildrent->count())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_{{ $categoryItem->id }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ $categoryItem->name }}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_{{ $categoryItem->id }}">
                        @foreach ($categoryItem->categoryChildrent as $categoryChild)
                            <a class="dropdown-item" href="{{ route('category.product', ['slug'=>$categoryChild->slug, 'id'=>$categoryChild->id]) }}#feature">
                                {{ $categoryChild->name }}
                            </a>
                        @endforeach
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.product', ['id'=>$categoryItem->id]) }}">{{ $categoryItem->name }}</a>
                </li>
            @endif
        @endforeach
    </ul>
    <!-- header-navbar -->
</div>
<script>document.addEventListener('DOMContentLoaded', function() {
    document.querySelector('.header-mid-search-icon').addEventListener('click', function() {
        const searchQuery = document.getElementById('search').value;
        if (searchQuery.trim() !== '') {
            window.location.href = `/search?query=${encodeURIComponent(searchQuery)}`;
        }
    });
});</script>
