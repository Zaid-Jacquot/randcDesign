<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <h2 class="text-center mb-4">Update Product</h2>
            <form action="{{url('edit_product', $data->id)}}" method="POST" enctype="multipart/form-data" class="p-4 bg-dark text-light rounded">
              @csrf
              <!-- Champ de titre-->
              <div class="mb-3">
                <label for="title" class="form-label text-warning">Title</label>
                <input type="text" class="form-control bg-dark text-light border-warning" id="title" name="title" value="{{$data->title}}">
              </div>
            
              <!-- Champ description-->
              <div class="mb-3">
                <label for="description" class="form-label text-warning">Description</label>
                <textarea class="form-control bg-dark text-light border-warning" id="description" name="description">{{$data->description}}</textarea>
              </div>
            
              <!-- Champ price-->
              <div class="mb-3">
                <label for="price" class="form-label text-warning">Price</label>
                <input type="text" class="form-control bg-dark text-light border-warning" id="price" name="price" value="{{$data->price}}">
              </div>
            
              <!-- Champ Quantité-->
              <div class="mb-3">
                <label for="quantity" class="form-label text-warning">Quantity</label>
                <input type="number" class="form-control bg-dark text-light border-warning" id="quantity" name="quantity" value="{{$data->quantity}}">
              </div>
            
              <!-- Champ Categories-->
              <div class="mb-3">
                <label for="category" class="form-label text-warning">Category</label>
                
                <select class="form-select bg-dark text-light border-warning" id="category" name="category">
                  <option value="{{$data->category}}">{{$data->category}}</option>
                  @foreach ($category as $category)
                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                  @endforeach
                </select>
                
                
            
              <!-- Champ Image-->
              <div class="mb-3">
                <label for="current-image" class="form-label text-warning">Current Image</label>
                <div>
                  <img width="150" src="/products/{{$data->image}}" class="rounded border border-warning">
                </div>

                <div>
                  <label for="new-image">New Image</label>
                  <input type="file" name="image">
                </div>
              </div>
            
              <!-- Bouton de soumission-->
              <div class="text-center">
                <input class="btn btn-warning px-4" type="submit" value="Update Product">
              </div>
            </form>
            
          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>