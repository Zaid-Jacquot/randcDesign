<header class="header_section bg-dark">
  <nav class="navbar navbar-expand-lg custom_nav-container navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <span class="text-warning">R&C Design</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="{{url('/')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="why.html">Why Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="testimonial.html">Testimonial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
        </ul>

        

        <div class="d-flex align-items-center gap-4">
          <a class="btn btn-outline-warning" href="{{url('/login')}}">
            <i class="fa fa-user" aria-hidden="true"></i> Logout
          </a>
          <a class="btn btn-outline-warning" href="{{url('/register')}}">
            <i class="fa fa-vcard" aria-hidden="true"></i> Register
          </a>
          <a class="btn btn-outline-warning" href="#">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
          
          </a>
          <form class="d-flex">
            <input class="form-control bg-dark text-light border-warning" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-warning ms-3" type="submit">
              <i class="fa fa-search" aria-hidden="true"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </nav>
</header>
