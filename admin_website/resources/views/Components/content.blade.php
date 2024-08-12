<div class="right-container">
  <!-- produces -->
  <div class="product-container">
      <div class="title">
          <p>GỢI Ý SẢN PHẨM</p>
      </div>
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
  </div>

  <!-- outstanding products -->
  <div class="product-container">
      <div class="title">
          <p>SẢN PHẨM NỔI BẬT</p>
      </div>

      <div id="produces" class="row row-cols-3 row-cols-md-4 g-4">
        @foreach ($randomProducts as $product1)
        <div class="col" style="margin-bottom: 30px">
            <a href="{{ route('details_products',['id'=>$product1->id]) }}">
                <div class="card h-100">
                    <div class="image-card">
                        <img src="{{ config('app.base_url').$product1->feature_image_path }}" class="card-img-top" alt="...">
                    </div>

                    <div style="flex: 1 1 auto; padding-left: 15px; padding-right: 5px; color: var(--bs-card-color);">
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
                    <a style="margin-top: 0px" class="text-body-secondary add-to-cart" data-url="{{ route('addToCart',['id'=>$product1->id]) }}">
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
  </div>
  <!-- outstanding products -->
</div>
