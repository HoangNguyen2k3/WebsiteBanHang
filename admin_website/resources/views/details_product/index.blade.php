<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Details</title>
    <link rel="stylesheet" href="{{asset('DN/CSS/style.css')}}" />
    <link
      rel="stylesheet"
      href="{{asset('DN/assets/fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/fontawesome.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('DN/assets/fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/brands.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('DN/assets/fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/solid.css')}}"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('HN/styles/style.css')}}" />
    <link href="{{asset('DN/CSS/css/bootstrap.min.css')}}" rel="stylesheet" />
    <style>
   .image-card {
    height: 250px;
    width: 98%;
    display: flex;
    justify-content: center;
    align-items: center;
    
}
.testimg{
  width: 100%;
  height: 100%;
  width: 160px;
  height: 160px;
  object-fit: contain;
}
      .product-imgs{
                   display: flex;
                   flex-direction: column;
                   justify-content: center;
               }
         .img-display{
               overflow: hidden;
           }
           .img-showcase{
               display: flex;
               width: 100%;
               transition: all 0.5s ease;
           }
           .img-showcase img{
               min-width: 100%;
           }
           .img-select{
               display: flex;
           }
           .img-item{
               margin: 0.3rem;
           }
           .img-item:nth-child(1),
           .img-item:nth-child(2),
           .img-item:nth-child(3){
               margin-right: 0;
           }
           .img-item:hover{
               opacity: 0.8;
           }
           .card-img-top{
            height: 100%;
  width: 100%;
  height: 120px;
  width: 210px;
  object-fit: contain;
           }
   </style>
  </head>
  <body>
@include('Components.header')
    <!-- Product Details Section -->
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-9">
          <div>
            <div>

              <h1 class="product-title">{{ $products->name }}</h1>
              <br>
              <a href="#evaluate" class="ps-4 sao-danh-gia text-warning">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <p class="text-primary" style="display: inline-block">
                  117 đánh giá
                </p>
              </a>
            </div>
          </div>
        </div>


        <div class="col-md-3 text-end">
          @php
              $hasLiked = false;
              if (session()->has('user')) {
                  $hasLiked = App\Models\User::find(session('user')['id'])->hasLiked($products);
              }
          @endphp
          @if ($hasLiked)
          <label  class="btn btn-primary" style="background-color: gray">
            <i class="fa-regular fa-thumbs-up me-1"></i> Đã Thích
        </label>
          @else
              <button type="button" class="btn btn-primary like-button1" data-url="{{ route('likeProduct', ['id' => $products->id]) }}">
                  <i class="fa-regular fa-thumbs-up me-1"></i> Thích
              </button>
          @endif
          <label> <span id="like-count">{{ $products->like_count }}</span> người đã thích</label>
      </div>
      </div>
    </div>
    <div class="container product-info">
      <div class="row">
        <div class="col-md-7">
          <div id="carouselExampleIndicators" class="carousel slide">

            <div class="product-imgs">
              <div class="img-display">
                <div class="img-showcase">
                  <img id="vip" src="{{ config('app.base_url').$products->feature_image_path }}" alt="Product Image">
                  @foreach ($product_imgs as $item)
                    <img id="vip" src="{{ config('app.base_url').$item->Image_path }}" alt="Product Image">
                  @endforeach
                </div>
              </div>
              <div class="img-select">
                <div class="img-item productinfo1">
                  <a href="#" data-id="1">
                    <img style="width: 100%" src="{{ config('app.base_url').$products->feature_image_path }}" alt="Product Image">
                  </a>
                </div>
                @foreach ($product_imgs as $index => $item)
                  <div class="img-item productinfo1">
                    <a href="#" data-id="{{ $index + 2 }}">
                      <img style="width: 100%" src="{{ config('app.base_url').$item->Image_path }}" alt="Product Image">
                    </a>
                  </div>
                @endforeach
              </div>
            </div>
          
          </div>
        </div>
        <div class="col-md-5 pt-5">
          <span>
         
          </span>
          <p class="product-price">
            <span class="product-price-old" id="old-price-opt"
              >{{ number_format($products->price*1.3) }} VNĐ</span
            >
            <span class="product-price-new" id="new-price-opt"
              >{{ number_format($products->price) }} VNĐ</span
            >
            <span class="tra-gop"> Trả góp 0% </span>
          </p>

          <div class="card">
            <div class="card-header">
              <strong class="fs-4">Khuyến mãi</strong>
              <p class="text-secondary">
                Giá và khuyến mãi dự kiến áp dụng đến 23:59 | 30/07
              </p>
            </div>
            <div class="card-body">
              <ol class="list-group list-group-numbered">
                <li
                  class="list-group-item d-flex justify-content-between align-items-start py-1 no-border"
                >
                  <div class="ms-2 me-auto">
                    Tặng Gói FPT MAX (01 Tháng)/ Gói Viettel TV360 Super VIP
                    Sony (01 Tháng)/ Gói Clip TV Family Standard (12 Tháng)
                  </div>
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-start py-1 no-border"
                >
                  <div class="ms-2 me-auto">
                    Nhập mã VNPAYTGDD2 giảm ngay 1% (tối đa 200.000đ) khi thanh
                    toán qua VNPAY-QR, áp dụng cho đơn hàng từ 3 Triệu
                  </div>
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-start py-1 no-border"
                >
                  <div class="ms-2 me-auto">
                    Tặng thêm 06 Tháng sử dụng: VieON VIP và 3 Kênh K+ (K+ LIFE/
                    K+ CINE/ K+ KIDS)
                  </div>
                </li>
                <li
                  class="list-group-item d-flex justify-content-between align-items-start py-1 no-border"
                >
                  <div class="ms-2 me-auto">Miễn phí lắp đặt</div>
                </li>
              </ol>
            </div>
          </div>
          <div class="mt-3">
            <a class="add-to-cart" data-url="{{ route('addToCart',['id'=>$products->id]) }}">
                <button class="btn btn-danger w-100">Add To Cart</button>
            </a>
            
            <div class="row my-2">
            </div>
            <div class="buy-tele text-center py-2">
              Gọi đặt mua
              <span class="text-primary">0987 654 321</span> (7:30-22:00)
            </div>
          </div>
        </div>
      </div>
      <div class="row product-description">
        <div class="col-md-7">
          <strong class="fs-3">Mô tả sản phẩm</strong>
          <p class="mt-2">
            {!! $products->content !!}
          </p>
          <img
            class="w-100"
            src="{{ config('app.base_url').$product_imgs[2]->Image_path }}"
             {{-- src="{{ config('app.base_url').$products->feature_image_path  }}" --}}
            alt=""
          />
        </div>
        <div class="col-md-5">
          <strong class="fs-3">Thông số kỹ thuật </strong>
          <div class="row bg-sliver py-1 mt-2">
            <div class="col-4">
              <span>Màn hình</span>
            </div>
            <div class="col-8">OLED, 6.7", Super Retina XDR</div>
          </div>
          <div class="row py-1">
            <div class="col-4">
              <span>Hệ điều hành</span>
            </div>
            <div class="col-8">IOS 17</div>
          </div>
          <div class="row bg-sliver py-1">
            <div class="col-4">
              <span>Camera sau</span>
            </div>
            <div class="col-8">Chính 48 MP & Phụ 12 MP, 12 MP</div>
          </div>
          <div class="row py-1">
            <div class="col-4">
              <span>Camera trước</span>
            </div>
            <div class="col-8 py-1">12MP</div>
          </div>
          <div class="row bg-sliver py-1">
            <div class="col-4">
              <span> Chip </span>
            </div>
            <div class="col-8">Apple A17 Pro 6 nhân</div>
          </div>
          <div class="row py-1">
            <div class="col-4">
              <span> RAM </span>
            </div>
            <div class="col-8">8 GB</div>
          </div>
          <div class="row bg-sliver py-1">
            <div class="col-4">
              <span> Dung lượng lưu trữ </span>
            </div>
            <div class="col-8">256 GB</div>
          </div>
          <div class="row py-1">
            <div class="col-4">
              <span> SIM </span>
            </div>
            <div class="col-8">1 Nano SIM & 1 eSIM, Hỗ trợ 5G</div>
          </div>
          <div class="row bg-sliver py-1">
            <div class="col-4">
              <span> Pin, sạc </span>
            </div>
            <div class="col-8">4422 mAh, 20 W</div>
          </div>
          <div class="row py-1">
            <div class="col-4">
              <span> Hãng </span>
            </div>
            <div class="col-8">Iphone</div>
          </div>
        </div>
      </div>
      <div class="row evaluate mt-5 binhluan" id="evaluate">
        <div class="col-7">
          <div class="card">
        <div class="card-body">

          @foreach ($products->comments as $comment)
           <div class=" w-100" style="border: none">
            <div class="card-body">
              <h5 class="card-title">
                {{ $comment->user->name }}
                <p class="fs-6 text-success" style="display: inline">
                  <i class="fa-regular fa-circle-check me-1"></i>
                </p>
              </h5>
              <h6 class="card-subtitle mb-2 text-warning">
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star text-secondary"></i>
                <i class="fa-solid fa-star text-secondary"></i>
              </h6>
              <p class="card-text">
                {{ $comment->content }}
              </p>
              <p
                class="fs-6 text-secondary-emphasis"
                style="display: inline"
              >
                {{ $comment->created_at }}
              </p>
              <hr />
            </div>
          </div>
          @endforeach
         
          
        </div>
        <form action="{{ route('commentProduct', $products->id) }}#evaluate" method="POST" style="margin: 10px">
          @csrf
          <div class="form-group">
              <label style="margin-left: 15px;font-size: 15"
              for="content">Bình luận:</label>
              <br>
              <textarea class="form-control" id="content" name="content" rows="3"></textarea>
          </div>
                    <div class="row" style="margin-top: 20px">
            {{-- <div class="col-6">
              <button class="w-100 py-2 bg-white rounded-3">
                Xem 146 đánh giá
              </button>
            </div> --}}
            <div class="col-6">
              <button type="submit" class="w-100 py-2 bg-primary text-white rounded-3">
                Viết đánh giá
              </button>
            </div>
          </div>
      </form>
          </div>
        </div>
        <div class="col-md-5">
          <div id="carouselExampleIndicators-2" class="carousel slide">
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="{{asset('DN/assets/img/luffy.jpg')}}"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="{{ asset('DN/assets/img/zoro.jpg') }}"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="{{asset('DN/assets/img/naruto.jpg')}}"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators-2"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleIndicators-2"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
      <div class="row my-2">
        <strong class="fs-3">Sản phẩm tương tự</strong>
      </div>
      <div id="produces" class="row row-cols-3 row-cols-md-5 g-4">
        @foreach ($productsRecommend as $product1)
        <div class="col" style="margin-bottom: 30px;text-decoration: none">
            <a href="{{ route('details_products',['id'=>$product1->id]) }}" style="text-decoration: none">
                <div class="card h-100">
                    <div class="image-card">
                        <img  src="{{ config('app.base_url').$product1->feature_image_path }}" class="card-img-top  testimg" alt="...">
                    </div>

                    <div style="flex: 1 1 auto; padding-left: 15px; padding-right: 5px; color: var(--bs-card-color);text-decoration: none">
                        <h6 class="card-title" style="display: inline; color: black">{{ $product1->name }}</h6>
                        <br>
                        <span class="price-and-discount">
                            <em class="card-text-sale">{{ number_format($product1->price * 1.3) }} VNĐ</em>
                            <small>-30%</small>
                        </span>
                        <p class="card-text">{{ number_format($product1->price) }} VNĐ</p>

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
                        <p style="margin-bottom: 5px" class="card-text">Số lượng: {{ $product1->max_number }}</p>
                    </div>
                    <a style="margin-top: 0px;background-color: #589ff1;color: white" class="text-body-secondary add-to-cart" data-url="{{ route('addToCart',['id'=>$product1->id]) }}">
                        <button class="card-footer" style="color: white">               
                            Add to cart
                            <i class="bi bi-cart3"></i>
                        </button>
                    </a>

                </div>
            </a>
        </div>
        @endforeach
    </div>
      
    </div>
@include('Components.footer')

    <script src="{{asset('DN/javascript/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('DN/javascript/myScript.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
    function addToCart(event) {
    event.preventDefault();
    let urlCart = $(this).data('url');
    console.log('URL Cart:', urlCart); // Kiểm tra URL
    $.ajax({
        type: "GET",
        url: urlCart,
        success: function(data) {
            if (data.code === 200) {
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Sản phẩm đã được thêm vào giỏ hàng thành công",
                    showConfirmButton: false,
                    timer: 1500
                });
            } else {
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Vui lòng đăng nhập để thực hiện mua hàng",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        },
        error: function(xhr, status, error) {
            console.log('Error Status:', status);
            console.log('Error:', error);
            console.log('Response Text:', xhr.responseText); // Kiểm tra lỗi trả về từ server
            Swal.fire({
                position: "top-end",
                icon: "error",
                title: "Vui lòng đăng nhập để thực hiện mua hàng",
                showConfirmButton: false,
                timer: 1500
            });
        }
    });
}

$(function() {
    $('.add-to-cart').on('click', addToCart);
});

            </script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
              const imgs = document.querySelectorAll('.img-select a');
            const imgBtns = [...imgs];
            let imgId = 1;
            
            imgBtns.forEach((imgItem) => {
              imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
              });
            });
            
            function slideImage(){
              const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;
            
              document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
            }
            
            window.addEventListener('resize', slideImage);
              </script>
              <script>$(document).ready(function() {
                // Like button action
                $('.like-button').on('click', function(e) {
                  e.preventDefault();
                  let url = $(this).data('url');
                  
                  $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                      _token: '{{ csrf_token() }}'
                    },
                    success: function(data) {
                      if (data.success) {
                        $('#like-count').text(data.likes_count);
                        Swal.fire({
                          icon: 'success',
                          title: 'Bạn đã thích sản phẩm này!',
                          showConfirmButton: false,
                          timer: 1500
                        });
                      } else {
                        Swal.fire({
                          icon: 'error',
                          title: 'Bạn cần đăng nhập để thích sản phẩm này.',
                          showConfirmButton: false,
                          timer: 1500
                        });
                      }
                    },
                    error: function(xhr, status, error) {
                      Swal.fire({
                        icon: 'error',
                        title: 'Đã xảy ra lỗi.',
                        showConfirmButton: false,
                        timer: 1500
                      });
                    }
                  });
                });
              
                // Comment form submit action
                $('#comment-form').on('submit', function(e) {
                  e.preventDefault();
                  let url = $(this).data('url');
                  let content = $('#comment-content').val();
                  
                  $.ajax({
                    type: 'POST',
                    url: url,
                    data: {
                      _token: '{{ csrf_token() }}',
                      content: content
                    },
                    success: function(data) {
                      if (data.success) {
                        // Clear the form
                        $('#comment-content').val('');
                        // Append the new comment
                        $('.card-body').append(`
                          <div class="card w-100" style="border: none">
                            <div class="card-body">
                              <h5 class="card-title">${data.comment.user.name}
                                <p class="fs-6 text-success" style="display: inline">
                                  <i class="fa-regular fa-circle-check me-1"></i>Đã mua tại NNH Shop
                                </p>
                              </h5>
                              <h6 class="card-subtitle mb-2 text-warning">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star text-secondary"></i>
                                <i class="fa-solid fa-star text-secondary"></i>
                              </h6>
                              <p class="card-text">${data.comment.content}</p>
                              <button><i class="fa-regular fa-thumbs-up"></i>Hữu ích</button>
                              <p class="fs-6 text-secondary-emphasis" style="display: inline">Đã dùng khoảng 2 tuần</p>
                              <hr />
                            </div>
                          </div>
                        `);
                        Swal.fire({
                          icon: 'success',
                          title: 'Bình luận của bạn đã được thêm!',
                          showConfirmButton: false,
                          timer: 1500
                        });
                      } else {
                        Swal.fire({
                          icon: 'error',
                          title: 'Bạn cần đăng nhập để bình luận.',
                          showConfirmButton: false,
                          timer: 1500
                        });
                      }
                    },
                    error: function(xhr, status, error) {
                      Swal.fire({
                        icon: 'error',
                        title: 'Đã xảy ra lỗi.',
                        showConfirmButton: false,
                        timer: 1500
                      });
                    }
                  });
                });
              });
              </script>
          <!-- Đoạn script jQuery -->
          <script>
            $(document).ready(function() {
                $('.like-button1').on('click', function(e) {
                    e.preventDefault();
        
                    let url = $(this).data('url'); // Get URL from the button's data-url attribute
                    
                    // Log to check if the click event is triggered
                    console.log('Button clicked, URL: ' + url);
        
                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    icon: 'success',
                                    title: response.message,
                                    showConfirmButton: false,
                                    timer: 1000
                                }).then(() => {
                                    if (response.reload) {
                                        location.reload();
                                    }
                                });
        
                                // Update the displayed like count
                                $('#like-count').text(response.like_count);
                                console.log($('#like-count'));
        
                                // Change the button state from "Like" to "Liked"
                                console.log('Changing button state');
                            } else {
                                Swal.fire({
                                    icon: 'error',
                                    title: response.message,
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                            }
                        },
                        error: function(xhr, status, error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'An error occurred.',
                                showConfirmButton: false,
                                timer: 1500
                            });
                        }
                    });
                });
            });
        </script>
                
        
        

</body>

</html>
