<?php
    $sectionData = [
        'nice-select' => 'yes',
        'section-hero-wrap' => 'no',
        'open-positions' => 'yes',
        'subscribe-section' => 'no',
    ]
?>

@extends('layouts.master')

@section('title', 'Home')

@section('content')
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
                                            <form action="{{ url('posts') }}" method="POST" class="search-job">
                                                <div class="row no-gutters">
                                                    <div class="col-md mr-md-2">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="single_input">
                                                                    <select class="wide" name="location">
                                                                        <option value="0" data-display="All Locations">All Locations</option>
                                                                        @foreach ($countryList as $row)
                                                                            <option value="{{$row->id}}">{{$row->country}}</option>
                                                                        @endforeach
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
                                                                        @foreach ($filterDataList as $i => $row)
                                                                            <option value="{{$row[0]->root_category_id}}">{{$row[0]->root_category}}</option>
                                                                        @endforeach
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
                                            <form action="{{url('candidate')}}" class="search-job" method="POST">
                                                <div class="row no-gutters">
                                                    <div class="col-md mr-md-2">
                                                        <div class="form-group">
                                                            <div class="form-field">
                                                                <div class="single_input">
                                                                    <select class="wide" name="location">
                                                                        <option value="0" data-display="All Locations">All Locations</option>
                                                                        @foreach ($countryList as $row)
                                                                            <option value="{{$row->id}}">{{$row->country}}</option>
                                                                        @endforeach
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
                                                                        @foreach ($filterDataList as $i => $row)
                                                                            <option value="{{$row[0]->root_category_id}}">{{$row[0]->root_category}}</option>
                                                                        @endforeach
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
                                                <strong class="number" data-number="{{$countCountries[0]->country}}">0</strong>
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
                                                <strong class="number" data-number="{{$countCompanies[0]->company}}">0</strong>
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
                                                <strong class="number" data-number="{{$countCandidates[0]->candidate}}">0</strong>
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
                            @foreach ($rootCategoryList as $i => $row)
                                <div class="col-md-3" onclick="active({{$i}});" id="root{{$i}}">
                                    <div class="top-category text-center no-border-left">
                                        <h3><a href="#">{{$row->name}}</a></h3>
                                        <span class="icon flaticon-contact"></span>
                                        <p><span class="number">
                                            @php
                                                $a = 0;
                                                foreach ($categoryList[$i] as $key => $value) {
                                                    $a += intval($value->soni);
                                                }
                                            echo $a;
                                            @endphp
                                        </span> <span>Open position</span></p>
                                    </div>
                                </div>
                            @endforeach
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
            @foreach ($categoryList as $i => $row)
                <div class="row" id="category{{$i}}" style="display: none;">
                    <div class="col-md-12 ftco-animate">
                        <ul class="category text-center row">
                            @foreach($row as $row1)
                                <li class="col-3"><a>{{$row1->name}}<br><span class="number">{{$row1->soni}}</span> <span>Open position</span><i class="ion-ios-arrow-forward"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
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
                        @foreach($recentPostList as $row)
                            <div class="col-12 ftco-animate">
                                <div class="job-post-item p-4 d-block d-lg-flex align-items-center">
                                    <div class="one-third mb-4 mb-md-0">
                                        <div class="job-post-item-header align-items-center">
                                            <span>{{$row->posted_time}}</span><br>
                                            <span class="subadge">{{$row->type}}</span>
                                            <h2 class="mr-3 text-black"><a href="#">{{$row->title}}</a></h2>
                                        </div>
                                        <div class="job-post-item-body d-block d-md-flex">
                                            <div class="mr-3"><span class="icon-layers"></span> <a href="#">{{$row->name}}</a></div>
                                            <div><span class="icon-my_location"></span> <span>{{$row->country}}</span></div>
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
                            </div>
                            <!-- end -->
                        @endforeach
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
                @foreach($TopCompanies as $top)
                    <div class="sidebar-box col ftco-animate">
                        <div class="">
                            <a href="#" class="company-wrap"><img style="height: 180px;" src="./assets/images/companies/{{$top->img}}" class="img-fluid" alt="{{$top->name}}"></a>
                            <div class="text p-3">
                                <h3><a href="#">{{$top->name}}</a></h3>
                                <p><span class="number">{{$top->vacancy}}</span> <span>Open position</span></p>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                        @foreach($TestimonyList as $list)
                            <div class="item">
                                <div class="testimony-wrap py-4">
                                    <div class="text">
                                        <p class="mb-4" style="height: 180px!important;">{{$list->comment}}</p>
                                        <div class="d-flex align-items-center">
                                            <div class="user-img" style="background-image: url(./assets/images/testimony/{{$list->img}})"></div>
                                            <div class="pl-3">
                                                <p class="name">{{$list->name}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
                        @foreach($candidateList as $row)
                            <div class="item">
                                <a href="#" class="team text-center">
                                    <div class="img" style="background-image: url(../assets/images/candidates/{{$row->img}});"></div>
                                    <h2>{{$row->first_name}} {{$row->last_name}}</h2>
                                    <span class="position">{{$row->country}}</span>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection