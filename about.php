<?php

include("header1.php");
?>
    <div class="columns twelve large-12 content wrapper">
      <div class="row">
        <div class="columns twelve large-12">
          <h1 class="page-title">About Us</h1>
          <div>
            <h2 class="sub-title"> Students Of B.S(Computer Science)</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="columns twelve large-12">
          <ul class="large-block-grid-3 block-grid three-up">
            <li>
              <div class="img-wrapper"><img src="images/malik.jpg" alt="" class="about-image"></div>
              <h3 class="employer-name">Abdul Malik</h3>
              <p>Group Leader</p>
            </li>
            <li>
              <div class="img-wrapper"><img src="images/hizb.jpg" alt="" class="about-image"></div>
              <h3 class="employer-name">Hizbullah Saimar</h3>
              
		    <p> Group Member</p>
            </li>
            <li>
              <div class="img-wrapper"><img src="images/chand.jpg" alt="" class="about-image"></div>
              <h3 class="employer-name">Irfan Ali chand</h3>
              <p> Group Member </p>
            </li>
          <li>
              <div class="img-wrapper"><img src="images/kazim.jpg" alt="" class="about-image"></div>
              <h3 class="employer-name">Kazim ali Korejo</h3>
              <p> Group Member</p>
            </li>
		  
		  </ul>
        </div>
      </div>
    </div>
  </div>
 
  <p><a class="loader" href="#inline_content"></a></p>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
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