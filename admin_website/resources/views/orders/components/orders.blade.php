<section id="cart_items">
    <div class="container">

        @php
            $total = 0;
        @endphp
        @if (is_null($purchaselist) || count($purchaselist) == 0)
            <div class="col-sm-12">
                <div class="alert alert-info text-center">
                    Không có sản phẩm nào đã mua
                </div>
            </div>
        @else
            <div class="row delete_cart_url">
                <table class="table update_cart_url">
                    <thead style="align-items: center">
                        <tr class="cart_menu">
                            <th scope="col">#</th>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Đã nhận hàng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                            $stt = 1;
                        @endphp
                        @foreach ($purchaselist as $index => $cartitem)
                            @php
                                $total += ($cartitem['price'] * $cartitem['quantity']);
                            @endphp
                            <tr style="padding: 15px">
                                <td style="padding: 15px">{{ $stt++ }}</td>
                                <td style="padding: 15px" class=""><img style="max-width: 100%; max-height: 100%; width: 315px; height: 180px; object-fit: contain;" src="{{ config('app.base_url') . $cartitem['image'] }}" alt=""></td>
                                <td style="padding: 15px;max-width: 160px;" >{{ $cartitem['name'] }}</td>
                                <td style="padding: 15px">{{ number_format($cartitem['price']) }} VNĐ</td>
                                <td style="padding: 15px">{{ $cartitem['quantity'] }}</td>
                                <td style="padding: 15px">{{ number_format($cartitem['price'] * $cartitem['quantity']) }} VNĐ</td>
                                <td style="padding: 15px;">
                                <label style="@if ($cartitem->Status == 'Chờ xác nhận')
                                    background-color: #FF9900;color:white;padding: 10px
                                @elseif ($cartitem->Status == 'Đang giao hàng')
                                    background-color:#33CCFF; color:white;padding: 10px
                                @elseif ($cartitem->Status == 'Thành công')
                                    background-color: green;color:white;padding: 10px
                                @elseif ($cartitem->Status == 'Đã bị hủy')
                                    background-color: red;color:white;padding: 10px
                                @endif"  >
                                {{ $cartitem->Status }}</label><br>
                               
                            </td>
                         <td> @if ($cartitem->Status == 'Đang giao hàng')
                            <a href="{{ route('orders.accept',['id'=>$cartitem->id]) }}" class="btn btn-success" style="border-radius:5px;padding: 15px;margin-top: 1px;background-color: blueviolet">Đã nhận</a>
                            @endif</td>
                            
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <div class="col-md-12">
                    {{ $purchaselist->links('pagination::bootstrap-4') }}
                      </div>
                <br><br>
            </div>
        </div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>






