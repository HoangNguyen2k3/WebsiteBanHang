  <!-- Stored in resources/views/child.blade.php -->
 
  @extends('layouts.admin')
 
  @section('title')
  <title>Add Product</title>
  @endsection
  @section('css')
  <link rel="stylesheet" href="{{ asset('admins/product/index/list.css') }}">
  @endsection
  @section('js')
  <script src="{{ asset('vendors\sweetAlert2\sweetalert2@11.js') }}"></script>
  <script src="{{ asset('admins/product/index/list.js') }}"></script>

  @endsection
  @section('content')
    <div class="content-wrapper">
      @include('partials.content-header',['name'=>'Product','key'=>'List'])
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <a href="{{ route('product.create') }}" class="btn btn-success float-right m-2">Thêm sản phẩm</a>
              </div>
              <div class="col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Tên sản phẩm</th>
                      <th scope="col">Giá</th>
                      <th scope="col">Hình ảnh</th>
                      <th scope="col">Danh mục</th>
                      <th scope="col">Hoạt động</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $ProductItem)
                    <tr>
                      <th scope="row">{{ $ProductItem->id }}</th>
                      <td>{{ $ProductItem->name }}</td>
                      <td>{{ number_format($ProductItem->price) }}đ</td>
                      <td><img class="product_image_150_100"src="{{ $ProductItem->feature_image_path }}" alt=""></td>
                      <td>{{optional($ProductItem->category)->name }}</td>
                      <td>
                        <a href="{{ route('product.edit',['id'=>$ProductItem->id]) }}" class="btn btn-default">Edit</a>
                        <a href=""
                        data-url="{{ route('product.delete',['id'=>$ProductItem->id]) }}"
                         class="btn btn-danger action_delete">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>               
              </div>
              <div class="col-md-12">
                {{ $products->links('pagination::bootstrap-4') }}
                  </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  @endsection
  