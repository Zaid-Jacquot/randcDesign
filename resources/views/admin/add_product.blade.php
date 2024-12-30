<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')

  <style>
    .form-control {
        border-width: 2px; /* Augmente l'épaisseur */
        border-color: #fff; /* Change la couleur de la bordure (noir par défaut) */
        border-style: solid; /* Style de bordure */
    }

    .form-control:focus {
        border-width: 3px; /* Épaisseur lors du focus */
        border-color: #007bff; /* Couleur sur focus */
        box-shadow: none; /* Supprime l'ombre par défaut de Bootstrap */
    }
</style>
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

              
            <div class="container mt-5">
                <label for="category" class="form-label fw-bold mb-2"><h1>Add Product</h1></label>
                <form action="{{url('upload_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Product Title</label>
                        <input type="text" id="title" name="title" class="form-control" placeholder="Enter product title" required>
                    </div>
            
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea id="description" name="description" class="form-control" rows="4" placeholder="Enter product description" required></textarea>
                    </div>
            
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" id="price" name="price" class="form-control" placeholder="Enter product price" required>
                    </div>
            
                    <div class="mb-3">
                        <label for="qty" class="form-label">Quantity</label>
                        <input type="number" id="qty" name="qty" class="form-control" placeholder="Enter quantity" required>
                    </div>
            
                    <div class="mb-3">
                        <label for="category" class="form-label">Product Category</label>
                        <select id="category" name="category" class="form-select" required>
                            <option>Select a option</option>
                            @foreach ($category as $category )
                                <option value="{{$category->category_name}}">
                                    {{$category->category_name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
            
                    <div class="mb-3">
                        <label for="image" class="form-label">Product Image</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>  
            
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Add Product</button>
                    </div>
                </form>
            </div>
            

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