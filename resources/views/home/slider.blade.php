<style>
  .typing-text {
  font-size: 1.5rem; /* Augmente la taille du texte */
  overflow: hidden; /* Masquer le texte qui déborde */
  white-space: nowrap; /* Garder le texte sur une seule ligne */
  border-right: 3px solid #333; /* Curseur de saisie */
  animation: typing 5s steps(50, end) infinite, blink-caret 0.5s step-end infinite;
}

/* Animation de typing */
@keyframes typing {
  0% {
    width: 0;
  }
  50% {
    width: 100%;
  }
  100% {
    width: 0;
  }
}

/* Animation du curseur clignotant */
@keyframes blink-caret {
  from, to {
    border-color: transparent;
  }
  50% {
    border-color: #333;
  }
}


</style>

<section class="slider_section">
  <div class="slider_container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box"> 
                  <h1>
                    Welcome To Our <br>
                    r&c Shop
                  </h1>
                  <div class="container mt-5">
                    <p class="fs-5 text-muted mt-4 typing-text">
                      At <span class="fw-bold text-dark">R&C Royal Design</span>, we believe that your home deserves the best. 
                      Explore our collection of <span class="text-dark fw-semibold">exquisite interior decoration models</span> crafted to transform your living space into a masterpiece. 
                      Whether you're searching for <em>timeless elegance</em> or <em>modern sophistication</em>, our designs cater to every taste and need.
                    </p>
                  </div>
                  
                  
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
              <div class="col-md-5 ">
                <div class="img-box">
                  <img style="width:600px" src="images/rideau_3.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      
    </div>
  </div>
</section>