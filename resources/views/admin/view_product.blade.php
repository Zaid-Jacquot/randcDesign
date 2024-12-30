<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')

  <style>
   input[type='search'] {
            width: 500px;
            padding: 10px;
            background-color: #333; /* Fond sombre */
            color: #fff; /* Texte clair */
            border: 1px solid #555; /* Bordure discrète */
            border-radius: 5px; /* Coins arrondis */
            outline: none; /* Supprime le contour par défaut */
            transition: all 0.3s ease; /* Effet de transition */
        }

        input[type='search']::placeholder {
            color: #bbb; /* Placeholder en couleur claire */
        }

        input[type='search']:focus {
            border-color: #777; /* Changement de bordure au focus */
            background-color: #444; /* Changement du fond au focus */
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

            <form action="{{url('product_search')}}" method="GET">
              <input type="search" name="search">
              <input type="submit" class="btn btn-secondary" value="search">
            </form>



            <div class="container mt-4">
              <table class="table table-striped table-bordered table-hover">
                <thead class="table-dark">
                  <tr>
                    <th>Product Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>

                @foreach ($product as $products )
                <tbody>
                  <tr>
                    <td>{{$products->title}}</td>
                    <td>{{$products->description}}</td>
                    <td>{{$products->category}}</td>
                    <td>{{$products->price}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>
                      <img height="120" width="120" src="products/{{$products->image}}">
                    </td>

                    <td>
                      <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Edit</a>
                    </td>
                    <td>
                      <a class="btn btn-danger" href="{{url('delete_product',$products->id)}}">Delete</a>
                    </td>
                  </tr>
                </tbody>
                @endforeach
                
              </table>
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