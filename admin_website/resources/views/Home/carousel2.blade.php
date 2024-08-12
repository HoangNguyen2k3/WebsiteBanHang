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

      /* swiper-container {
      width: 300px;
      height: 300px;
      position: absolute;
      left: 50%;
      top: 50%;
      margin-left: -150px;
      margin-top: -150px;
    } */

      swiper-slide {
        background-position: center;
        background-size: cover;
        border-radius: 10px;
      }

      swiper-slide img {
        display: block;
        width: 100%;
        border-radius: 10px;
      }
    </style>
  </head>

  <body>
    <swiper-container
      class="mySwiper"
      pagination="true"
      effect="cube"
      grab-cursor="true"
      cube-effect-shadow="true"
      cube-effect-slide-shadows="true"
      cube-effect-shadow-offset="20"
      cube-effect-shadow-scale="0.94"
    >
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/cube/canva-xám-ảnh-ghép-dải-phim-khôn.png')}}"
        />
      </swiper-slide>
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/cube/hinh-nen-may-tinh-4k-cong-nghe-4.png')}}"
        />
      </swiper-slide>
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/cube/man-hinh-may-tinh-van-phong-1-1.png')}}"
        />
      </swiper-slide>
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/cube/tai-nghe-kh--ng-d--y-cover-16256.png')}}"
        />
      </swiper-slide>
    </swiper-container>

    <script src="{{asset('HN/styles/images/body-img/cube/nen-mua-may-anh-cua-hang-nao-thi.png')}}"></script>
  </body>
</html>
