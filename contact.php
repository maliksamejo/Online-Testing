<!DOCTYPE html>
<?php
include("header1.php");
?>
    <div class="columns twelve large-12 content wrapper">
      <div class="row">
        <div class="columns twelve large-12">
          <h1 class="page-title">Contact Us</h1>
          <div>
            <h2 class="sub-title">We are for you you can </h2>
          </div>
          <div class="row contact-form">
            <div class="columns four large-4">
              <ul class="vcard">
                <li class="fn">Online Testing Service</li>
                <li class="street-address">69, Memon Nagar,Qasimabad, Hyderabad</li>
                <li class="locality">Pakistan</li>
                <li><span class="state">Sindh</span>, <span class="zip">92
                <li class="mobile">Mob:<a href="#">03429301903</a></li>
                
                <li class="mobile">Email:<a href="#">amaliksamejo@gmail.com</a></li>
              </ul>
            </div>
            <div class="columns seven large-7 large-offset-1">
              <form id="contact-form" method="post" action="#">
                <input type="text" name="name"  placeholder="Name*:">
                <input type="text" name="email"  placeholder="Email*:">
                <input type="text" name="subject" placeholder="Subject*:">
                <textarea  name="message*:"></textarea>
                <input type="submit" class="button" name="submit" value="send">
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="columns twelve large-12">
          <div id="map_canvas"></div>
        </div>
      </div>
    </div>
  </div>
 
      
  <p><a class="loader" href="#inline_content"></a></p>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/google-maps.js"></script>
<script>
Modernizr.load({
    test: Modernizr.placeholder,
    nope: 'js/placeholder.min.js'
});
function goToNewPage() {
    if (document.getElementById('target').value) {
        window.location.href = document.getElementById('target').value;
    }
}
</script>
<script>
$(document).ready(function () {
    $('ul.sf-menu').superfish({
        animation: {
            height: 'show'
        },
        delay: 400
    });
    $("img.scrolltop").click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
    });
});
</script>


<?php
	  include("footer.php");
	  ?>
</body>
</html>