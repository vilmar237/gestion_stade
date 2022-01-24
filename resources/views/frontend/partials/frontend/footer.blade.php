
<section id="services" class="container">
  <div class="row">
    <div class="col-md-12 title">
      <h2>Customer Services</h2>
      <span class="underline">&nbsp;</span>
    </div>

    <!-- Service Box start -->
    <div class="col-md-6">
      <div class="service-box wow fadeInLeft" data-wow-offset="100">
        <div class="service-icon">+</div>
        <h3 class="service-title">Rapidité & Diponibilité</h3>
        <div class="clearfix"></div>
        <p class="service-content"> Service diponible 24h/24h, effectuer une réservation rapide pour disposer d'une plage horaire sur le stade.</p>
      </div>
    </div>
    <!-- Service Box end -->

    <!-- Service Box start -->
    <div class="col-md-6">
      <div class="service-box wow fadeInRight" data-wow-offset="100">
        <div class="service-icon">+</div>
        <h3 class="service-title">Paiement Electronique </h3>
        <div class="clearfix"></div>
        <p class="service-content">finaliser vos paiements par compte Orange Money ou Mobile Money.</p>
      </div>
    </div>
    <!-- Service Box end -->

    <!-- Service Box start -->
    
    <!-- Service Box end -->
    <section id="contact" class="container wow bounceInUp" data-wow-offset="50">
      <div class="row">
        <div class="col-md-12">
          <h2>Contact Us</h2>
        </div>
        <!-- // TODO -- Ce bout de code permet d'afficher des erreurs 
        //sur cette page s'il y en avait au moment de la soumission du formulaire -->
        @if($errors->any())
          @foreach($errors->all() as $error)
              <p class="text-danger">{{$error}}</p>
          @endforeach
        @endif

        <!--// TODO --ce bout de code permet d'afficher les messages de succès-->
        @if(Session::has('success'))
        <p class="text-success">{{session('success')}}</p>
        @endif

        <div class="col-md-4 col-xs-12 pull-right">
          <h4 class="contact-box-title">Customer Center</h4>
          <div class="contact-box">
            
            <div class="contact-box-name">GO SPORT</div>
            <div class="contact-box-phon"><span class="highlight">Phone:</span> 237 6999 999 999</div>
            <div class="contact-box-email"><span class="highlight">Email:</span> rebond@gmail.com</div>
            <div class="clearfix"></div>
          </div>
          <div class="contact-box-border">&nbsp;</div>

          <div class="contact-box-divider">&nbsp;</div>

          <h4 class="contact-box-title">Change or Cancel Reservation</h4>
          <div class="contact-box">
            
            <div class="contact-box-name">IT SODICAM</div>
            <div class="contact-box-phon"><span class="highlight">Phone:</span> 237 777 777 777</div>
            <div class="contact-box-email"><span class="highlight">Email:</span> rebond@gmail.com</div>
            <div class="clearfix"></div>
          </div>
         

          
          <div class="contact-box-border">&nbsp;</div>
        </div>
        <div class="col-md-8 col-xs-12 pull-left">
          <p class="contact-info">Besoin d'information supplémentaire? <br>
            <span class="address"><span class="highlight">Address:</span>  REBOND stade bonapriso douala </span></p>
             <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://maps.google.com/maps?q=new%20delphi&t=&z=13&ie=UTF8&iwloc=&output=embed"
          frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
        </div>

      </div>
    </section>

  </div>
</section>


<a href="#" class="scrollup">ScrollUp</a>


<!-- Footer start -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <ul class="footer-nav">
          <li><a class="scroll-to" href="#top">Home</a></li>
          <li><a class="scroll-to" href="#services">Service</a></li>
         
         
          
          <li><a class="scroll-to" href="#contact">Contact</a></li>
        </ul>
        <div class="clearfix"></div>
        <div class="footer">
          <div class="copyright">
              <p>Copyright © Designed &amp; Developed by <a href="#" target="_blank">Vilmar</a> 2022</p>
          </div>
      </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer end -->