@extends('layouts.admin')

@section('title')
<title>Add Product</title>
@endsection

@section('css')
<link href="{{ asset('vendors/select2/select2.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admins/product/add/add.css') }}" rel="stylesheet" />
<style type="text/css">
    .ck-editor__editable_inline {
        height: 450px;
    }
</style>
@endsection

@section('content')
<div class="content-wrapper">
    @include('partials.content-header', ['name' => 'Product', 'key' => 'Add'])
    {{-- <div class="col-md-12">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    </div> --}}
    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        @csrf
                        <div class="form-group">
                            <label>Tên sản phẩm</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Nhập tên sản phẩm" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Giá sản phẩm</label>
                            <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Nhập giá sản phẩm" value="{{ old('price') }}">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Số lượng</label>
                            <input type="number" class="form-control" name="max_num" placeholder="Nhập số lượng sản phẩm" value="{{ old('max_num') }}">
                        </div>
                        <div class="form-group">
                            <label>Hãng</label>
                            <input type="text" class="form-control" name="brand" placeholder="Nhập hãng sản phẩm">
                        </div>

                        <div class="form-group">
                            <label>Ảnh sản phẩm</label>
                            <input type="file" class="form-control-file" name="feature_image_path">
                        </div>
                        <div class="form-group">
                            <label>Ảnh chi tiết</label>
                            <input type="file" class="form-control-file" multiple name="Image_path[]">
                        </div>
                        <div  class="form-group">
                            <label>Chọn danh mục</label>
                            <select class="form-control" name="category_id">
                                <option value="0">Chọn danh mục</option>
                                {!! $htmlOption !!}
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Nhập tag cho sản phẩm</label>
                            <br>
                            <select name="tags[]" class="form-control tags_select_choose" multiple="multiple"></select>
                        </div>
                      
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                          <label>Nhập nội dung</label>
                          <textarea id="editor5" class="form-control"  name="contents" rows="8"></textarea>
                          {{-- @error('content')
                          <div class="alert alert-danger">{{ $message }}</div>
                      @enderror --}}
                        </div>
                      <div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

@section('js')
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
    $(function(){
        $(".tags_select_choose").select2({
            tags: true,
            tokenSeparators: [',', ' ']
        });
        $(".select2_init").select2({
            placeholder: "Select a state",
            allowClear: true
        });

        ClassicEditor
            .create(document.querySelector('#editor5'), {
                ckfinder: {
                    uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                }
            })
            .catch(error => {
                console.error(error);
            });
    });
</script>
<script src="{{ asset('admins/product/add/add.js') }}"></script>
@endsection
