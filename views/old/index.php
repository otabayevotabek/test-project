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
	
	
  </head>
  <body>
    
	  <?php
	  	include_once ROOT."/views/blocks/navbar.php";
	  ?>
    <!-- END nav -->
    
    <div class="hero-wrap img" style="background-image: url(images/bg_1.jpg);">
      <div class="overlay" style="position:absolute; z-index:-1;"></div>
      <div class="container">
      	<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
	        <div class="col-md-10 d-flex align-items-center ftco-animate">
	        	<div class="text text-center pt-2 mt-md-2">
				<div class="ftco-search my-md-5">
								<div class="row">
									<div class="col-md-12 nav-link-wrap">
										<div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
											<a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>
											<a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Find a Candidate</a>
										</div>
									</div>
				          <div class="col-md-12 tab-wrap">
				            
				            <div class="tab-content p-4" id="v-pills-tabContent">
								<!-- ============================================================================ -->
				              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
				              	<form action="/posts" method="POST" class="search-job">
				              		<div class="row no-gutters">
				              			<div class="col-md mr-md-2">
											<div class="form-group">
												<div class="form-field">
													<div class="single_input">
														<select class="wide" name="location">
															<option value="0" data-display="All Locations">All Locations</option>
															<?php foreach ($countryList as  $row) {?>
																<option value="<?=$row['id']?>"><?=$row['country']?></option>
															<?php }?>
														</select>
													</div>
												</div>
											</div>
				              			</div>
				              			<div class="col-md mr-md-2">
											<div class="form-group">
												<div class="form-field">
													<div class="single_input">
														<select class="wide" name="root_category" onchange="dynamicdropdown(this.options[this.selectedIndex].value,'category_job');">
															<option value="0" data-display="All Career Fields">All Career Fields</option>
															<?php foreach ($filterDataList as $i => $row) {?>
																<option value="<?=$row[0]['root_category_id']?>"><?=$row[0]['root_category']?></option>
															<?php }?>
														</select>
													</div>
												</div>
											</div>
				              			</div>
				              			<div class="col-md mr-md-2">
											<div class="form-group">
												<div class="form-field">
													<div class="single_input">
														<select class="wide" name="category" id="category_job" disabled>
															<option value="0" data-display="All Categories">All Categories</option>
														</select>
													</div>
												</div>
											</div>
				              			</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
								                	<button onclick="document.getElementById('category_job').disabled = false;" type="submit" class="form-control btn btn-primary" style="height:42px !important;">Search</button>
									              </div>
								              </div>
				              			</div>
				              		</div>
				              	</form>
				              </div>
								<!-- ============================================================================ -->
				              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
								<form action="/candidates" class="search-job" method="POST">
									<div class="row no-gutters">
										<div class="col-md mr-md-2">
											<div class="form-group">
												<div class="form-field">
													<div class="single_input">
														<select class="wide" name="location">
															<option value="0" data-display="All Locations">All Locations</option>
															<?php foreach ($countryList as  $row) {?>
																<option value="<?=$row['id']?>"><?=$row['country']?></option>
															<?php }?>
														</select>
													</div>
												</div>
											</div>
				              			</div>
				              			<div class="col-md mr-md-2">
											<div class="form-group">
												<div class="form-field">
													<div class="single_input">
														<select name="root_category" class="wide" onchange="dynamicdropdown(this.options[this.selectedIndex].value,'category_candidate');">
															<option value="0" data-display="All Career Fields">All Career Fields</option>
															<?php foreach ($filterDataList as $i => $row) {?>
																<option value="<?=$row[0]['root_category_id']?>"><?=$row[0]['root_category']?></option>
															<?php }?>
														</select>
													</div>
												</div>
											</div>
				              			</div>
				              			<div class="col-md mr-md-2">
											<div class="form-group">
												<div class="form-field">
													<div class="single_input">
														<select class="wide" name="category" id="category_candidate" disabled>
															<option value="0" data-display="All Categories">All Categories</option>
														</select>
													</div>
												</div>
											</div>
				              			</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
								                	<button onclick="document.getElementById('category_candidate').disabled = false;" type="submit" class="form-control btn btn-primary" style="height:42px !important;">Search</button>
									              </div>
								              </div>
				              			</div>
									</div>
								</form>
				              </div>
								<!-- ============================================================================ -->
				            </div>
				          </div>
				        </div>
			        </div>
	        		<p class="mb-4">Find Job, Employment, and Career Opportunities</p>
	            <h1 class="mb-5">The Eassiest Way to Get Your New Job</h1>
							<div class="ftco-counter ftco-no-pt ftco-no-pb">
			        	<div class="row">
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-worldwide"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="<?=$allJobList[0]?>">0</strong>
					                <span>Countries</span>
				                </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18 text-center">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-visitor"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="<?=$allJobList[2]?>">0</strong>
					                <span>Companies</span>
					              </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18 text-center">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-resume"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="<?=$allJobList[1]?>">0</strong>
					                <span>Active Employees</span>
					              </div>
				              </div>
				            </div>
				          </div>
				        </div>
			        </div>
							
	          </div>
	        </div>
	    	</div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="category-wrap">
    					<div class="row no-gutters">

							<?php foreach ($rootCategoryList as $i => $row) {?>
								<div class="col-md-3" onclick="active(<?=$i?>);" id="root<?=$i?>">
									<div class="top-category text-center no-border-left">
										<h3><a href="#"><?=$row['name']?></a></h3>
										<span class="icon flaticon-contact"></span>
										<p><span class="number">
											<?php
											$a = 0;
											foreach ($categoryList[$i] as $key => $value) {
												$a += intval($value['soni']);
											}
											echo $a;
											?>
										</span> <span>Open position</span></p>
									</div>
								</div>
    						<?php } ?>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<span class="subheading">Job Categories</span>
				<h2 class="mb-0">Top Categories</h2>
			</div>
			</div>
			<?php foreach ($categoryList as $i => $row) {?>
				<div class="row" id="category<?=$i?>" style="display: none;">
					<div class="col-md-12 ftco-animate">
						<ul class="category text-center row">
							<?php foreach($row as $row1){?>
								<li class="col-3"><a><?=$row1['name']?><br><span class="number"><?=$row1['soni']?></span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
							<?php }?>
						</ul>
					</div>
				</div>
			<?php }?>
    	</div>
    </section>

    <section class="ftco-section services-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Millions of Jobs</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-team"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Easy To Manage Jobs</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-career"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Top Careers</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employees"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Expert Candidates</h3>
                <p>A small river named Duden flows by their place and supplies.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

	<section class="ftco-section bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-11 pr-lg-5">
						<div class="row justify-content-center pb-3">
							<div class="col-md-12 heading-section ftco-animate">
								<span class="subheading">Recently Added Jobs</span>
								<h2 class="mb-4">Featured Jobs Posts For This Week</h2>
							</div>
						</div>
						<div class="row">
							<?php foreach($recentPostList as $row){ ?>
								<div class="col-12 ftco-animate">
									<div class="job-post-item p-4 d-block d-lg-flex align-items-center">
									<div class="one-third mb-4 mb-md-0">
										<div class="job-post-item-header align-items-center">
											<span><?=$row['posted_time']?></span><br>
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
								</div><!-- end --><?php }?>
		        		</div>
		      		</div>
				</div>

				<div class="row sidebar justify-content-center">
					<div class="col-12">
						<div class="row justify-content-center pb-3">
						<div class="col-md-12 heading-section ftco-animate">
							<h2 class="mb-4">Top Recruitments</h2>
						</div>
						</div>
					</div>
					<?php foreach($TopCompanies as $top){?>
					<div class="sidebar-box col ftco-animate">
						<div class="">
							<a href="#" class="company-wrap"><img style="height: 180px;" src="http://<?=$_SERVER['HTTP_HOST']?>/assets/images/companies/<?=$top['img']?>" class="img-fluid" alt="Colorlib Free Template"></a>
							<div class="text p-3">
								<h3><a href="#"><?=$top['name']?></a></h3>
								<p><span class="number"><?=$top['vacancy']?></span> <span>Open position</span></p>
							</div>
						</div>
					</div>
				<?php }?>

				
				</div>
			</div>
	</section>

    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-4">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
			<?php foreach($TestimonyList as $list){?>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4" style="height: 180px!important;"><?=$list['comment']?></p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(http://<?=$_SERVER['HTTP_HOST']?>/assets/images/testimony/<?=$list['img']?>)"></div>
                    	<div class="pl-3">
		                    <p class="name"><?=$list['name']?></p>
		                    <span class="position"><?=$list['names']?></span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
			  <?php }?>
            
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-candidates bg-primary">
    	<div class="container">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section heading-section-white text-center ftco-animate">
          	<span class="subheading">Candidates</span>
            <h2 class="mb-4">Top Candidates</h2>
          </div>
        </div>
    	</div>
    	<div class="container">
        <div class="row">
        	<div class="col-md-12 ftco-animate">
        		<div class="carousel-candidates owl-carousel">
					<?php foreach($candidateList as $row){?>
        			<div class="item">
		        		<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url(../assets/images/candidates/<?=$row['img']?>);"></div>
		        			<h2><?=$row['first_name']?><?=$row['last_name']?></h2>
		        			<span class="position"><?=$row['country']?></span>
		        		</a>
        			</div>
        			<?php }?>
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
  <script src="../assets/js/google-map.js"></script>
  <script src="../assets/js/main.js"></script>

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
				if(document.getElementById(id).length == 0){
					document.getElementById(id).options[0]=new Option("All Categories","0");
					document.getElementById(id).disabled = true;
				}

				$(`#${id}`).niceSelect('update')
                return true;
            }
       </script>

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
    
  </body>
</html>