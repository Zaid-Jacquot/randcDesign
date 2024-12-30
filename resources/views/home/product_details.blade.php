<!DOCTYPE html>
<html>

<head>
    @include('home.css')

    <style>
        .detail-box{
            padding: 10px;
        }
    </style>
    
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')
    <!--*** end header section ***-->

    <!-- slider section -->

  </div>
 
  <!--*/*/*/*/*/*/*Product Details start*/*/*/*/*/*/*/*/*/*-->



  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">


       
          
        @if($data)
        <div class="col-md-10">
          <div class="box">
            <div class="img-box mb-3" style="height: 600px; display: flex; align-items: center; justify-content: center;">
                <img src="/products/{{$data->image}}" alt="Product Image" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: cover; border-radius: 5px;">
              </div>
                <div class="detail-box">
                        <h6>{{$data->title}}</h6>
                  
                        <h6>Price<span> {{$data->price}} </span></h6>
                </div>

                <div class="detail-box">
                    <h6>Category: {{$data->category}}</h6>
              
                    <h6>Available Quantity<span> {{$data->quantity}} </span></h6>
                </div>

                <div class="detail-box">
                    <p>{{$data->description}}</p>
                </div>

              
          </div>
        </div>
        @endif

       
      </div>
      <div class="btn-box">
        <a href="">
          View All Products
        </a>
      </div>
    </div>
  </section>




  <!--*/*/*/*/*/*/*Product Details start End*/*/*/*/*/*/*/*/*/*-->


   

  <!-- info section -->

  @include('home.footer')

  <!-- end info section -->


  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js')}}">
  </script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>