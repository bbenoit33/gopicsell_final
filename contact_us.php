<?php include("header.php"); ?>

<section class="google_header">
      <div id="map-canvas"></div>
</section>
<section class="content_area flap">
      <div class="row">
      <div class="large-8 columns form_area">
        <h2>Got stuff to sell? <br />
          You know where to find us.</h2>
          <div class="row">
          <div class="large-8 columns">
            <form>
              <label>First Name</label>
              <input type="text" name="firstname">
              <label>Last Name</label>
              <input type="text" name="lastname">
              <label>Email</label>
              <input type="text" name="email">
              <label>What would you like to inquire about?</label>
              <textarea name="description"></textarea>
              <label>1+2=?</label>
              <input type="text" placeholder="" name="question"/>
              <button type="submit">Shoot Us a Message</button>
            </form>
          </div>
        </div>
      </div>
      <div class="large-4 columns sidebar">
        <div class="side_info">
          <span>LOCATION</span><br />
          175 Verick St. <br/>
          New York, NY 10014<br />
          <a href="https://www.google.com/maps/preview#!q=175+Varick+Street+--+New+York%2C+NY+10014&data=!4m15!2m14!1m13!1s0x89c2598d47c03481%3A0xd97e385ee664f4e7!3m8!1m3!1d10611!2d-75.185511!3d39.9399025!3m2!1i1366!2i666!4f13.1!4m2!3d40.7274252!4d-74.0056938" title="Map us out">DIRECTIONS</a>
        </div>
        <div class="side_info_last">
          <span>CONTACT</span><br />
          212-628-8000 <br/>
          New York, NY 10014<br />
          <a href="mailto:info@gopicsell.com?subject=Contact Inquiry">info@gopicsell.com</a>
        </div>
      </div>
    </div>
</section>

   <?php include("footer.php"); ?>
