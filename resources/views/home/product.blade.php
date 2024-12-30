<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Latest Products
        </h2>
      </div>
      <div class="row">


        @foreach ($product as $products )
          
        
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            
              <div class="img-box">
                <img src="products/{{$products->image}}" alt="">
              </div>
              <div class="detail-box">
                <h6>{{$products->title}}</h6>
                  
                <h6>Price<span> {{$products->price}} </span></h6>
              </div>

              <!-- Description du produit -->
              <p class="product-description" style="font-size: 14px; color: #555;">
                {{ Str::limit($products->description, 50, '...') }}
            </p>
              <div class="new"><span>New</span>
              </div>
              <div>
                <a class="btn btn-secondary" href="{{url('product_details', $products->id)}}">Details</a>

                <a class="btn btn-success" href="{{url('add_cart', $products->id)}}">Add to Cart </a>
              </div>
          </div>
        </div>
        @endforeach

       
      </div>
      <div class="btn-box">
        <a href="">
          View All Products
        </a>
      </div>
    </div>
  </section>