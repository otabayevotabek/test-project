<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Page Not Found</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="http://<?=$_SERVER['HTTP_HOST']?>/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">

    <link rel="stylesheet" href="../assets/css/aos.css">

    <link rel="stylesheet" href="../assets/css/ionicons.min.css">

    <link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/icomoon.css">
    <link rel="stylesheet" href="../assets/css/style.css">


	<link rel="stylesheet" href="../assets/css/nice-select.css">
	<link rel="stylesheet" href="../assets/css/nice-select-search.css">
  </head>
  <body style="height:100% !important; overflow: hidden;">
    <div class="hero-wrap img" style="background-image: url(images/bg_1.jpg);">
      <div class="overlay"></div>
      <div class="container">
      	<div class="row no-gutters slider-text align-items-center justify-content-center">
	        <div class="col d-flex align-items-center justify-content-center ftco-animate text text-center">
				<div>
					<h1 style="font-size:9rem;" id="countUp" class="mb-5"><strong class="number" data-count="404">0</strong></h1>
					<p style="font-size: 2rem;">Page not found</p>
					<p style="font-size: 1rem;">This may not mean anything.<br>We're probably working on something that has blown up.</p>
				</div>
	        </div>
	    </div>
      </div>
    </div>

    
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="../assets/js/jquery.min.js"></script>
  <script src="../assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/jquery.easing.1.3.js"></script>
  <script src="../assets/js/jquery.waypoints.min.js"></script>
  <script src="../assets/js/jquery.stellar.min.js"></script>
  <script src="../assets/js/owl.carousel.min.js"></script>
  <script src="../assets/js/jquery.magnific-popup.min.js"></script>
  <script src="../assets/js/aos.js"></script>
  <script src="../assets/js/jquery.animateNumber.min.js"></script>
  <script src="../assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../assets/js/google-map.js"></script>
  <script src="../assets/js/main.js"></script>

  <script src="../assets/js/range.js"></script>
  <script src="../assets/js/in-view.min.js"></script>
    

  <script>
    var formatThousandsNoRounding = function(n, dp){
  var e = '', s = e+n, l = s.length, b = n < 0 ? 1 : 0,
      i = s.lastIndexOf(','), j = i == -1 ? l : i,
      r = e, d = s.substr(j+1, dp);
  while ( (j-=3) > b ) { r = '.' + s.substr(j, 3) + r; }
  return s.substr(0, j + 3) + r + 
    (dp ? ',' + d + ( d.length < dp ? 
        ('00000').substr(0, dp - d.length):e):e);
};

var hasRun = false;

inView('#countUp').on('enter', function() {
    if (hasRun == false) {
        $('.number').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');

            $({ countNum: $this.text()}).animate({
                countNum: countTo
            },
            {
                duration: 2000,
                easing:'linear',
                step: function() {
                    $this.text(formatThousandsNoRounding(Math.floor(this.countNum)));
                },
                complete: function() {
                    $this.text(formatThousandsNoRounding(this.countNum));
                }
            });
        });
        hasRun = true;
    }
});
  </script>
  </body>
</html>