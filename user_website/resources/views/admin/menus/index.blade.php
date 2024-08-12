  <!-- Stored in resources/views/child.blade.php -->
 
  @extends('layouts.admin')
 
  @section('title')
  <title>Trang chủ</title>
  @endsection
   
  @section('content')
    <div class="content-wrapper">
      @include('partials.content-header',['name'=>'List Purchase','key'=>'List'])
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Tên sản phẩm</th>
                      <th scope="col">Hình ảnh</th>
                      <th scope="col">Trạng thái</th>
                      <th scope="col">Số lượng</th>
                      <th scope="col">Tổng tiền</th>
                      <th scope="col">SĐT và Địa chỉ</th>
                      <th scope="col">Action</th>
                      

                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $index=1;
                      ?>
                    @foreach ($purchaselist as $item)
                    <tr>
                      <th scope="row">{{ $index++ }}</th>
                      <td>{{ $item->name }}</td>
                      <td> <img src="{{ $item->image}}" style="    width:150px ;
    height: 100px;"></img></td>
                      <td>{{ $item->Status }}</td>
                      <td>{{ $item->quantity }}</td>
                      <td>{{number_format($item->price*$item->quantity)  }} VND</td>
                      <td>{{ $item->SDT }} <br> {{ $item->Address }}</td>
                      <td>
                        @if( $item->Status=='Chờ xác nhận')
                        <a href="{{ route('productlist.accept',['id'=>$item->id]) }}" class="btn btn-success">Accept</a>
                        <a href="{{ route('productlist.delete',['id'=>$item->id]) }}" class="btn btn-danger">Delete</a>
                        @elseif($item->Status=='Đã bị hủy')
                        <i class="fas fa-times-circle" style="color: red;"></i>
                        @else
                        <i class="fas fa-check-circle" style="color: green;"></i>
                        @endif
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>               
              </div>
              <div class="col-md-12">
                {{ $purchaselist->links('pagination::bootstrap-4') }}
                  </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  @endsection
  