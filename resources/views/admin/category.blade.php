<!DOCTYPE html>
<html>
  <head> 
  @include('admin.css')
  </head>
  <body>
    @include('admin.header')
    
    @include('admin.sidebar')
    
    <style>
      .table-add{
        margin-top: 10px;
      }
      .table-add th {
        background-color: #ffffff; /* Couleur bleue */
        text-align: center;
        font-weight: bold;
        color: color: #343a40;
      }
      .table-add td {
        text-align: center; /* Centrer le contenu des cellules */
      }
    </style>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <form action="{{url('add_category')}}" method="post">
              @csrf
                <div class="d-flex flex-column align-items-center">
                  <label for="category" class="form-label fw-bold mb-2"><h1>Add Category</h1></label>
                  <input 
                    type="text" 
                    id="category_name" 
                    name="category" 
                    class="form-control w-50 mb-3" 
                    placeholder="Enter category name" required>
                  <input 
                    class="btn btn-success" 
                    type="submit" 
                    value="Add Category">
                </div>
              </form>
              <!-- Tableau de Category -->
              <div class="table-add">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Category Name</th>
                        <th>Edit</th>

                        <th>Delete</th>
                      </tr>
                    </thead>
                    
                                       
                    <tbody>
                      @foreach ($data as $data)
                      <tr>
                        <td>{{$data->category_name}}</td>
                        <td>
                          <a class="btn btn-success" href="{{url('edit_category', $data->id)}}">Edit</a>
                        </td>
                        <td>
                          <a  class="btn btn-danger" href="
                          {{url('delete_category', $data->id)}}" >
                          Delete</a>
                          
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
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