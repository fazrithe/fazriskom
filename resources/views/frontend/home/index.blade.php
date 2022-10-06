<!DOCTYPE html>
<html dir="@if (session()->has('language_direction_from_dropdown')) @if(session()->get('language_direction_from_dropdown') == 1) {{ __('rtl') }} @else {{ __('ltr') }} @endif @else {{ __('ltr') }} @endif" lang="@if (session()->has('language_code_from_dropdown')){{ str_replace('_', '-', session()->get('language_code_from_dropdown')) }}@else{{ str_replace('_', '-',   $language->language_code) }}@endif">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="title" content="@if (isset($general_seo)){{ $general_seo->site_name }} @endif">
    <meta name="description" content="@if (isset($general_seo)){{ $general_seo->site_desc }} @endif">
    <meta name="keywords" content="@if (isset($general_seo)){{ $general_seo->site_keywords }} @endif">
    <meta name="author" content="elsecolor">
    <meta property="fb:app_id" content="@if (isset($general_seo)){{ $general_seo->fb_app_id }} @endif">
    <meta property="og:title" content="@if (isset($general_seo)){{ $general_seo->site_name }} @endif">
    <meta property="og:url" content="@if (isset($general_seo)){{ url()->current() }} @endif">
    <meta property="og:description" content="@if (isset($general_seo)){{ $general_seo->site_desc }} @endif">
    <meta property="og:image" content="@if (!empty($general_site_image->favicon_image)){{ asset('uploads/img/general/'.$general_site_image->favicon_image) }} @endif">
    <meta itemprop="image" content="@if (!empty($general_site_image->favicon_image)){{ asset('uploads/img/general/'.$general_site_image->favicon_image) }} @endif">
    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="@if (!empty($general_site_image->favicon_image)){{ asset('uploads/img/general/'.$general_site_image->favicon_image) }} @endif">
    <meta property="twitter:title" content="@if (isset($general_seo)){{ $general_seo->site_name }} @endif">
    <meta property="twitter:description" content="@if (isset($general_seo)){{ $general_seo->site_desc }} @endif">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ __('frontend.home') }} @if (isset($general_seo)) - {{ $general_seo->site_name }} @endif</title>

@if (!empty($general_site_image->favicon_image))
    <!-- Favicon -->
        <link href="{{ asset('uplods/img/general/'.$general_site_image->favicon_image) }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
        <link href="{{ asset('uploads/img/general/'.$general_site_image->favicon_image) }}" sizes="128x128" rel="shortcut icon" />
@else
    <!-- Favicon -->
        <link href="{{ asset('uploads/img/dummy/favicon.png') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
        <link href="{{ asset('uploads/img/dummy/favicon.png') }}" sizes="128x128" rel="shortcut icon" />
@endif

    <link rel="stylesheet" href="{{ asset('assets/frontend_new/css/animate.css') }}">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="{{ asset('assets/frontend_new/bootstarp/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend_new/css/super-classes.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend_new/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend_new/css/mobile.css') }}">

@if (isset($google_analytic))
    <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ $google_analytic->google_analytic }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ $google_analytic->google_analytic }}');
        </script>
    @endif

</head>
<body>
    <!---header-and-banner-section-->
    <div class="header-and-banner-con w-100 float-left position-relative">
       <div class="header-and-banner-inner-con">
          <header class="main-header">
             <!--navbar-start-->
             <div class="container pl-0 pr-0">
                <div class="header-con">
                   <nav class="navbar navbar-expand-lg navbar-light p-0">
                    @if (!empty($general_site_image->site_colored_logo_image))
                      <a class="navbar-brand p-0" href="index.html">
                      <img src="{{ asset('uploads/img/general/'.$general_site_image->site_colored_logo_image) }}" alt="logo-img" class="img-fluid logo-transparent">
                      </a>
                    @else
                        <a class="navbar-brand p-0" href="index.html">
                        <img src="{{ asset('assets/frontend_new/image/logo-img.png') }}" alt="logo-img" class="img-fluid">
                        </a>
                    @endif
                      <button class="navbar-toggler p-0 collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                      <span class="navbar-toggler-icon"></span>
                      <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                         <ul class="navbar-nav ml-auto">
                            <li class="nav-item active pl-0">
                               <a class="nav-link p-0 is-active" href="#home">{{ __('frontend.home') }}<span class="sr-only">(current)</span></a>
                            </li>
                            @if ($section_arr['service_section'] == "show")
                            <li class="nav-item">
                               <a class="nav-link p-0" href="#service-con">{{ __('frontend.services') }}</a>
                            </li>
                            @endif
                            @if ($section_arr['about_section'] == "show")
                            <li class="nav-item">
                               <a class="nav-link p-0" href="#about-con">{{ __('frontend.about') }}</a>
                            </li>
                            @endif
                            @if ($section_arr['portfolio_section'] == "show")
                            <li class="nav-item">
                               <a class="nav-link p-0" href="#Portfolio">Portfolio</a>
                            </li>
                            @endif
                            <li class="nav-item">
                               <a class="nav-link p-0" href="#testimonials">Testimonials</a>
                            </li>
                            @if ($section_arr['blog_section'] == "show")
                            <li class="nav-item">
                               <a class="nav-link p-0" href="#blog">Blog</a>
                            </li>
                            @endif
                         </ul>
                         <div class="d-inline-block contact">
                            <a href="#Contact">Contact</a>
                         </div>
                      </div>
                   </nav>
                </div>
             </div>
             <!--navbar-end-->
          </header>

          @if (isset($fixed_content))
          <section class="banner-main-con" id="home">
             <div class="container pl-0 pr-0">
                <!--banner-start-->
                <div class="footer-social-icon banner-social-icon mb-0">
                   <ul class="mb-0 list-unstyled">
                      <li class="">
                         <a href="https://www.behance.net/"><i class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                      </li>
                      <li class="mt-3 mb-3">
                         <a href="https://dribbble.com/"><i class="fab fa-dribbble d-flex align-items-center justify-content-center ml-0 mr-0 "></i></a>
                      </li>
                      <li class="">
                         <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                      </li>
                   </ul>
                </div>
                <div class="banner-con text-lg-left text-center">
                   <div class="row">
                      <div class="col-lg-7 col-sm-12 d-flex justify-content-center flex-column">
                         <div class="banner-left-con wow slideInLeft">
                            <div class="banner-heading">
                               <h2>Hello, I Am</h2>                                 
                               <ul class="dynamic-txts">
                                  <li><h1>{{ $fixed_content->title }}</h1></li>
                                  <li><h1>{{ $fixed_content->title }}</h1></li>
                                  <li><h1></h1></li>
                                  <li><h1></h1></li>
                                </ul>
                               <p>{{ $fixed_content->desc }}
                               </p>
                            </div>
                            <div class="banner-btn generic-btn d-inline-block">
                               <a href="#Contact">Hire Me</a>
                            </div>
                            <a href="#Portfolio" class="See-btn">See My Work</a>
                         </div>
                      </div>
                      <div class="col-lg-5 col-sm-12">
                         <div class="banner-right-con position-relative wow slideInRight" id="banner-right-con">
                            <figure class="mb-0">
                               <img src="{{ asset('uploads/img/general/'.$fixed_content->thumbnail_image) }}" alt="banner-right-img" id="banner-right-img">
                            </figure>
                            <div class="best-award-con d-inline-block wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
                               <div class="best-award-inner-con">
                                  <figure class="mb-0">
                                     <img src="{{ asset('assets/frontend_new/image/cup-img.png') }}" alt="cup-img" class="img-fluid">
                                  </figure>
                                  <div class="best-award-title">
                                     <p class="mb-0">Best Programmer<br>
                                        Award.
                                     </p>
                                  </div>
                               </div>
                            </div>
                            <div class="best-award-con d-inline-block happy-con wow bounceInUp " data-wow-duration="1s" data-wow-delay="1s">
                               <div class="best-award-inner-con text-center">
                                  <figure>
                                     <img src="{{ asset('assets/frontend_new/image/admin-icon.png') }}" alt="admin-icon" class="img-fluid">
                                  </figure>
                                  <div class="best-award-title d-inline-block ml-0">
                                     <p class="mb-0 d-inline-block count">2</p>
                                     <p class="mb-0 d-inline-block">k+</p>
                                     <span class="d-block">Happy<br>
                                     Customers</span>
                                  </div>
                               </div>
                            </div>
                            <div class="cursor"></div>
                            <div class="cursor2"></div>
                         </div>
                      </div>
                   </div>
                </div>
                <!--banner-end-->
             </div>
          </section>
          @else
          <section class="banner-main-con" id="home">
            <div class="container pl-0 pr-0">
               <!--banner-start-->
               <div class="footer-social-icon banner-social-icon mb-0">
                  <ul class="mb-0 list-unstyled">
                     <li class="">
                        <a href="https://www.behance.net/"><i class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                     </li>
                     <li class="mt-3 mb-3">
                        <a href="https://dribbble.com/"><i class="fab fa-dribbble d-flex align-items-center justify-content-center ml-0 mr-0 "></i></a>
                     </li>
                     <li class="">
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                     </li>
                  </ul>
               </div>
               <div class="banner-con text-lg-left text-center">
                  <div class="row">
                     <div class="col-lg-7 col-sm-12 d-flex justify-content-center flex-column">
                        <div class="banner-left-con wow slideInLeft">
                           <div class="banner-heading">
                              <h2>Hello, I Am</h2>                                 
                              <ul class="dynamic-txts">
                                 <li><h1>Alina Parker</h1></li>
                                 <li><h1>Alina Parker</h1></li>
                                 <li><h1>Alina Parker</h1></li>
                                 <li><h1>Alina Parker</h1></li>
                               </ul>
                              <p>Duis aute irure dolor in reprehenderit in voluptareu<br>
                                 dolore eu fugiat nulla pariatur.
                              </p>
                           </div>
                           <div class="banner-btn generic-btn d-inline-block">
                              <a href="#Contact">Hire Me</a>
                           </div>
                           <a href="#Portfolio" class="See-btn">See My Work</a>
                        </div>
                     </div>
                     <div class="col-lg-5 col-sm-12">
                        <div class="banner-right-con position-relative wow slideInRight" id="banner-right-con">
                           <figure class="mb-0">
                              <img src="{{ asset('assets/frontend_new/image/banner-right-img.png') }}" alt="banner-right-img" id="banner-right-img">
                           </figure>
                           <div class="best-award-con d-inline-block wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
                              <div class="best-award-inner-con">
                                 <figure class="mb-0">
                                    <img src="{{ asset('assets/frontend_new/image/cup-img.png') }}" alt="cup-img" class="img-fluid">
                                 </figure>
                                 <div class="best-award-title">
                                    <p class="mb-0">Best Design<br>
                                       Award.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="best-award-con d-inline-block happy-con wow bounceInUp " data-wow-duration="1s" data-wow-delay="1s">
                              <div class="best-award-inner-con text-center">
                                 <figure>
                                    <img src="{{ asset('assets/frontend_new/image/admin-icon.png') }}" alt="admin-icon" class="img-fluid">
                                 </figure>
                                 <div class="best-award-title d-inline-block ml-0">
                                    <p class="mb-0 d-inline-block count">4</p>
                                    <p class="mb-0 d-inline-block">k+</p>
                                    <span class="d-block">Happy<br>
                                    Customers</span>
                                 </div>
                              </div>
                           </div>
                           <div class="cursor"></div>
                           <div class="cursor2"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--banner-end-->
            </div>
         </section>
         @endif
       </div>
    </div>
    <!---header-and-banner-section-->
    <!-- service section -->
    <section class="w-100 float-left service-con padding-top padding-bottom position-relative" id="service-con" >
       <div class="container">
          <div class="service-inner-con position-relative">
             <div class="generic-title text-center">
                <h6>My Expertise</h6>
                <h2 class="mb-0">Provide Wide Range of<br>
                   Digital Services
                </h2>
             </div>
             <div class="service-box wow fadeInUp">
                <div class="row">
                   <div class="col-lg-6 col-md-6">
                      <div class="service-box-item">
                         <figure class="mb-0">
                            <img src="{{ asset('assets/frontend_new/image/service-icon1.png') }}" alt="service-icon" class="img-fluid">
                         </figure>
                         <div class="service-box-item-content">
                            <h4>Ui/Ux Design</h4>
                            <p>Dolor repellendus temporibus autem 
                               quibusdam officiis debitis rerum neces
                               aibus minima veniam.
                            </p>
                            <a href="#" data-toggle="modal" data-target="#Ui-Design">Read More</a>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                      <div class="service-box-item">
                         <figure class="mb-0">
                            <img src="{{ asset('assets/frontend_new/image/service-icon2.png') }}" alt="service-icon" class="img-fluid">
                         </figure>
                         <div class="service-box-item-content">
                            <h4>Web Design</h4>
                            <p>Dolor repellendus temporibus autem 
                               quibusdam officiis debitis rerum neces
                               aibus minima veniam.
                            </p>
                            <a href="#" data-toggle="modal" data-target="#web-design">Read More</a>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="row mb-0">
                   <div class="col-lg-6 col-md-6">
                      <div class="service-box-item">
                         <figure class="mb-0">
                            <img src="{{ asset('assets/frontend_new/image/service-icon3.png') }}" alt="service-icon" class="img-fluid">
                         </figure>
                         <div class="service-box-item-content">
                            <h4>Web Development</h4>
                            <p>Dolor repellendus temporibus autem 
                               quibusdam officiis debitis rerum neces
                               aibus minima veniam.
                            </p>
                            <a href="#" data-toggle="modal" data-target="#web-development">Read More</a>
                         </div>
                      </div>
                   </div>
                   <div class="col-lg-6 col-md-6">
                      <div class="service-box-item mb-0">
                         <figure class="mb-0">
                            <img src="{{ asset('assets/frontend_new/image/service-icon4.png') }}" alt="service-icon" class="img-fluid">
                         </figure>
                         <div class="service-box-item-content">
                            <h4>App Development</h4>
                            <p>Dolor repellendus temporibus autem 
                               quibusdam officiis debitis rerum neces
                               aibus minima veniam.
                            </p>
                            <a href="#" data-toggle="modal" data-target="#app-development">Read More</a>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- service section -->
    <!-- skill section -->
    @if ($section_arr['skill_section'] == "show")
    <section class="w-100 float-left skill-con padding-top padding-bottom position-relative" id="about-con">
       <div class="container">
          <div class="skill-inner-con position-relative">
             <div class="row">
                <div class="col-lg-6 order-lg-0 order-2">
                   <div class="skill-left-con text-center wow slideInLeft" >
                      <div class="row service-skill-sttaf-con">
                         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="skill-left-item-con">
                               <div class="circle-wrap firstPercentage">
                                  <div class="circle">
                                     <div class="mask full">
                                        <div class="fill"></div>
                                     </div>
                                     <div class="mask half">
                                        <div class="fill"></div>
                                     </div>
                                     <div class="inside-circle">
                                        <div class="service-skill-sttaf-item-con">
                                           <div class="service-skill-sttaf-item-title service-skill-sttaf-item1-con d-flex align-items-center justify-content-center">
                                              <h4 class="d-table-cell align-middle mb-0 text-center count">75</h4>
                                              <span class="static-txt2">%</span>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="service-skill-sttaf-item-heading">
                                  <p class="mb-0">Graphic Design</p>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="skill-left-item-con">
                               <div class="circle-wrap secondPercentage">
                                  <div class="circle">
                                     <div class="mask full">
                                        <div class="fill"></div>
                                     </div>
                                     <div class="mask half">
                                        <div class="fill"></div>
                                     </div>
                                     <div class="inside-circle">
                                        <div class="service-skill-sttaf-item-con">
                                           <div class="service-skill-sttaf-item-title service-skill-sttaf-item2-con text-center d-flex align-items-center justify-content-center">
                                              <h4 class=" mb-0 text-center count">95</h4>
                                              <span class=" static-txt2">%</span>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="service-skill-sttaf-item-heading">
                                  <p class="mb-0">Web Designing</p>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="row service-skill-sttaf-con">
                         <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="skill-left-item-con">
                               <div class="circle-wrap thirdPercentage">
                                  <div class="circle">
                                     <div class="mask full">
                                        <div class="fill"></div>
                                     </div>
                                     <div class="mask half">
                                        <div class="fill"></div>
                                     </div>
                                     <div class="inside-circle">
                                        <div class="service-skill-sttaf-item-con">
                                           <div class="service-skill-sttaf-item-title service-skill-sttaf-item1-con d-flex align-items-center justify-content-center">
                                              <h4 class="d-table-cell align-middle mb-0 text-center count">85</h4>
                                              <span class="static-txt2">%</span>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="service-skill-sttaf-item-heading">
                                  <p class="mb-0">Mobile Development</p>
                               </div>
                            </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
                            <div class="skill-left-item-con">
                               <div class="circle-wrap fourPercentage">
                                  <div class="circle">
                                     <div class="mask full">
                                        <div class="fill"></div>
                                     </div>
                                     <div class="mask half">
                                        <div class="fill"></div>
                                     </div>
                                     <div class="inside-circle">
                                        <div class="service-skill-sttaf-item-con">
                                           <div class="service-skill-sttaf-item-title service-skill-sttaf-item2-con text-center d-flex align-items-center justify-content-center">
                                              <h4 class=" mb-0 text-center count">80</h4>
                                              <span class=" static-txt2">%</span>
                                           </div>
                                        </div>
                                     </div>
                                  </div>
                               </div>
                               <div class="service-skill-sttaf-item-heading">
                                  <p class="mb-0">Web Development</p>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                   <div class="skill-right-con wow slideInRight" >
                      <h6>My Skills</h6>
                      <h2>{{ $skill_section->section_title }}
                      </h2>
                      <p>{{ $skill_section->desc }}
                      </p>
                      <div class="generic-btn download-bnt">
                         <a href="#" id="downloadImg" onclick="downloadImage()">Download CV</a>                  
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </section>
    @else
    <section class="w-100 float-left skill-con padding-top padding-bottom position-relative" id="about-con">
        <div class="container">
           <div class="skill-inner-con position-relative">
              <div class="row">
                 <div class="col-lg-6 order-lg-0 order-2">
                    <div class="skill-left-con text-center wow slideInLeft" >
                       <div class="row service-skill-sttaf-con">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                             <div class="skill-left-item-con">
                                <div class="circle-wrap firstPercentage">
                                   <div class="circle">
                                      <div class="mask full">
                                         <div class="fill"></div>
                                      </div>
                                      <div class="mask half">
                                         <div class="fill"></div>
                                      </div>
                                      <div class="inside-circle">
                                         <div class="service-skill-sttaf-item-con">
                                            <div class="service-skill-sttaf-item-title service-skill-sttaf-item1-con d-flex align-items-center justify-content-center">
                                               <h4 class="d-table-cell align-middle mb-0 text-center count">75</h4>
                                               <span class="static-txt2">%</span>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="service-skill-sttaf-item-heading">
                                   <p class="mb-0">Graphic Design</p>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                             <div class="skill-left-item-con">
                                <div class="circle-wrap secondPercentage">
                                   <div class="circle">
                                      <div class="mask full">
                                         <div class="fill"></div>
                                      </div>
                                      <div class="mask half">
                                         <div class="fill"></div>
                                      </div>
                                      <div class="inside-circle">
                                         <div class="service-skill-sttaf-item-con">
                                            <div class="service-skill-sttaf-item-title service-skill-sttaf-item2-con text-center d-flex align-items-center justify-content-center">
                                               <h4 class=" mb-0 text-center count">95</h4>
                                               <span class=" static-txt2">%</span>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="service-skill-sttaf-item-heading">
                                   <p class="mb-0">Web Designing</p>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="row service-skill-sttaf-con">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                             <div class="skill-left-item-con">
                                <div class="circle-wrap thirdPercentage">
                                   <div class="circle">
                                      <div class="mask full">
                                         <div class="fill"></div>
                                      </div>
                                      <div class="mask half">
                                         <div class="fill"></div>
                                      </div>
                                      <div class="inside-circle">
                                         <div class="service-skill-sttaf-item-con">
                                            <div class="service-skill-sttaf-item-title service-skill-sttaf-item1-con d-flex align-items-center justify-content-center">
                                               <h4 class="d-table-cell align-middle mb-0 text-center count">85</h4>
                                               <span class="static-txt2">%</span>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="service-skill-sttaf-item-heading">
                                   <p class="mb-0">Mobile Development</p>
                                </div>
                             </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-12 ">
                             <div class="skill-left-item-con">
                                <div class="circle-wrap fourPercentage">
                                   <div class="circle">
                                      <div class="mask full">
                                         <div class="fill"></div>
                                      </div>
                                      <div class="mask half">
                                         <div class="fill"></div>
                                      </div>
                                      <div class="inside-circle">
                                         <div class="service-skill-sttaf-item-con">
                                            <div class="service-skill-sttaf-item-title service-skill-sttaf-item2-con text-center d-flex align-items-center justify-content-center">
                                               <h4 class=" mb-0 text-center count">80</h4>
                                               <span class=" static-txt2">%</span>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                                <div class="service-skill-sttaf-item-heading">
                                   <p class="mb-0">Web Development</p>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-lg-6 d-flex align-items-center">
                    <div class="skill-right-con wow slideInRight" >
                       <h6>My Skills</h6>
                       <h2>Beautiful & Unique
                          Digital Experiences
                       </h2>
                       <p>Nostrum exercitationem ullam corporis suscipit laborioa
                          nisi ut aliquid exrea commodi consequatur magni dolores 
                          aos qui ratione voluptatem nesciunt.
                       </p>
                       <p>Quia voluptas sit aspernatur aut odit aut fugit, sed ruiano
                          consequntar magni dolores.
                       </p>
                       <div class="generic-btn download-bnt">
                          <a href="#" id="downloadImg" onclick="downloadImage()">Download CV</a>                  
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     @endif
    <!-- skill section -->
    <!-- portfolio section -->
    <section class="w-100 float-left portfolio-con padding-top" id="Portfolio">
       <div class="container">
          <div class="generic-title text-center">
             <h6 class="text-white">Creative Works</h6>
             <h2 class="mb-0 text-white">Check My Portfolio</h2>
          </div>
          <div id="myBtnContainer" class="text-center">
             <button class=" active active_button" onclick="filterSelection('all')"> All </button>
             <button class="" onclick="filterSelection('cars')">Products </button>
             <button class="" onclick="filterSelection('animals')">Web App</button>
             <button class="" onclick="filterSelection('fruits')"> Inetraction </button>
             <button class="" onclick="filterSelection('colors')">Brand Identity</button>
          </div>
       </div>
    </section>
    <!-- portfolio section -->
    <!-- portfolio section -->
    <section class="w-100 float-left portfolio-body-con">
       <div class="container">
          <div class="portfolio-img-con position-relative w-100 float-left wow fadeInUp" >
             <div class="filterDiv cars position-relative">
                <a href="#" data-toggle="modal" data-target="#modalWPWAF">
                   <div class="portfolio-img position-relative">
                      <figure>
                         <img src="{{ asset('assets/frontend_new/image/portfolio-img1.png') }}" alt="portfolio-img1" class="img-fluid"> 
                      </figure>
                   </div>
                </a>
                   <div class="portfolio-img-content text-left">
                      <div class="portfolio-img-title d-inline-block">
                         <h4>Application UI Design</h4>
                         <p>Dolar repellendus temporibus...</p>
                      </div>
                   <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modalWPWAF-icon">
                    <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i>
                </a> 
                </div>
                
             </div>
             <div class="filterDiv colors fruits position-relative">
                <a href="#" data-toggle="modal" data-target="#modalporfolio2">
                   <div class="portfolio-img position-relative">
                      <figure>
                         <img src="{{ asset('assets/frontend_new/image/portfolio-img2.png') }}" alt="portfolio-img1" class="img-fluid"> 
                      </figure>
                   </div>
                </a>
                   <div class="portfolio-img-content text-left">
                      <div class="portfolio-img-title d-inline-block">
                         <h4 >Furni furniture UI Design</h4>
                         <p >Dolar repellendus temporibus...</p>
                      </div>
                   <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modalporfolio2-icon">
                   <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i>
                   </a>
                </div>
                
             </div>
             <div class="filterDiv cars position-relative">
                <a href="#" data-toggle="modal" data-target="#modalporfolio3">
                   <div class="portfolio-img position-relative">
                      <figure>
                         <img src="{{ asset('assets/frontend_new/image/portfolio-img3.png') }}" alt="portfolio-img1" class="img-fluid"> 
                      </figure>
                   </div>
                </a>
                   <div class="portfolio-img-content text-left">
                      <div class="portfolio-img-title d-inline-block">
                         <h4 >Mobile UI Design</h4>
                         <p >Dolar repellendus temporibus...</p>
                      </div>
                <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modalporfolio3-icon"><i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i></a>
                </div>
               
             </div>
             <div class="filterDiv colors position-relative">
                <a href="#" data-toggle="modal" data-target="#modalporfolio4">
                   <div class="portfolio-img position-relative">
                      <figure>
                         <img src="{{ asset('assets/frontend_new/image/portfolio-img4.png') }}" alt="portfolio-img1" class="img-fluid"> 
                      </figure>
                   </div>
                </a>
                   <div class="portfolio-img-content text-left">
                      <div class="portfolio-img-title d-inline-block">
                         <h4 >Businesscard UI Design</h4>
                         <p >Dolar repellendus temporibus...</p>
                      </div>
                <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modalporfolio4-icon"><i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i></a>
                </div>
                
             </div>
             <div class="filterDiv cars animals position-relative">
                <a href="#" data-toggle="modal" data-target="#modalporfolio5">
                   <div class="portfolio-img position-relative">
                      <figure>
                         <img src="{{ asset('assets/frontend_new/image/portfolio-img5.png') }}" alt="portfolio-img1" class="img-fluid"> 
                      </figure>
                   </div>
                </a>
                   <div class="portfolio-img-content text-left">
                      <div class="portfolio-img-title d-inline-block">
                         <h4 >Real estate UI Design</h4>
                         <p >Dolar repellendus temporibus...</p>
                      </div>
                <a href="#" class="float-lg-right" data-toggle="modal" data-target="#modalporfolio5-icon"><i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i></a>
                </div>
                
             </div>
          </div>
       </div>
    </section>
    <!-- portfolio section -->
    <!-- tastimonials section -->
    <section class="w-100 float-left padding-top padding-bottom tastimonials-con position-relative text-lg-left text-center" id="testimonials">
       <div class="container">
          <div class="row">
             <div class="col-lg-5">
                <div class="tastimonials-left-con wow slideInLeft" >
                   <figure class="mb-0">
                      <img src="{{ asset('assets/frontend_new/image/tastimonials-img.png') }}" alt="tastimonials-img" class="img-fluid">
                   </figure>
                </div>
             </div>
             <div class="col-lg-7">
                <div id="carouselExampleControls" class="carousel slide wow slideInRight" data-ride="carousel" >
                   <div class="carousel-inner">
                      <div class="carousel-item active">
                         <div class="testimonials-content">
                            <h6>Testimonials</h6>
                            <h2>Happy Clients Feedback</h2>
                            <figure class="mb-0">
                               <img src="{{ asset('assets/frontend_new/image/comma-icon.png') }}" alt="comma-icon" class="img-fluid">
                            </figure>
                            <div class="testimonials-inner-content">
                               <p>Quisruam est, qui dolorem ipsum quia dolor sit amet, consecteaur
                                  aeci velit, sed quia non numquam eius modi tempora incidunt ut lao
                                  magnam aliquam quaerat voluptatem reprehenderit in voluptate
                                  cillum dolore eu fugiat nulla pariatur maxime...
                               </p>
                               <span class="d-block auther-name">Kevin Andrew</span>
                               <span class="d-block">CEO  of the company</span>
                            </div>
                         </div>
                      </div>
                      <div class="carousel-item">
                         <div class="testimonials-content">
                            <h6>Testimonials</h6>
                            <h2>Happy Clients Feedback</h2>
                            <figure class="mb-0">
                               <img src="{{ asset('assets/frontend_new/image/comma-icon.png') }}" alt="comma-icon" class="img-fluid">
                            </figure>
                            <div class="testimonials-inner-content">
                               <p>Quisruam est, qui dolorem ipsum quia dolor sit amet, consecteaur
                                  aeci velit, sed quia non numquam eius modi tempora incidunt ut lao
                                  magnam aliquam quaerat voluptatem reprehenderit in voluptate
                                  cillum dolore eu fugiat nulla pariatur maxime...
                               </p>
                               <span class="d-block auther-name">Kevin Andrew</span>
                               <span class="d-block">CEO  of the company</span>
                            </div>
                         </div>
                      </div>
                      <div class="carousel-item">
                         <div class="testimonials-content">
                            <h6>Testimonials</h6>
                            <h2>Happy Clients Feedback</h2>
                            <figure class="mb-0">
                               <img src="{{ asset('assets/frontend_new/image/comma-icon.png') }}" alt="comma-icon" class="img-fluid">
                            </figure>
                            <div class="testimonials-inner-content">
                               <p>Quisruam est, qui dolorem ipsum quia dolor sit amet, consecteaur
                                  aeci velit, sed quia non numquam eius modi tempora incidunt ut lao
                                  magnam aliquam quaerat voluptatem reprehenderit in voluptate
                                  cillum dolore eu fugiat nulla pariatur maxime...
                               </p>
                               <span class="d-block auther-name">Kevin Andrew</span>
                               <span class="d-block">CEO  of the company</span>
                            </div>
                         </div>
                      </div>
                   </div>
                   <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                   <i class="fas fa-arrow-left d-flex align-items-center justify-content-center"></i>
                   <span class="sr-only">Previous</span>
                   </a>
                   <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                   <i class="fas fa-arrow-right d-flex align-items-center justify-content-center"></i>
                   <span class="sr-only">Next</span>
                   </a>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- tastimonials section -->
    <!-- blog section -->
    @if ($section_arr['blog_section'] == "show")
    @if (isset($blog_section) || count($recent_posts) > 0)
    <section class="w-100 float-left blog-con padding-top padding-bottom position-relative" id="blog">
       <div class="container">
          <div class="blog-inner-con position-relative">
            @isset ($blog_section)
             <div class="generic-title text-center">
                <h6>{{ $blog_section->section_title }}</h6>
                <h2 class="mb-0">{{ $blog_section->desc }}</h2>
             </div>
             @endisset
             <div class="blog-box wow fadeInUp" >
                <div class="row">
                  @foreach ($recent_posts as $recent_post)
                   <div class="col-lg-4">
                      <div class="blog-box-item">
                        @if (!empty($recent_post->blog_image))
                         <div class="blog-img">
                            <a href="{{ route('blog-page.show', ['slug' => $recent_post->slug]) }}" data-toggle="modal" data-target="#blog-model-1">
                               <figure class="mb-0">
                                  <img src="{{ asset('uploads/img/blog/'.$recent_post->blog_image) }}" alt="blog-img" class="img-fluid">
                               </figure>
                            </a>
                         </div>
                         @else
                         <div class="blog-img">
                           <a href="#" data-toggle="modal" data-target="#blog-model-1">
                              <figure class="mb-0">
                                 <img src="{{ asset('assets/frontend_new/image/blog-img-1.png') }}" alt="blog-img" class="img-fluid">
                              </figure>
                           </a>
                        </div>
                        @endif
                         <div class="blog-content">
                            <div class="blog-auteher-title">
                               <span>By David William</span>
                               <span class="float-lg-right">Mar 8, 2022</span>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#blog-model-1">
                               <h4>Quis autem vea eum 
                                  iure reprehenderit
                               </h4>
                            </a>
                            <p>Dolor repellendus temporibus autem 
                               quibusdam officiis debitis rerum nece
                               aibus minima veniam.
                            </p>
                            <a href="#" data-toggle="modal" data-target="#blog-model-1">Read More</a>
                         </div>
                      </div>
                   </div>
                   @endforeach
                </div>
             </div>
          </div>
       </div>
    </section>
    @else
    <section class="w-100 float-left blog-con padding-top padding-bottom position-relative" id="blog">
      <div class="container">
         <div class="blog-inner-con position-relative">
            <div class="generic-title text-center">
               <h6>Latest News</h6>
               <h2 class="mb-0">Blog & Articles</h2>
            </div>
            <div class="blog-box wow fadeInUp" >
               <div class="row">
                  <div class="col-lg-4">
                     <div class="blog-box-item">
                        <div class="blog-img">
                           <a href="#" data-toggle="modal" data-target="#blog-model-1">
                              <figure class="mb-0">
                                 <img src="{{ asset('assets/frontend_new/image/blog-img-1.png') }}" alt="blog-img" class="img-fluid">
                              </figure>
                           </a>
                        </div>
                        <div class="blog-content">
                           <div class="blog-auteher-title">
                              <span>By David William</span>
                              <span class="float-lg-right">Mar 8, 2022</span>
                           </div>
                           <a href="#" data-toggle="modal" data-target="#blog-model-1">
                              <h4>Quis autem vea eum 
                                 iure reprehenderit
                              </h4>
                           </a>
                           <p>Dolor repellendus temporibus autem 
                              quibusdam officiis debitis rerum nece
                              aibus minima veniam.
                           </p>
                           <a href="#" data-toggle="modal" data-target="#blog-model-1">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="blog-box-item">
                        <div class="blog-img">
                           <a href="#" data-toggle="modal" data-target="#blog-model-2">
                              <figure class="mb-0">
                                 <img src="{{ asset('assets/frontend_new/image/blog-img-2.png') }}" alt="blog-img" class="img-fluid">
                              </figure>
                           </a>
                        </div>
                        <div class="blog-content">
                           <div class="blog-auteher-title">
                              <span>By John Doe</span>
                              <span class="float-lg-right">Mar 9, 2022</span>
                           </div>
                           <a href="#" data-toggle="modal" data-target="#blog-model-2">
                              <h4>Reprehenderit in vouta
                                 velit esse cillum
                              </h4>
                           </a>
                           <p>Dolor repellendus temporibus autem 
                              quibusdam officiis debitis rerum nece
                              aibus minima veniam.
                           </p>
                           <a href="#" data-toggle="modal" data-target="#blog-model-2">Read More</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="blog-box-item mb-0">
                        <div class="blog-img">
                           <a href="#" data-toggle="modal" data-target="#blog-model-3">
                              <figure class="mb-0">
                                 <img src="{{ asset('assets/frontend_new/image/blog-img-3.png') }}" alt="blog-img" class="img-fluid">
                              </figure>
                           </a>
                        </div>
                        <div class="blog-content">
                           <div class="blog-auteher-title">
                              <span>By Elina Parker</span>
                              <span class="float-lg-right">Mar 10, 2022</span>
                           </div>
                           <a href="#" data-toggle="modal" data-target="#blog-model-3">
                              <h4>Soluta nobis ose aligen
                              optio cumue
                           </h4>
                           </a>
                           <p>Dolor repellendus temporibus autem 
                              quibusdam officiis debitis rerum nece
                              aibus minima veniam.
                           </p>
                           <a href="#" data-toggle="modal" data-target="#blog-model-3">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   @endif
   @endif
    <!-- blog section -->
    <!-- form section -->
    <section class="w-100 float-left form-main-con padding-top padding-bottom" id="Contact">
       <div class="container">
          <div class="form-main-inner-con position-relative">
             <div class="generic-title text-center">
                <h6>Get in Touch</h6>
                <h2 class="mb-0">Any Questions? Feel Free<br>
                   to Contact
                </h2>
             </div>
             <div class="row">
                <div class="col-lg-4 order-lg-0 order-2">
                   <div class="contact-information position-relative wow slideInLeft" >
                      <ul class="list-unstyled">
                        @if (!empty($site_info->address))
                         <li>
                            <figure class="mb-0 d-flex align-items-center justify-content-center">
                               <img src="{{ asset('assets/frontend_new/image/location-icon.png') }}" alt="location-icon" class="img-fluid">
                            </figure>
                            <div class="contact-information-content">
                               <h5>Address:</h5>
                               <p class="mb-0">{{ $site_info->address }} 
                               </p>
                            </div>
                         </li>
                         @endif
                         @if (!empty($site_info->email))
                         <li>
                            <figure class="mb-0 d-flex align-items-center justify-content-center">
                               <img src="{{ asset('assets/frontend_new/image/message-icon.png') }}" alt="message-icon" class="img-fluid">
                            </figure>
                            <div class="contact-information-content">
                               <h5>Email:</h5>
                               <p class="mb-0">{{ $site_info->email }}</p>
                            </div>
                         </li>
                         @endif
                         @if (!empty($site_info->phone))
                         <li class="mb-0">
                            <figure class="mb-0 d-flex align-items-center justify-content-center">
                               <img src="{{ asset('assets/frontend_new/image/phone-icon.png') }}" alt="phone-icon" class="img-fluid">
                            </figure>
                            <div class="contact-information-content">
                               <h5>Phone:</h5>
                               <p class="mb-0">{{ $site_info->phone }}</p>
                            </div>
                         </li>
                         @endif
                      </ul>
                   </div>
                </div>
                <div class="col-lg-8">
                  <form action="{{ route('message.store') }}" class="contact-form wow slideInRight text-lg-left text-center" method="POST">
                     @csrf
                      <div class="row">
                         <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-0">    
                               <input type="text" placeholder="{{ __('frontend.your_name') }}" required name="name" id="name"> 
                            </div>
                         </div>
                         <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-0">
                               <input type="email" name="email" placeholder="{{ __('frontend.your_email') }}" required>
                               <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                         </div>
                         <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-0">    
                               <input type="tel" placeholder="{{ __('frontend.your_phone') }}" required> 
                            </div>
                         </div>
                         <div class="col-md-6">
                           <div class="custom-form-group">
                              <span id="contactFormCaptchaSpan"></span> 
                              <input type="text" class="captcha-input custom-form-control" name="contact_question" placeholder="{{ __('frontend.please_enter_code') }}" required>
                               
                               <input type="hidden" name="null_value" value="">
                               <input type="hidden" name="captcha" id="contactFormCaptchaVal">
                               <div class="form-validate-icons">
                                   <span></span>
                               </div>
                           </div>
                       </div>
                         <div class="col-lg-6 col-md-6">
                            <div class="form-group mb-0">    
                               <input type="text" name="subject" placeholder="{{ __('frontend.your_subject') }}" required> 
                            </div>
                         </div>
                      </div>
                      <div class="row">
                         <div class="col-lg-12">
                            <div class=" form-group mb-0">    
                               <textarea  placeholder="{{ __('frontend.your_message') }}" required name="message" cols="30" rows="6"></textarea>
                            </div>
                         </div>
                      </div>
                      <button type="submit" class="appointment-btn">{{ __('frontend.send_message') }}</button>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </section>
    <!-- form section -->
    <!-- weight footer section -->
    <div class="w-100 float-left weight-footer-con position-relative">
       <div class="container">
          <div class="weight-footer-content text-center wow fadeInUp" >
             <figure class="">
                <img src="{{ asset('assets/frontend_new/image/whitelogo.png') }}" alt="footer-logo" class="img-fluid">
             </figure>
             <div class="footer-navbar">
                <ul class="list-unstyled">
                   <li class="d-inline-block border-left-0 pl-0"><a href="#home">Home</a></li>
                   <li class="d-inline-block"><a href="#about-con">About</a></li>
                   <li class="d-inline-block"><a href="#service-con">Services</a></li>
                   <li class="d-inline-block"><a href="#Portfolio">Portfolio</a></li>
                   <li class="d-inline-block"><a href="#testimonials">Blog</a></li>
                   <li class="d-inline-block pr-0"><a href="#Contact">Contact</a></li>
                </ul>
             </div>
             <div class="footer-social-icon">
                <ul class="mb-0">
                   <li class="d-inline-block">
                      <a href="https://www.behance.net/"><i class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                   </li>
                   <li class="d-inline-block">
                      <a href="https://dribbble.com/"><i class="fab fa-dribbble d-flex align-items-center justify-content-center"></i></a>
                   </li>
                   <li class="d-inline-block">
                      <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                   </li>
                </ul>
             </div>
          </div>
          @if (!empty($site_info->copyright))
          <div class="copy-right-content text-center">
             <p class="mb-0">{{ $site_info->copyright }}</p>
          </div>
          @endif
       </div>
    </div>
    <a id="button"></a>
    <div id="modalWPWAF" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="assets/image/portfolio-model-img1.jfif" alt="portfolio-model-img1" class="img-fluid">
                </figure>
                <h4>Application UI Design</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="modalWPWAF-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="assets/image/portfolio-model-img1.jfif" alt="portfolio-model-img1" class="img-fluid">
                </figure>
                <h4>Application UI Design</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="modalporfolio2" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="assets/image/portfolio-model-img2.jfif" alt="portfolio-model-img1" class="img-fluid">
                </figure>
                <h4>Furni furniture UI Design</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="modalporfolio2-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="assets/image/portfolio-model-img2.jfif" alt="portfolio-model-img1" class="img-fluid">
                </figure>
                <h4>Furni furniture UI Design</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="modalporfolio3" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="assets/image/portfolio-model-img3.jfif" alt="portfolio-model-img1" class="img-fluid">
                </figure>
                <h4>Mobile UI Design</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="modalporfolio3-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="assets/image/portfolio-model-img3.jfif" alt="portfolio-model-img1" class="img-fluid">
                </figure>
                <h4>Mobile UI Design</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="modalporfolio4" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="assets/image/portfolio-model-img4.jfif" alt="portfolio-model-img1" class="img-fluid">
                </figure>
                <h4>Businesscard UI Design</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="modalporfolio4-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="assets/image/portfolio-model-img4.jfif" alt="portfolio-model-img1" class="img-fluid">
                </figure>
                <h4>Businesscard UI Design</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="modalporfolio5" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="assets/image/portfolio-model-img5.png" alt="portfolio-model-img1" class="img-fluid">
                </figure>
                <h4>Real estate UI Design</h4>
                <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="modalporfolio5-icon" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="assets/image/portfolio-model-img5.jfif" alt="portfolio-model-img1" class="img-fluid">
                </figure>
                <h4>Real estate UI Design</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release .</p>
                <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="Ui-Design" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="assets/image/ui-ux-model-img.jpg" alt="ui-ux-model-img" class="img-fluid">
                </figure>
                <h4>Ui/Ux Design</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
                   <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="web-design" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="{{ asset('assets/frontend_new/image/web-designer-model-img.jpg') }}" alt="web-designer-model-img" class="img-fluid">
                </figure>
                <h4>Web Design</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
                   <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="web-development" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="{{ asset('assets/frontend_new/image/web-development-model-img.jpg') }}" alt="web-development-model-img" class="img-fluid">
                </figure>
                <h4>Web Development</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
                   <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="app-development" class="modal fade" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body service-model-content">
                <figure class="mb-0">
                   <img src="{{ asset('assets/frontend_new/image/App-development-model-img.JPG') }}" alt="App-development-model-img" class="img-fluid">
                </figure>
                <h4>App Development</h4>
                <p class="mb-md-4 mb-2">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
                   <ul class="list-unstyled model-list mb-md-3 mb-2">
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                   <li><i class="fas fa-check-circle"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry</li>
                </ul>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>  
             </div>
          </div>
       </div>
    </div>
    <div id="blog-model-1" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body">
                <div class="blog-box-item mb-0">
                   <div class="blog-img">
                      <figure class="mb-0">
                         <img src="{{ asset('assets/frontend_new/image/blog-model-img1.png') }}" alt="blog-img" class="img-fluid">
                      </figure>
                   </div>
                   <div class="blog-content pl-0 pr-0">
                      <div class="blog-auteher-title">
                         <span>By Elina Parker</span>
                         <span class="float-lg-right">Mar 8, 2022</span>
                      </div>
                      <h4>Quis autem vea eum 
                         iure reprehenderit
                      </h4>
                      <div class="footer-social-icon mb-0">
                         <ul>
                            <li class="d-inline-block">
                               <a href="https://www.behance.net/"><i class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                            </li>
                            <li class="d-inline-block">
                               <a href="https://dribbble.com/"><i class="fab fa-dribbble d-flex align-items-center justify-content-center"></i></a>
                            </li>
                            <li class="d-inline-block">
                               <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                            </li>
                         </ul>
                      </div>
                      <p class="mb-md-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat, eget tincidunt eros diam quis nunc.</p>
                      <h4 class="comment-title">LEAVE A COMMENT</h4>
                      <form class="contact-form blog-model-form">
                         <div class="row">
                            <div class="col-lg-6 col-md-6">
                               <div class="form-group mb-0">    
                                  <input type="text" placeholder="Name" name="name"> 
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                               <div class="form-group mb-0">
                                  <input type="email" placeholder="Email">
                                  <small class="form-text text-muted"></small>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                               <div class="form-group mb-0">    
                                  <input type="tel" placeholder="Phone"> 
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                               <div class="form-group mb-0">    
                                  <input type="text" placeholder="Subject"> 
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-lg-12">
                               <div class=" form-group mb-0">    
                                  <textarea placeholder="Message" rows="3" name="comments"></textarea>
                               </div>
                            </div>
                         </div>
                         <button type="submit" class="appointment-btn">Submit</button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="blog-model-2" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body">
                <div class="blog-box-item mb-0">
                   <div class="blog-img">
                      <figure class="mb-0">
                         <img src="assets/image/blog-model-img2.png" alt="blog-img" class="img-fluid">
                      </figure>
                   </div>
                   <div class="blog-content pl-0 pr-0">
                      <div class="blog-auteher-title">
                         <span>By Elina Parker</span>
                         <span class="float-lg-right">Mar 9, 2022</span>
                      </div>
                      <h4>Reprehenderit in vouta
                         velit esse cillum
                      </h4>
                      <div class="footer-social-icon mb-0">
                         <ul>
                            <li class="d-inline-block">
                               <a href="https://www.behance.net/"><i class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                            </li>
                            <li class="d-inline-block">
                               <a href="https://dribbble.com/"><i class="fab fa-dribbble d-flex align-items-center justify-content-center"></i></a>
                            </li>
                            <li class="d-inline-block">
                               <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                            </li>
                         </ul>
                      </div>
                      <p class="mb-md-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat, eget tincidunt eros diam quis nunc.</p>
                      <h4 class="comment-title">LEAVE A COMMENT</h4>
                      <form class="contact-form blog-model-form">
                         <div class="row">
                            <div class="col-lg-6 col-md-6">
                               <div class="form-group mb-0">    
                                  <input type="text" placeholder="Name" name="name"> 
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                               <div class="form-group mb-0">
                                  <input type="email" placeholder="Email">
                                  <small class="form-text text-muted"></small>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                               <div class="form-group mb-0">    
                                  <input type="tel" placeholder="Phone"> 
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                               <div class="form-group mb-0">    
                                  <input type="text" placeholder="Subject"> 
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-lg-12">
                               <div class=" form-group mb-0">    
                                  <textarea placeholder="Message" rows="3" name="comments"></textarea>
                               </div>
                            </div>
                         </div>
                         <button type="submit" class="appointment-btn">Submit</button>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div id="blog-model-3" class="modal fade blog-model-con" tabindex="-1" style="display: none;" aria-hidden="true">
       <div class="modal-dialog">
          <div class="modal-content">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" ><i class="far fa-times"></i></span></button>
             </div>
             <div class="modal-body">
                <div class="blog-box-item mb-0">
                   <div class="blog-img">
                      <figure class="mb-0">
                         <img src="assets/image/blog-model-img1.png" alt="blog-img" class="img-fluid">
                      </figure>
                   </div>
                   <div class="blog-content pl-0 pr-0">
                      <div class="blog-auteher-title">
                         <span>By Elina Parker</span>
                         <span class="float-lg-right">Mar 10, 2022</span>
                      </div>
                      <h4>Soluta nobis ose aligen
                         optio cumue
                      </h4>
                      <div class="footer-social-icon mb-0">
                         <ul>
                            <li class="d-inline-block">
                               <a href="https://www.behance.net/"><i class="fab fa-behance d-flex align-items-center justify-content-center"></i></a>
                            </li>
                            <li class="d-inline-block">
                               <a href="https://dribbble.com/"><i class="fab fa-dribbble d-flex align-items-center justify-content-center"></i></a>
                            </li>
                            <li class="d-inline-block">
                               <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in d-flex align-items-center justify-content-center"></i></a>
                            </li>
                         </ul>
                      </div>
                      <p class="mb-md-4 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor eros a tellus auctor, nec suscipit nunc dignissim. Ut suscipit gravida augue sed elementum. Sed sed luctus nisl. Donec scelerisque nisi in sodales mattis. Vestibulum suscipit odio ac enim blandit sollicitudin. Aliquam ultrices sem quis urna placerat interdum. Etiam rutrum, quam sagittis tristique mollis, libero arcu scelerisque erat, eget tincidunt eros diam quis nunc.</p>
                      <h4 class="comment-title">LEAVE A COMMENT</h4>
                      <form class="contact-form blog-model-form">
                         <div class="row">
                            <div class="col-lg-6 col-md-6">
                               <div class="form-group mb-0">    
                                  <input type="text" placeholder="Name" name="name"> 
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                               <div class="form-group mb-0">
                                  <input type="email" placeholder="Email">
                                  <small class="form-text text-muted"></small>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                               <div class="form-group mb-0">    
                                  <input type="tel" placeholder="Phone"> 
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                               <div class="form-group mb-0">    
                                  <input type="text" placeholder="Subject"> 
                               </div>
                            </div>
                         </div>
                         <div class="row">
                            <div class="col-lg-12">
                               <div class=" form-group mb-0">    
                                  <textarea placeholder="Message" rows="3" name="comments"></textarea>
                               </div>
                            </div>
                         </div>
                         <button type="submit" class="appointment-btn">Submit</button>
                      </form>
                      
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>



 <!-- weight footer section -->
 <script src="{{ asset('assets/frontend_new/js/wow.js') }}"></script>
 <script>
    new WOW().init();
 </script>
 <script src="{{ asset('assets/frontend_new/js/jquery-3.6.0.min.js') }}"> </script>
 <script src="{{ asset('assets/frontend_new/js/popper.min.js') }}"> </script>
 <script src="{{ asset('assets/frontend_new/js/bootstrap.min.js') }}"> </script>
 <script src="{{ asset('assets/frontend_new/js/custom-script.js') }}"> </script>
 <script src="{{ asset('assets/frontend/js/main.js') }}"></script>
 <script src="{{ asset('assets/frontend/vendor/js/jquery.min.js') }}"></script>
<!--// Images Loaded //-->
<script src="{{ asset('assets/frontend/vendor/js/images.loaded.min.js') }}"></script>
<!--// Magnific Popup //-->
<script src="{{ asset('assets/frontend/vendor/js/magnific.popup.min.js') }}"></script>
<!--// Popper Popup //-->
<script src="{{ asset('assets/frontend/vendor/js/popper.min.js') }}"></script>
<!--// Bootstrap //-->
<script src="{{ asset('assets/frontend/vendor/js/bootstrap.min.js') }}"></script>
<!--// Wow Js //-->
<script src="{{ asset('assets/frontend/vendor/js/wow.min.js') }}"></script>
<!--// Waypoint Js //-->
<script src="{{ asset('assets/frontend/vendor/js/waypoint.min.js') }}"></script>
<!--// Counter Up Js //-->
<script src="{{ asset('assets/frontend/vendor/js/counter.up.min.js') }}"></script>
<!--// JQuery Easing Functions //-->
<script src="{{ asset('assets/frontend/vendor/js/jquery.easing.min.js') }}"></script>
<!--// ScrollIt //-->
<script src="{{ asset('assets/frontend/vendor/js/scrollit.min.js') }}"></script>
<!--// Owl Carousel //-->
<script src="{{ asset('assets/frontend/vendor/js/owl.carousel.min.js') }}"></script>
<!--// Isotope Gallery //-->
<script src="{{ asset('assets/frontend/vendor/js/isotope.min.js') }}"></script>
<!--// Isotope Gallery //-->
<script src="{{ asset('assets/frontend/vendor/js/fancybox.min.js') }}"></script>
<!--// Form Validate //-->
<script src="{{ asset('assets/frontend/vendor/js/jquery.form.validate.js') }}"></script>
<!--// Main Js //-->
<script src="{{ asset('assets/frontend/js/main.js') }}"></script>
 <script>
    filterSelection("all")
    function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("filterDiv");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
    }
    
    function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
    }
    }
    
    function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
    arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
    }
    element.className = arr1.join(" ");
    }
    
    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
    });
    }
 </script>
 <script>
    var btn = $('#button');
    
    $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
    btn.addClass('show');
    } else {
    btn.removeClass('show');
    }
    });
    
    btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({scrollTop:0}, '300');
    });
    
 </script>
 <script>
    $(window).scroll(function(){
    
    if ($(window).scrollTop() >= 113) {
    
    $('header').addClass('fixed-header');
    $('.banner-main-con').addClass('banner-main-con2');
    
    }
    
    else {
    
    $('header').removeClass('fixed-header');
    $('.banner-main-con').removeClass('banner-main-con2');
    
    }
    
    });
    
 </script>
<script>
document.querySelectorAll('.nav-item a').forEach(function(link, index){

link.addEventListener('click', function() {

if(this.classList.contains('is-active')) {

this.classList.remove('is-active');

} else {

const activeLink = document.querySelector('a.is-active'); // **

if (activeLink) {                                         // **

   activeLink.classList.remove('is-active');             // **

}                                                         // **

this.classList.add('is-active');

}

});

});

document.querySelectorAll('#myBtnContainer button').forEach(function(link, index){

link.addEventListener('click', function() {

if(this.classList.contains('active_button')) {

this.classList.remove('active_button');

} else {

const activeLink = document.querySelector('#myBtnContainer button.active_button'); // **

if (activeLink) {                                         // **

   activeLink.classList.remove('active_button');             // **

}                                                         // **

this.classList.add('active_button');

}

});

});
</script>
<script>
 function downloadImage() {
   source = 'assets/image/cv-img.png';
 const fileName = 'test-image.png';
 var el = document.createElement("a");
 el.setAttribute("href", source);
 el.setAttribute("download", fileName);
 document.body.appendChild(el);
 el.click();
 el.remove();
 }
</script>

</body>
</html>

