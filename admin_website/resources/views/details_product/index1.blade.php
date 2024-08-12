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
    <link href="{{asset('DN/CSS/css/bootstrap.min.css')}}" rel="stylesheet" />
  </head>
  <body>
    <div class="header-containter">
      <!-- header -->
      <div class="header">
        <!-- header-left -->
        <div class="header-left">
          <div class="logo">
            <img
              src="{{asset('HN/styles/images/header-img/logo-1.jpg')}}"
              alt=""
            />
          </div>

          <div class="name-shop">
            <span class="name-E">E</span>lectronics
            <span class="name-E">S</span>hop
          </div>
        </div>

        <!-- header-mid -->
        <div class="header-mid">
          <div class="header-mid-search">
            <!-- <i class="fa-solid fa-magnifying-glass"></i> -->

            <input id="search" type="text" placeholder="Tìm kiếm" />

            <i class="fa-solid fa-keyboard"></i>
          </div>

          <div class="header-mid-search-icon">
            <i class="fa-solid fa-magnifying-glass"></i>
          </div>

          <!-- <div class="header-mid-micro-icon" id="micro-icon">
            <i class="fa-solid fa-microphone"></i>
          </div> -->
        </div>

        <!-- header-right -->

        <div class="header-right">
          <div class="cart-icon">
            <i class="bi bi-cart3"></i>
            <div class="noti-count">3</div>
          </div>
          <div class="noti-container">
            <i class="bi bi-bell"></i>
            <div class="noti-count">3</div>
          </div>

          <div class="login">
            <button type="button" class="btn btn-outline-light">
              Đăng nhập
            </button>
          </div>

          <div class="register">
            <button type="button" class="btn btn-outline-light">Đăng ký</button>
          </div>

          <div class="avt">
            <img
              src="https://gcs.tripi.vn/public-tripi/tripi-feed/img/474088vdY/hinh-anh-nhung-con-cho-de-thuong_092948873.jpg"
              alt=""
            />
          </div>
        </div>
      </div>
      <!-- header -->

      <!-- header-navbar -->
      <ul class="nav nav-pills" id="header-navbar">
        <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-expanded="false"
            >Danh mục</a
          >
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="#">Máy tính</a>
              <div class="dropdown-menu-1">
                <ul>
                  <li><a class="dropdown-item" href="#">Laptop</a></li>
                  <li><a class="dropdown-item" href="#">Tablet</a></li>
                  <li><a class="dropdown-item" href="#">Máy tính để bàn</a></li>
                </ul>
              </div>
            </li>
            <li>
              <a class="dropdown-item" href="#">Camera</a>
              <div class="dropdown-menu-2">
                <ul>
                  <li>
                    <a class="dropdown-item" href="#">Camera trong nhà</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Camera ngoài trời</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="dropdown-item" href="#">Điện thoại</a>

              <div class="dropdown-menu-3">
                <ul>
                  <li>
                    <a class="dropdown-item" href="#">Điện thoại iphone</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Điện thoại Androi</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Điện thoại phổ thông</a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="dropdown-item" href="#">Các thiết bị khác</a>

              <div class="dropdown-menu-4">
                <ul>
                  <li>
                    <a class="dropdown-item" href="#">Thiết bị âm thanh</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Thiết bị lưu trữ</a>
                  </li>
                  <li><a class="dropdown-item" href="#">Màn hình</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Phụ kiện</a>
                    <div class="dropdown-menu-4-1">
                      <ul>
                        <li>
                          <a class="dropdown-item" href="#"
                            >Điện thoại iphone</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            >Điện thoại Androi</a
                          >
                        </li>
                        <li>
                          <a class="dropdown-item" href="#"
                            >Điện thoại phổ thông</a
                          >
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Máy tính</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Camera</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Điện thoại</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Các thiết bị khác</a>
        </li>
      </ul>
      <!-- header-navbar -->
    </div>
    <!-- Product Details Section -->
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-9">
          <div>
            <div>
              <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">
                    Library
                  </li>
                </ol>
              </nav>
              <h1 class="product-title">Product Name</h1>
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
          <button type="button" class="btn btn-primary">
            <i class="fa-regular fa-thumbs-up me-1"></i>Thích
          </button>
          <button type="button" class="btn btn-primary">
            <i class="fa-solid fa-share-nodes me-1"></i>Chia sẻ
          </button>
        </div>
      </div>
    </div>
    <div class="container product-info">
      <div class="row">
        <div class="col-md-7">
          <div id="carouselExampleIndicators" class="carousel slide">
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
                  src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-lscndw3ovxqx90"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="https://down-vn.img.susercontent.com/file/vn-11134207-7r98o-llm05p5nkerg1c"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
              <div class="carousel-item">
                <img
                  src="https://down-vn.img.susercontent.com/file/sg-11134201-23020-q78nka801cnv83"
                  class="d-block w-100"
                  alt="..."
                />
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleIndicators"
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
              data-bs-target="#carouselExampleIndicators"
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
        <div class="col-md-5 pt-5">
          <span>
            <div
              class="btn-group"
              role="group"
              aria-label="Basic radio toggle button group"
            >
              <input
                type="radio"
                class="btn-check"
                name="btnradio"
                id="btnradio1"
                autocomplete="off"
                checked
                onclick="change_cost()"
              />
              <label class="btn btn-outline-primary" for="btnradio1"
                >128GB</label
              >

              <input
                type="radio"
                class="btn-check"
                name="btnradio"
                id="btnradio2"
                autocomplete="off"
                onclick="change_cost()"
              />
              <label class="btn btn-outline-primary" for="btnradio2"
                >256GB</label
              >

              <input
                type="radio"
                class="btn-check"
                name="btnradio"
                id="btnradio3"
                autocomplete="off"
                onclick="change_cost()"
              />
              <label class="btn btn-outline-primary" for="btnradio3"
                >512GB</label
              >
            </div>
          </span>
          <p class="product-price">
            <span class="product-price-old" id="old-price-opt"
              >40.000.000đ</span
            >
            <span class="product-price-new" id="new-price-opt"
              >30.000.000đ</span
            >
            <span class="tra-gop"> Trả góp 0% </span>
          </p>

          <div class="card">
            <div class="card-header">
              <strong class="fs-4">Khuyến mãi</strong>
              <p class="text-secondary">
                Giá và khuyến mãi dự kiến áp dụng đến 23:59 | 30/06
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
            <button class="btn btn-danger w-100">MUA NGAY</button>
            <div class="row my-2">
              <div class="col-6 pe-1">
                <button class="btn btn-primary w-100">
                  <h6>Mua TRẢ GÓP 0%</h6>
                  Duyệt hồ sơ trong 5 phút
                </button>
              </div>
              <div class="col-6 ps-1">
                <button class="btn btn-primary w-100">
                  <h6>TRẢ GÓP 0% QUA THẺ</h6>
                  Visa, Mastercard, JCB, Amex
                </button>
              </div>
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
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus
            ad a porro repellat quaerat maiores placeat impedit, cumque soluta
            ducimus. Iusto iste rem animi dignissimos perferendis. Adipisci a
            accusantium iure.
          </p>
          <img
            class="w-100"
            src="https://cdn.tgdd.vn/Products/Images/42/299033/iphone-15-pro-131023-034959.jpg"
            alt=""
          />
        </div>
        <div class="col-md-5">
          <strong class="fs-3">Thông số kỹ thuật Product Name</strong>
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
      <div class="row evaluate mt-5" id="evaluate">
        <div class="col-7">
          <div class="card">
            <div class="card-header">
              <strong class="fs-3">Đánh giá sản phẩm</strong>
              <div class="text-warning">
                <p style="display: inline; font-weight: bold" class="fs-5">
                  4.0
                </p>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
                <p style="display: inline" class="text-primary ps-3">
                  117 đánh giá
                </p>
              </div>
            </div>
            <div class="card-body">
              <div class="card w-100" style="border: none">
                <div class="card-body">
                  <h5 class="card-title">
                    Nguyễn Đăng Nam
                    <p class="fs-6 text-success" style="display: inline">
                      <i class="fa-regular fa-circle-check me-1"></i>Đã mua tại
                      NNH Shop
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
                    Điện thoại hơi cùi nhưng mà dùng tạm được
                  </p>
                  <button>
                    <i class="fa-regular fa-thumbs-up"></i>Hữu ích
                  </button>
                  <p
                    class="fs-6 text-secondary-emphasis"
                    style="display: inline"
                  >
                    Đã dùng khoảng 2 tuần
                  </p>
                  <hr />
                </div>
              </div>
              <div class="card w-100" style="border: none">
                <div class="card-body">
                  <h5 class="card-title">
                    Nguyễn Lưu Quốc Hoàng
                    <p class="fs-6 text-success" style="display: inline">
                      <i class="fa-regular fa-circle-check me-1"></i>Đã mua tại
                      NNH Shop
                    </p>
                  </h5>
                  <h6 class="card-subtitle mb-2 text-warning">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star text-secondary"></i>
                  </h6>
                  <p class="card-text">
                    Điện thoại hơi cùi nhưng mà dùng tạm được
                  </p>
                  <button>
                    <i class="fa-regular fa-thumbs-up"></i>Hữu ích
                  </button>
                  <p
                    class="fs-6 text-secondary-emphasis"
                    style="display: inline"
                  >
                    Đã dùng khoảng 2 tuần
                  </p>
                  <hr />
                </div>
              </div>
              <div class="card w-100" style="border: none">
                <div class="card-body">
                  <h5 class="card-title">
                    Nguyễn Thị Hồng Ngân
                    <p class="fs-6 text-success" style="display: inline">
                      <i class="fa-regular fa-circle-check me-1"></i>Đã mua tại
                      NNH Shop
                    </p>
                  </h5>
                  <h6 class="card-subtitle mb-2 text-warning">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                  </h6>
                  <p class="card-text">
                    Điện thoại hơi cùi nhưng mà dùng tạm được
                  </p>
                  <button>
                    <i class="fa-regular fa-thumbs-up"></i>Hữu ích
                  </button>
                  <p
                    class="fs-6 text-secondary-emphasis"
                    style="display: inline"
                  >
                    Đã dùng khoảng 2 tuần
                  </p>
                  <hr />
                </div>
              </div>
              <div class="row">
                <div class="col-6">
                  <button class="w-100 py-2 bg-white rounded-3">
                    Xem 146 đánh giá
                  </button>
                </div>
                <div class="col-6">
                  <button class="w-100 py-2 bg-primary text-white rounded-3">
                    Viết đánh giá
                  </button>
                </div>
              </div>
            </div>
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
                  src="{{asset('DN/assets/img/zoro.jpg')}}"
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

      <div class="slider-container">
        <swiper-container class="mySwiper" init="false">
          <swiper-slide>
            <div class="col">
              <a href="#">
                <div class="card h-100">
                  <div class="image-card">
                    <img
                      src="{{asset('HN/styles/images/body-img/produces/laptop/acer-aspire-3-a315-510p-32ef-i3.png')}}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>

                  <div class="card-body">
                    <h6 class="card-title">Máy tính acer</h6>
                    <span class="price-and-discount">
                      <em class="card-text-sale">7.140.000₫</em>
                      <small>-30%</small>
                    </span>
                    <p class="card-text">10.140.000₫</p>

                    <div class="item-rating">
                      <p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star dark"></i>
                      </p>
                      <p class="item-rating-total">100</p>
                    </div>
                  </div>

                  <div class="card-footer">
                    <small class="text-body-secondary">Add to cart</small>
                    <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              </a>
            </div>
          </swiper-slide>
          <swiper-slide>
            <div class="col">
              <a href="#">
                <div class="card h-100">
                  <div class="image-card">
                    <img
                      src="{{asset('HN/styles/images/body-img/produces/laptop/acer-aspire-3-a315-510p-32ef-i3.png')}}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>

                  <div class="card-body">
                    <h6 class="card-title">Máy tính acer</h6>
                    <span class="price-and-discount">
                      <em class="card-text-sale">7.140.000₫</em>
                      <small>-30%</small>
                    </span>
                    <p class="card-text">10.140.000₫</p>

                    <div class="item-rating">
                      <p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star dark"></i>
                      </p>
                      <p class="item-rating-total">100</p>
                    </div>
                  </div>

                  <div class="card-footer">
                    <small class="text-body-secondary">Add to cart</small>
                    <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              </a>
            </div> </swiper-slide
          ><swiper-slide>
            <div class="col">
              <a href="#">
                <div class="card h-100">
                  <div class="image-card">
                    <img
                      src="{{asset('HN/styles/images/body-img/produces/laptop/acer-aspire-3-a315-510p-32ef-i3.png')}}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>

                  <div class="card-body">
                    <h6 class="card-title">Máy tính acer</h6>
                    <span class="price-and-discount">
                      <em class="card-text-sale">7.140.000₫</em>
                      <small>-30%</small>
                    </span>
                    <p class="card-text">10.140.000₫</p>

                    <div class="item-rating">
                      <p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star dark"></i>
                      </p>
                      <p class="item-rating-total">100</p>
                    </div>
                  </div>

                  <div class="card-footer">
                    <small class="text-body-secondary">Add to cart</small>
                    <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              </a>
            </div> </swiper-slide
          ><swiper-slide>
            <div class="col">
              <a href="#">
                <div class="card h-100">
                  <div class="image-card">
                    <img
                      src="{{asset('HN/styles/images/body-img/produces/laptop/acer-aspire-3-a315-510p-32ef-i3.png')}}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>

                  <div class="card-body">
                    <h6 class="card-title">Máy tính acer</h6>
                    <span class="price-and-discount">
                      <em class="card-text-sale">7.140.000₫</em>
                      <small>-30%</small>
                    </span>
                    <p class="card-text">10.140.000₫</p>

                    <div class="item-rating">
                      <p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star dark"></i>
                      </p>
                      <p class="item-rating-total">100</p>
                    </div>
                  </div>

                  <div class="card-footer">
                    <small class="text-body-secondary">Add to cart</small>
                    <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              </a>
            </div> </swiper-slide
          ><swiper-slide>
            <div class="col">
              <a href="#">
                <div class="card h-100">
                  <div class="image-card">
                    <img
                      src="{{asset('HN/styles/images/body-img/produces/laptop/acer-aspire-3-a315-510p-32ef-i3.png')}}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>

                  <div class="card-body">
                    <h6 class="card-title">Máy tính acer</h6>
                    <span class="price-and-discount">
                      <em class="card-text-sale">7.140.000₫</em>
                      <small>-30%</small>
                    </span>
                    <p class="card-text">10.140.000₫</p>

                    <div class="item-rating">
                      <p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star dark"></i>
                      </p>
                      <p class="item-rating-total">100</p>
                    </div>
                  </div>

                  <div class="card-footer">
                    <small class="text-body-secondary">Add to cart</small>
                    <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              </a>
            </div> </swiper-slide
          ><swiper-slide>
            <div class="col">
              <a href="#">
                <div class="card h-100">
                  <div class="image-card">
                    <img
                      src="{{asset('HN/styles/images/body-img/produces/laptop/acer-aspire-3-a315-510p-32ef-i3.png')}}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>

                  <div class="card-body">
                    <h6 class="card-title">Máy tính acer</h6>
                    <span class="price-and-discount">
                      <em class="card-text-sale">7.140.000₫</em>
                      <small>-30%</small>
                    </span>
                    <p class="card-text">10.140.000₫</p>

                    <div class="item-rating">
                      <p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star dark"></i>
                      </p>
                      <p class="item-rating-total">100</p>
                    </div>
                  </div>

                  <div class="card-footer">
                    <small class="text-body-secondary">Add to cart</small>
                    <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              </a>
            </div> </swiper-slide
          ><swiper-slide>
            <div class="col">
              <a href="#">
                <div class="card h-100">
                  <div class="image-card">
                    <img
                      src="{{asset('HN/styles/images/body-img/produces/laptop/acer-aspire-3-a315-510p-32ef-i3.png')}}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>

                  <div class="card-body">
                    <h6 class="card-title">Máy tính acer</h6>
                    <span class="price-and-discount">
                      <em class="card-text-sale">7.140.000₫</em>
                      <small>-30%</small>
                    </span>
                    <p class="card-text">10.140.000₫</p>

                    <div class="item-rating">
                      <p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star dark"></i>
                      </p>
                      <p class="item-rating-total">100</p>
                    </div>
                  </div>

                  <div class="card-footer">
                    <small class="text-body-secondary">Add to cart</small>
                    <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              </a>
            </div> </swiper-slide
          ><swiper-slide>
            <div class="col">
              <a href="#">
                <div class="card h-100">
                  <div class="image-card">
                    <img
                      src="{{asset('HN/styles/images/body-img/produces/laptop/acer-aspire-3-a315-510p-32ef-i3.png')}}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>

                  <div class="card-body">
                    <h6 class="card-title">Máy tính acer</h6>
                    <span class="price-and-discount">
                      <em class="card-text-sale">7.140.000₫</em>
                      <small>-30%</small>
                    </span>
                    <p class="card-text">10.140.000₫</p>

                    <div class="item-rating">
                      <p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star dark"></i>
                      </p>
                      <p class="item-rating-total">100</p>
                    </div>
                  </div>

                  <div class="card-footer">
                    <small class="text-body-secondary">Add to cart</small>
                    <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              </a>
            </div> </swiper-slide
          ><swiper-slide>
            <div class="col">
              <a href="#">
                <div class="card h-100">
                  <div class="image-card">
                    <img
                      src="{{asset('HN/styles/images/body-img/produces/laptop/acer-aspire-3-a315-510p-32ef-i3.png')}}"
                      class="card-img-top"
                      alt="..."
                    />
                  </div>

                  <div class="card-body">
                    <h6 class="card-title">Máy tính acer</h6>
                    <span class="price-and-discount">
                      <em class="card-text-sale">7.140.000₫</em>
                      <small>-30%</small>
                    </span>
                    <p class="card-text">10.140.000₫</p>

                    <div class="item-rating">
                      <p>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star dark"></i>
                      </p>
                      <p class="item-rating-total">100</p>
                    </div>
                  </div>

                  <div class="card-footer">
                    <small class="text-body-secondary">Add to cart</small>
                    <i class="fa-solid fa-cart-shopping"></i>
                  </div>
                </div>
              </a>
            </div>
          </swiper-slide>
        </swiper-container>
      </div>
    </div>
    <footer class="bg-light py-4 mt-5">
      <div class="container text-center">
        <p>&copy; 2024 Shopee Clone. All rights reserved.</p>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>

    <script src="{{asset('HN/js/main.js')}}"></script>
    <script src="{{asset('DN/javascript/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('DN/javascript/myScript.js')}}"></script>
    <script>
      const swiperEl = document.querySelector("swiper-container");
      Object.assign(swiperEl, {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 50,
          },
        },
      });
      swiperEl.initialize();
    </script>
  </body>
</html>