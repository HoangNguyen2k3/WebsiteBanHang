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
      html,
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
      }

      swiper-container {
        width: 100%;
        height: 100%;
      }

      swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
  </head>

  <body>
    <swiper-container
      class="mySwiper"
      pagination="true"
      pagination-clickable="true"
      direction="vertical"
      space-between="30"
      mousewheel="true"
    >
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/left/image-vertical/black-friday-1.png')}}"
          alt=""
        />
      </swiper-slide>
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/left/image-vertical/black-friday-2.png')}}"
          alt=""
        />
      </swiper-slide>
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/left/image-vertical/black-friday-3.png')}}"
          alt=""
        />
      </swiper-slide>
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/left/image-vertical/black-friday-4.png')}}"
          alt=""
        />
      </swiper-slide>
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/left/image-vertical/black-friday-5.png')}}"
          alt=""
        />
      </swiper-slide>
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/left/image-vertical/black-friday-6.png')}}"
          alt=""
        />
      </swiper-slide>
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/left/image-vertical/black-friday-7.png')}}"
          alt=""
        />
      </swiper-slide>
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/left/image-vertical/black-friday-8.png')}}"
          alt=""
        />
      </swiper-slide>
      <swiper-slide>
        <img
          src="{{asset('HN/styles/images/body-img/left/image-vertical/black-friday-9.png')}}"
          alt=""
        />
      </swiper-slide>
    </swiper-container>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
  </body>
</html>