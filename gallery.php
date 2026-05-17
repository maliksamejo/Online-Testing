<!DOCTYPE html>
<!--[if lt IE 7]><html class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html><!--<![endif]-->
<head>
<title>  Gallery</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/foundation.min.css">
<link rel="stylesheet" href="css/superfish.css">
<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="js/colorbox/colorbox.css">
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
<link rel="stylesheet" href="css/ie-fixes.css">
<![endif]-->
<script src="js/custom.modernizr.js"></script>
<script>
Modernizr.load({
    // test if browser understands media queries
    test: Modernizr.mq('only all'),
    // if not load ie8-grid
    nope: 'css/ie8-grid-foundation-4.css'
});
</script>
</head>
<body>
<?php
include("header1.php");
?>
    <div class="columns twelve large-12 content wrapper">
      <div class="row">
        <div class="columns small-12">
          <h1 class="page-title">Gallery</h1>
          <h2 class="sub-title"></h2>
          <div class="thumbnail-block">
            <ul class="large-block-grid-4 block-grid four-up">
              <li><a class="thumbnail" href="images/gallery1.jpg"><img src="images/gallery1.jpg" alt=""></a></li>
              <li><a class="thumbnail" href="images/gallery2.jpg"><img src="images/gallery2.jpg" alt=""></a></li>
              <li><a class="thumbnail" href="images/gallery3.jpg"><img src="images/gallery3.jpg" alt=""></a></li>
              <li><a class="thumbnail" href="images/gallery4.jpg"><img src="images/gallery4.jpg" alt=""></a></li>
            </ul>
          </div>
          <div class="thumbnail-block">
            <ul class="large-block-grid-4 block-grid four-up">
              <li><a class="thumbnail" href="images/gallery5.jpg"><img src="images/gallery5.jpg" alt=""></a></li>
              <li><a class="thumbnail" href="images/gallery6.jpg"><img src="images/gallery6.jpg" alt=""></a></li>
              <li><a class="thumbnail" href="images/gallery7.jpg"><img src="images/gallery7.jpg" alt=""></a></li>
              <li><a class="thumbnail" href="images/gallery8.jpg"><img src="images/gallery8.jpg" alt=""></a></li>
            </ul>
          </div>
          <div>
            <p></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
<script src="js/jquery.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.js"></script>
<script src="js/colorbox/jquery.colorbox-min.js"></script>
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
    $(".thumbnail").colorbox({
        rel: "thumbnail",
        transition: "fade",
        width: "50%",
        height: "50%"
    });
});
</script>
<?php
include("footer.php");
?>
</body>
</html>