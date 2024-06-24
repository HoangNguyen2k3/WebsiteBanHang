  <!-- Stored in resources/views/child.blade.php -->
 
  @extends('layouts.admin')
 
  @section('title')
  <title>Trang chủ</title>
  @endsection
   
  @section('css')
  <link rel="stylesheet" href="{{ asset('admins/slider/add/add.css') }}">
  @endsection

  @section('content')
        <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    @include('partials.content-header',['name'=>'Slider','key'=>'Add'])
  
      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-6">
  
                  <form action="{{ route('slider.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                      <div class="form-group">
                        <label>Tên slider</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                        value="{{ old('name') }}"
                        name="name"
                        placeholder="Nhập tên slider">
                      </div>
                      @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                      <div class="form-group">
                        <label>Mô tả</label>
                        <textarea name="description" rows="4" 
                        class="form-control @error('description') is-invalid @enderror" 
                        >{{ old('description') }}</textarea>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                      @enderror
                    </div>
                      
                      <div class="form-group">
                        <label>Hình ảnh</label>
                        <input type="file" class="form-control-file @error('image_path') is-invalid @enderror" 
                        name="image_path"
                        value="{{ old('image_path') }}">
                      </div>
                      @error('image_path')
                      <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
              </div>
            
                
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  @endsection
  