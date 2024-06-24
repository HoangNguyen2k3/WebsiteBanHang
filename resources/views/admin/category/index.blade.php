  <!-- Stored in resources/views/child.blade.php -->
 
  @extends('layouts.admin')
 
  @section('title')
  <title>Trang chủ</title>
  @endsection
  @section('js')
  <script src="{{ asset('vendors\sweetAlert2\sweetalert2@11.js') }}"></script>
  <script>
  function actionDelete(event){
event.preventDefault();
let urlRequest=$(this).data('url');
let that=$(this);
Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
  }).then((result) => {
    if (result.isConfirmed) {
        $.ajax({
            type:'GET',
            url:urlRequest,
            success:function(data){
                if(data.code==200){
that.parent().parent().remove();
Swal.fire({
    title: "Deleted!",
    text: "Your file has been deleted.",
    icon: "success"
  });
                }
            },
            error:function(){

            }
        });
     
    }
  });
}
$(function(){
    $(document).on('click','.delete_category',actionDelete);
})
  </script>

  @endsection
  @section('content')
    <div class="content-wrapper">
      @include('partials.content-header',['name'=>'Category','key'=>'List'])
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <a href="{{ route('categories.create') }}" class="btn btn-success float-right m-2">Thêm danh mục</a>
              </div>
              <div class="col-md-12">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">STT</th>
                      <th scope="col">Tên danh mục</th>
                      <th scope="col">Hoạt động</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($categories as $category)
                    <tr>
                      <th scope="row">{{ $category->id }}</th>
                      <td>{{ $category->name }}</td>
                      <td>
                        <a href="{{ route('categories.edit',['id'=>$category->id]) }}" class="btn btn-default">Edit</a>
                        <a href="" 
                          data-url="{{ route('categories.delete',['id'=>$category->id]) }}"
                          class="btn btn-danger delete_category">Delete</a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>               
              </div>
              <div class="col-md-12">
                {{ $categories->links('pagination::bootstrap-4') }}
                  </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  @endsection
  