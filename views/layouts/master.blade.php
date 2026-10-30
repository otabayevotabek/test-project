<?php
	if (!empty($_SERVER['REQUEST_URI'])) {
		$currentPage = trim($_SERVER['REQUEST_URI'],'/');
	}
	if ($_SERVER['REQUEST_URI']=="/"){
		$currentPage = "index.php";
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title') | PlumPosts</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">

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

    @if ($sectionData['nice-select']=='yes')
        <link rel="stylesheet" href="../assets/css/nice-select.css">
        <link rel="stylesheet" href="../assets/css/nice-select-search.css">

        <style>

            .boxed-btn3 {
            background: #00D363;
            color: #fff;
            display: inline-block;
            padding: 13px 29px 13px 29px;
            font-family: "Roboto", sans-serif;
            font-size: 16px;
            font-weight: 500;
            border: 0;
            border: 1px solid transparent;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            text-align: center;
            color: #fff !important;
            text-transform: capitalize;
            -webkit-transition: 0.3s;
            -moz-transition: 0.3s;
            -o-transition: 0.3s;
            transition: 0.3s;
            cursor: pointer;
            }

            .boxed-btn3:hover {
            color: #00D363 !important;
            border: 1px solid #00D363;
            background: transparent;
            }

            .boxed-btn3:focus {
            outline: none;
            }




            /* ****************************************************************** */

            .job_filter {
            padding: 25px;
            display: block;
            }

            .job_filter h3 {
            font-size: 20px;
            margin-bottom: 25px;
            color: #001D38;
            font-weight: 400;
            }

            .job_filter .form_inner .single_field input {
            height: 60px;
            border: 1px solid #E8E8E8;
            padding: 20px;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            width: 100%;
            margin-bottom: 20px;
            }

            .job_filter .form_inner .single_field input::placeholder {
            color: #7A838B;
            font-size: 16px;
            font-weight: 400;
            }

            .job_filter .form_inner .single_field input:focus {
            outline: none;
            }

            .job_filter .form_inner .single_field .nice-select {
            width: 100%;
            height: 60px;
            line-height: 60px;
            color: #7A838B;
            font-size: 16px;
            margin-bottom: 15px;
            }

            @media (max-width: 767px) {
            .job_filter .form_inner .single_field .nice-select {
                margin-bottom: 20px;
            }
            }

            .job_filter .form_inner .single_field .nice-select:focus {
            outline: none;
            }

            .job_filter .form_inner .nice-select {
            width: 100%;
            height: 50px;
            line-height: 50px;
            color: #7A838B;
            font-size: 16px;
            }

            @media (max-width: 767px) {
            .job_filter .form_inner .nice-select {
                margin-bottom: 20px;
            }
            }

            .job_filter .form_inner .nice-select:focus {
            outline: none;
            }
            .nice-select .list{
                max-height: 200px;
            }
        </style>
    @endif
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container-fluid px-md-4	">
            <a class="navbar-brand" href="/"><img src="/assets/images/logo.png" height="90px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
        
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= ($currentPage == "index.php") ? "active" : "" ;?>"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item <?= ($currentPage == "browsejobs.php") ? "active" : "" ;?>"><a href="/posts" class="nav-link">Browse Jobs</a></li>
                    <li class="nav-item <?= ($currentPage == "candidates.php") ? "active" : "" ;?>"><a href="/candidates" class="nav-link">Canditates</a></li>
                    <li class="nav-item <?= ($currentPage == "contact.php") ? "active" : "" ;?>"><a href="/contact" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    
    <!-- END nav -->
    
    @if ($sectionData['section-hero-wrap']=='yes')
        <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-end justify-content-start">
                    <div class="col-md-12 ftco-animate text-center mb-5">
                        <p class="breadcrumbs mb-0"><span class="mr-3"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Canditates</span></p>
                        <h1 class="mb-3 bread">Hire Your Best Candidates</h1>
                    </div>
                </div>
            </div>
        </div>
    @endif

	@yield('content')
		
    @if ($sectionData['subscribe-section']=='yes')
        <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                <h2>Subcribe to our Newsletter</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                <div class="row d-flex justify-content-center mt-4 mb-4">
                    <div class="col-md-12">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section> 
    @endif

    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5">
              <div class="col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">PlumPosts Jobboard</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Employers</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="pb-1 d-block">Browse Candidates</a></li>
                  <li><a href="#" class="pb-1 d-block">Post a Job</a></li>
                  <li><a href="#" class="pb-1 d-block">Employer Listing</a></li>
                  <li><a href="#" class="pb-1 d-block">Resume Page</a></li>
                  <li><a href="#" class="pb-1 d-block">Dashboard</a></li>
                  <li><a href="#" class="pb-1 d-block">Job Packages</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Candidate</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="pb-1 d-block">Browse Jobs</a></li>
                  <li><a href="#" class="pb-1 d-block">Submit Resume</a></li>
                  <li><a href="#" class="pb-1 d-block">Dashboard</a></li>
                  <li><a href="#" class="pb-1 d-block">Browse Categories</a></li>
                  <li><a href="#" class="pb-1 d-block">My Bookmarks</a></li>
                  <li><a href="#" class="pb-1 d-block">Candidate Listing</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Account</h2>
                <ul class="list-unstyled">
                  <li><a href="#" class="pb-1 d-block">My Account</a></li>
                  <li><a href="#" class="pb-1 d-block">Sign In</a></li>
                  <li><a href="#" class="pb-1 d-block">Create Account</a></li>
                  <li><a href="#" class="pb-1 d-block">Checkout</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">28A Mahtumquli, Yashnobod, Tashkent, Uzbekistan</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 998 55 555 55 55</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">bulletplan5@gmail.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
  
              <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made by <a class="text-primary" href="https://ictportfolio.uz/profile/1104158" target="_blank">Otabek Otabayev</a> and <a class="text-primary" href="https://ictportfolio.uz/profile/1104190" target="_blank">Shahzoda Yunusaliyeva</a></p>
            </div>
          </div>
        </div>
    </footer>    
  

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
    <script src="../assets/js/google-map.js"></script>
    <script src="../assets/js/main.js"></script>

    @if ($sectionData['nice-select']=='yes')
        <script src="../assets/js/range.js"></script>
        <script src="../assets/js/jquery.js"></script> 
        <script src="../assets/js/jquery.nice-select.js"></script>
        <script src="../assets/js/nice-select-search.js"></script>

        <script>
            $(document).ready(function() {
                $('select').niceSelect();
            });
        </script>

		<script>
            function dynamicdropdown(listindex,id)
            {
                document.getElementById(id).length = 0;
				var filterDataList = <?=json_encode($filterDataList)?>;

				for (let i = 0; i < filterDataList.length; i++) {
					if (listindex == filterDataList[i][0]['root_category_id']) {
						document.getElementById(id).options[0]=new Option("All Categories","0");
						for (let j = 0; j < filterDataList[i].length; j++) {
							document.getElementById(id).options[j+1]=new Option(filterDataList[i][j]['category'],filterDataList[i][j]['category_id']);
						};
						document.getElementById(id).disabled = false;
						break;
					}
				}
				if (document.getElementById(id).length == 0){
					document.getElementById(id).options[0]=new Option("All Categories","0");
					document.getElementById(id).disabled = true;
				}

				$(`#${id}`).niceSelect('update')
                return true;
            }
       </script>
    @endif

    @if ($sectionData['open-positions']=='yes')
        <script>
			document.getElementById('root0').getElementsByTagName('div')[0].classList.add("active");
			document.getElementById('category0').style.display = "flex";
			function active(id) {
				if (document.getElementById(`root${id}`).classList[-1]!="active") {
					var d = document.getElementById(`root${id}`).parentElement.getElementsByClassName("active")[0].parentElement.id;
					a = d.substring(4);
					document.getElementById(`category${a}`).style.display = "none";
					document.getElementById(`root${id}`).parentElement.getElementsByClassName("active")[0].classList.remove("active");
					document.getElementById(`root${id}`).getElementsByTagName("div")[0].classList.add("active");
					document.getElementById(`category${id}`).style.display = "flex";
				}
			}
	    </script>
    @endif
    
  </body>
</html>