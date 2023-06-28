<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
    <div class="hero">
      <a href="shop.php" class="btn1">View  Products
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Exclusive Collection<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <section id="services">
            <div class="container text-center">
                <h1 class="title">WE PROVIDE</h1>
                <div class="row text-center">
                    <div class="col-md-3 services">
                        <img src="bq.jpg" class="service-img">
                        <h4>BEST PRODUCT & PRICE</h4>
                        <p>We are commited to provide the premium product in best price. </p>
                    </div>
                    <div class="col-md-3 services">
                        <img src="fd.png" class="service-img">
                        <h4>FAST DELIVERY</h4>
                        <p>We Provide Three days guarenteed delivery.</p>
                    </div>
                    <div class="col-md-3 services">
                        <img src="er.png" class="service-img">
                        <h4>EASY RETURN</h4>
                        <p>With our easy return service shopping is more fun.</p>
                    </div>
                    <div class="col-md-3 services">
                        <img src="cs.jpg" class="service-img">
                        <h4>24/7 SUPPORT</h4>
                        <p>We provide 24/7 customer support service.</p>
                    </div>
                </div>
                
        </section>
  
                   </div><!-- row Ends -->

    </div><!-- container Ends -->





    
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">                 
        
                              
            <section id="about-us">
            <div class="container">
                <h1 class="title text-center">WHY CHOOSE US ?</h1>
                <div class="row">
                    <div class="col-md-6 about-us">
                        <p class="about-title">Why we're different</p>
                        <ul>
                            <li>We Understand our client's Demand first</li>
                            <li>Believe in doing business with honesty</li>
                            <li>We deliver on time</li>
                            <li>We Provide Best Services</li>
                            <li>Customer Are Always Our First Priority</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

 
 </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

        <section id="social-media">
            <div class="container text-center">
                <p>FIND US ON SOCIAL MEDIA</p>
                <div class="social-icons">
                    <a href="http://facebook.com"><img src="fbl.png"></a>
                    <a href="http://instagram.com"><img src="inl.png"></a>
                    <a href="http://twitter.com"><img src="twl.png"></a>
                    <a href="http://whatsapp.com"><img src="whl.png"></a>
                </div>
            </div>
        </section>


        <div class="footer-nav__col footer-nav__col--info">
        <div class="footer-nav__heading">Information</div>
        <ul class="footer-nav__list">
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">The brand</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Local stores</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Customer service</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Privacy &amp; cookies</a>
          </li>
          <li class="footer-nav__item">
            <a href="#" class="footer-nav__link">Site map</a>
          </li>
        </ul>
      </div>
    
          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Your account</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Sign in</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Register</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">View cart</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">View your lookbook</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Track an order</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Update information</a>
              </li>
            </ul>
          </div> 

                  

        <div class="footer-nav__col footer-nav__col--contacts">
        <div class="footer-nav__heading">Contact details</div>
        <address class="address">
        
                <P><a href="https://www.google.com/maps/place/Board+Bazaar/@23.9442549,90.3896577,15.65z/data=!4m5!3m4!1s0x3755c4ae46778ead:0x8d1f5625c7496b4d!8m2!3d23.9451326!4d90.3827861"><i class="fa fa-map-marker"></i>Penguin Mart</P>
      </address>
        <div class="phone">
          Telephone:
          <a class="phone__number" href="tel:01725805104/01874619763">01725805104/01874619763</a>
        </div>
        <div class="email">
          Email:
          <a href="mailto:trsiam13@gmail.com" class="email__addr">trsiam13@gmail.com</a>
        </div>
      </div>

    </div>
  </div>


      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; <?php echo date("Y");?> Penguin Mart &trade;
          </div>

          <div class="developer">
            Developed by Siam & Tasrif 
          </div>

          

        </div>
      </div>
    </footer>
</body>

</html>
