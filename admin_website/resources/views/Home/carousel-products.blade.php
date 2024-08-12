<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />

    <style>
      /* html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    } */

      swiper-container {
        width: 100%;
        /* padding-top: 50px;
      padding-bottom: 50px; */
      }

      swiper-slide {
        background-position: center;
        background-size: cover;
        width: 300px;
        height: 300px;
      }

      swiper-slide a {
        display: block;
        width: 100%;
        height: 100%;
      }

      swiper-slide a img {
        display: block;
        width: 100%;
        height: 100%;
      }
    </style>
  </head>

  <body>
    <swiper-container
      class="mySwiper"
      pagination="true"
      effect="coverflow"
      grab-cursor="true"
      centered-slides="true"
      slides-per-view="auto"
      coverflow-effect-rotate="50"
      coverflow-effect-stretch="0"
      coverflow-effect-depth="100"
      coverflow-effect-modifier="1"
      coverflow-effect-slide-shadows="true"
    >
      <swiper-slide>
        <a href="{{ route('details_products', ['id' => 19]) }}">
          <img
            src="{{asset('HN/styles/images/body-img/produces/anh-may-tinh-laptop-trang-cho-da.png')}}"
          />
        </a>
      </swiper-slide>
      <swiper-slide>
        <a href="{{ route('details_products', ['id' => 20]) }}">
          <img
            src="{{asset('HN/styles/images/body-img/produces/pc_gundam_build_f202973fae2e4e5e.png')}}"
          />
        </a>
      </swiper-slide>
      <swiper-slide>
        <a href="{{ route('details_products', ['id' => 21]) }}">
          <img
            src="{{asset('HN/styles/images/body-img/produces/chup-anh-dep-bang-dien-thoai-9.png')}}"
          />
        </a>
      </swiper-slide>
      <swiper-slide>
       
        <a href="{{ route('details_products', ['id' => 22]) }}">  <img
          src="{{asset('HN/styles/images/body-img/produces/co-nen-mua-may-chup-hinh-lay-nga.png')}}"
        /></a>
      </swiper-slide>
      <swiper-slide>
        <a href="{{ route('details_products', ['id' => 23]) }}">
          <img
            src="{{asset('HN/styles/images/body-img/produces/galaxy-note-20-ultra-xtsmart.png')}}"
          />
        </a>
      </swiper-slide>
      <swiper-slide>
        <a href="{{ route('details_products', ['id' => 24]) }}">
          <img
            src="{{asset('HN/styles/images/body-img/produces/google-pixel-fold-1578.png')}}"
          />
        </a>
      </swiper-slide>
      <swiper-slide>
        <a href="{{ route('details_products', ['id' => 25]) }}"
          >\
          <img
            src="{{asset('HN/styles/images/body-img/produces/hinh-anh-ro-ri-iphone-13-pro 1.png')}}"
          />
        </a>
      </swiper-slide>
      <swiper-slide>
        <a href="{{ route('details_products', ['id' => 26]) }}">
          <img
            src="{{asset('HN/styles/images/body-img/produces/ipad-m2-5g-1.png')}}"
          />
        </a>
      </swiper-slide>
      <swiper-slide>
        <a href="{{ route('details_products', ['id' => 27]) }}">
          <img
            src="{{asset('HN/styles/images/body-img/produces/Máy-ảnh-film-nikon.png')}}"
          />
        </a>
      </swiper-slide>
    </swiper-container>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  </body>
</html>
