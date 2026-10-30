<!DOCTYPE html>
<html lang="en">
  <head>
    <title>PlumPosts</title>
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

    <style>

      .boxed-btn3 {
      /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#F91842+0,fd8e5e+100 */
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

      /* line 43, ../../Arafath/CL/December/235. Job board/HTML/scss/_btn.scss */
      .boxed-btn3:hover {
      color: #00D363 !important;
      border: 1px solid #00D363;
      background: transparent;
      }

      /* line 48, ../../Arafath/CL/December/235. Job board/HTML/scss/_btn.scss */
      .boxed-btn3:focus {
      outline: none;
      }




      /* ****************************************************************** */

      .job_filter {
      padding: 25px;
      display: block;
      }

      /* line 133, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_list.scss */
      .job_filter h3 {
      font-size: 20px;
      margin-bottom: 25px;
      color: #001D38;
      font-weight: 400;
      }

      /* line 141, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_list.scss */
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

      /* line 148, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_list.scss */
      .job_filter .form_inner .single_field input::placeholder {
      color: #7A838B;
      font-size: 16px;
      font-weight: 400;
      }

      /* line 154, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_list.scss */
      .job_filter .form_inner .single_field input:focus {
      outline: none;
      }

      /* line 159, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_list.scss */
      .job_filter .form_inner .single_field .nice-select {
      width: 100%;
      height: 60px;
      line-height: 60px;
      color: #7A838B;
      font-size: 16px;
      margin-bottom: 15px;
      }

      @media (max-width: 767px) {
      /* line 159, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_list.scss */
      .job_filter .form_inner .single_field .nice-select {
        margin-bottom: 20px;
      }
      }

      /* line 169, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_list.scss */
      .job_filter .form_inner .single_field .nice-select:focus {
      outline: none;
      }

      /* line 175, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_list.scss */
      .job_filter .form_inner .nice-select {
      width: 100%;
      height: 50px;
      line-height: 50px;
      color: #7A838B;
      font-size: 16px;
      }

      @media (max-width: 767px) {
      /* line 175, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_list.scss */
      .job_filter .form_inner .nice-select {
        margin-bottom: 20px;
      }
      }

      /* line 184, ../../Arafath/CL/December/235. Job board/HTML/scss/_job_list.scss */
      .job_filter .form_inner .nice-select:focus {
      outline: none;
      }
      .nice-select .list{
        max-height: 170px;
      }
    </style>
    <style>
      .nice-select-search{
        height: 20px!important;
        /* padding: 0!important; */
        margin: 0!important;
      }
      .nice-select-search-box{
        height: 40px!important;
        padding: 0 !important;;
      }
    </style>
  </head>
  <body>
    
  <?php
	  	include_once ROOT."/views/blocks/navbar.php";
	  ?>
    <!-- END nav -->
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About</span></p>
            <h1 class="mb-3 bread">Browse Jobs</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="row">
							<?php foreach($allPostList as $row){ ?>
                <div class="col-md-12 ftco-animate">
                  <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                  <div class="one-third mb-4 mb-md-0">
                    <div class="job-post-item-header align-items-center">
                      <span class=""><?=$row['posted_time']?></span><br>
                      <span class="subadge"><?=$row['type']?></span>
                    <h2 class="mr-3 text-black"><a href="#"><?=$row['title']?></a></h2>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?=$row['name']?></a></div>
                    <div><span class="icon-my_location"></span> <span><?=$row['country']?></span></div>
                    </div>
                  </div>

                  <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                    <div>
                      <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                        <span class="icon-heart"></span>
                      </a>
                    </div>
                    <a href="job-single.html" class="btn btn-primary py-2">Apply Job</a>
                  </div>
                  </div>
                </div><!-- end -->
              <?php }?>
		        </div>
		        <!-- <div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div> -->
		      </div>

          <div class="col-lg-3 sidebar">
						<div class="job_filter white-bg">
							<form method="post" action="/posts">
								<div class="form_inner white-bg">
									<h3>Filter</h3>
									<div class="row">
										
										<div class="col-lg-12">
											<div class="single_field">
                        <select class="wide" name="location">
													<option value="0" data-display="All Locations">All Locations</option>
														<?php foreach ($countryList as  $row) {?>
															<option value="<?=$row['id']?>"><?=$row['country']?></option>
														<?php }?>
												</select>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="single_field">
                        <select class="wide" name="root_category" onchange="dynamicdropdown(this.options[this.selectedIndex].value,'category_job');">
													<option value="0" data-display="All Career Fields">All Career Fields</option>
														<?php foreach ($filterDataList as $i => $row) {?>
															<option value="<?=$row[0]['root_category_id']?>"><?=$row[0]['root_category']?></option>
														<?php }?>
												</select>
											</div>
										</div>
                    <div class="col-lg-12">
											<div class="single_field">
                        <select class="wide" name="category" id="category_job" disabled>
												  <option value="0" data-display="All Categories">All Categories</option>
											  </select>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="single_field">
												<select name="experience" class="wide">
													<option value="0" data-display="Experience">Experience</option>
													<option value="Entry">Entry</option>
													<option value="Intermediate">Intermediate</option>
                          <option value="Mid-level">Mid-level</option>
                          <option value="Senior">Senior</option>
												</select>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="single_field">
												<select name="type" class="wide">
													<option value="0" data-display="Job type">Job type</option>
													<option value="Full-time">Full-time</option>
													<option value="Part-time">Part-time</option>
                          <option value="Temporary">Temporary</option>
												</select>
											</div>
										</div>
										
									</div>
								</div>
								<div class="reset_btn">
									<button onclick="document.getElementById('category_job').disabled = false;" class="boxed-btn3 w-100" type="submit">Search</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		
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

    <?php include_once ROOT."/views/blocks/footer.php"?>
    
  

	



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
				if(document.getElementById(id).length == 0){
					document.getElementById(id).options[0]=new Option("All Categories","0");
					document.getElementById(id).disabled = true;
				}

				$(`#${id}`).niceSelect('update')
                return true;
            }
       </script>
    
  </body>
</html>