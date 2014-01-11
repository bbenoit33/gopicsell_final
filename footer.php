   <section id="notifyme">
    <div class="max_width_wrapper">
      <h1> Have something to sell? </h1>
      <a href="submit.php"><h2 class="green_button"> Get Started </h2></a>
    </div>
  </section>
  <footer class="flap">
    <div class="max_width_wrapper">
      <nav id="social_media">
        <ul>
          <li class='title'> Stay Connected </li>
        <li><i class="fi-social-facebook s_button"></i></li>
        <li><i class="fi-social-twitter s_button"></i></li>
        <li><i class="fi-social-pinterest s_button"></i></li>
        <li><i class="fi-social-google-plus s_button"></i></li>
        </ul>
      </nav>
      <ul id="contact_details">
        <li> <b>Address</b>: 175 Varick Street -- New York, NY 10014 </li>
        <li> <b>Phone</b>: 212-628-8000</li>
        <li> <b>Email</b>: sales@gopicsell.com</li>     
      </ul>
      <ul id="selling">
        <li> <a href="recent_sold.php">Recent Sales</a> </li>
        <li> <a href="testimonials.php">Testimonials</a> </li>
        <li><a href="guidelines.php">Guidelines</a></li>
      </ul>
      <ul id="support">
        <li> <a href="faq.php">FAQs</a> </li>
        <li> <a href="terms_and_conditions.php">Terms & Conditions</a> </li>
        <li> Privacy Policy </li>
      </ul>
    </div>
  </footer>
    
    <script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
      <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 17,
    scrollwheel: false,
    center: new google.maps.LatLng(40.7274, -74.005717)
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

        var myLatlng = new google.maps.LatLng(40.7274, -74.005717);
        var marker = new google.maps.Marker({
          position: myLatlng,
          map: map,
          title: 'goPicsell'
      });


}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </body>
</html>
