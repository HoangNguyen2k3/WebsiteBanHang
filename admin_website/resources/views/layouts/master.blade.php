<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>E-Shop</title>
        <link
          rel="icon"
          type="image/x-icon"
          href="{{asset('HN/styles/images/header-img/logo-1.jpg')}}"
        />
    
        <!-- link css -->
        <link rel="stylesheet" href="{{asset('HN/styles/style.css')}}" />
    
        <link rel="stylesheet" href="{{asset('HN/styles/carousel.css')}}" />
    
        <!-- link bootstrap -->
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
          crossorigin="anonymous"
        />
    
        <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
        />
    
        <!-- link fontawesome -->
        <script
          src="https://kit.fontawesome.com/9c5c28f4df.js"
          crossorigin="anonymous"
        ></script>
    
        <!-- link js -->
        <script
          type="text/javascript"
          src="{{asset('HN/js/javascript.js')}}"
        ></script>
      </head>
    <body>
        @include('Components.header')
            @yield('content')  
            @include('Components.footer')   
        
            <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"
          ></script>
      
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
          <!-- link bootstrap -->
      
          <script src="{{asset('HN/js/main.js')}}"></script>
      
          <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
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
    @yield('js')
    </body>
</html>