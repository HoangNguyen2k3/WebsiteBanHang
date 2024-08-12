<section id="cart_items">
    <div class="container">

        @php
            $total = 0;
        @endphp
        @if (is_null($carts) || count($carts) == 0)
            <div class="col-sm-12">
                <div class="alert alert-info text-center">
                    Không có sản phẩm nào trong giỏ hàng
                </div>
            </div>
        @else
            <div class="row delete_cart_url" data-url="{{ route('deleteCart') }}">
                <table class="table update_cart_url" data-url="{{ route('updateCart') }}">
                    <thead style="align-items: center">
                        <tr class="cart_menu">
                            <th scope="col">#</th>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $total = 0;
                            $stt = 1;
                        @endphp
                        @foreach ($carts as $index => $cartitem)
                            @php
                                $total += ($cartitem['price'] * $cartitem['quantity']);
                            @endphp
                            <tr style="padding: 5px">
                                <td style="padding: 5px">{{ $stt++ }}</td>
                                <td style="padding: 5px" class=""><img style="max-width: 100%; max-height: 100%; width: 320px; height: 180px; object-fit: contain;" src="{{ config('app.base_url') . $cartitem['image'] }}" alt=""></td>
                                <td style="padding: 5px" style="max-width: 160px;">{{ $cartitem['name'] }}</td>
                                <td style="padding: 5px">{{ number_format($cartitem['price']) }} VNĐ</td>
                                <td style="padding: 5px"><input style="max-width: 80px;" type="number" value="{{ $cartitem['quantity'] }}" min="1" class="quantity"></td>
                                <td style="padding: 5px">{{ number_format($cartitem['price'] * $cartitem['quantity']) }} VNĐ</td>
                                <td style="padding: 5px">
                                    <a href="" data-id="{{ $index }}" class="btn btn-primary cart_update" style="margin-top: 0px; border-radius: 4px">Cập nhật</a>
                                    <a href="" data-id="{{ $index }}" class="btn btn-danger cart_delete1">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <div class="col-12 text-end">
                    <h2 style="color: rgb(247, 148, 0);">Tổng tiền: {{ number_format($total) }} VNĐ</h2>
                    @if($total > 0)
                        <a href="{{ route('checkOut') }}" class="btn btn-success btn-lg" style="margin-top: 20px;">Thanh toán mua hàng</a>
                    @else
                        <a  class="btn btn-success btn-lg" id="checkoutButton" style="margin-top: 20px;">Thanh toán mua hàng</a>
                    @endif
                    <br>
                </div>
                <br><br>
            </div>
        </div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(document).ready(function() {
    function cartUpdate(event) {
        event.preventDefault();
        console.log('Cart update button clicked');
        let urlUpdateCart = $('.update_cart_url').data('url');
        let id = $(this).data('id');
        let quantity = $(this).closest('tr').find('input.quantity').val();
        
        // Disable the update button to prevent multiple clicks
        $(this).prop('disabled', true);

        $.ajax({
            type: "GET",
            url: urlUpdateCart,
            data: { id: id, quantity: quantity },
            success: function(data) {
                console.log('AJAX request successful with data:', data);
                if (data.code == 200) {
                    $('.cart_wrapper').html(data.cart_component);
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Cập nhật giỏ hàng thành công",
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        // Enable the update button after success message is dismissed
                        $(this).prop('disabled', false);
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('AJAX request failed:', textStatus, errorThrown);
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Có lỗi xảy ra",
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {
                    // Enable the update button after error message is dismissed
                    $(this).prop('disabled', false);
                });
            }
        });
    }

    function cartDelete(event) {
        event.preventDefault();
        console.log('Cart delete button clicked');
        let urlDelete = $('.delete_cart_url').data('url');
        let id = $(this).data('id');
        
        $.ajax({
            type: "GET",
            url: urlDelete,
            data: { id: id },
            success: function(data) {
                console.log('AJAX request successful with data:', data);
                if (data.code == 200) {
                    $('.cart_wrapper').html(data.cart_component);
                    Swal.fire({
                        position: "center",
                        icon: "success",
                        title: "Xóa sản phẩm khỏi giỏ hàng thành công",
                        showConfirmButton: false,
                        timer: 1500
                    });
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('AJAX request failed:', textStatus, errorThrown);
                Swal.fire({
                    position: "center",
                    icon: "error",
                    title: "Có lỗi xảy ra",
                    showConfirmButton: false,
                    timer: 1500
                });
            }
        });
    }

    // Ensure handlers are not bound multiple times
    $(document).off('click', '.cart_update').on('click', '.cart_update', cartUpdate);
    $(document).off('click', '.cart_delete1').on('click', '.cart_delete1', cartDelete);
});
    // Bắt sự kiện click vào nút "Thanh toán mua hàng"
    
</script>

<script>
    document.getElementById('checkoutButton').addEventListener('click', function() {
        Swal.fire({
  icon: "error",
  title: "Oops...",
  text: "Giỏ hàng phải có sản phẩm để thực hiện thanh toán",
});
    });
</script>







