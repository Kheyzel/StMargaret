<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Hospice of St. Margaret of Cortona, Inc.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  {{-- <link href="assets/img/favicon1.png" rel="icon">  --}}
  <link rel="icon" href="assets/img/logo_st_margaret.png" type="image/x-icon" sizes="16x16"">
  {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

{{-- link my custom css --}}
<link rel="stylesheet" href="assets/css/custom.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top navbar-light py-1" padding="0px">
  {{-- <header id="header" class="fixed-top navbar-light py-1" style="background-color: #e3f2fd" padding="0px"> --}}
    <div class="container-fluid">
      <div class="row justify-content-center">
        <a href="{{route('landing.index')}}" class="navbar-brand " > <img src="assets/img/logo_st_margaret.png" alt="" class="d-inline-block align-top" width="50px" height="100%"></a>
        <div class="align-center">
          
        {{-- <a href="{{route('landing.index')}}">Hospice of St. Margaret of Cortona, Inc<span>.</span></a> --}}
        </div>

        <div class="col-xl-10 d-flex align-items-center justify-content-end">
                    {{-- <h1 class="logo mr-auto"><a href="{{route('landing.index')}}">Hospice of St. Margaret of Cortona, Inc<span>.</span></a></h1> --}}
          <!-- Uncomment below if you prefer to use an image logo -->
          {{-- <img src="assets/img/logo_st_margaret.png" href="{{route('landing.index')}}" alt="logo" width="100px" height="100px"> --}}



          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#header">Home</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#portfolio">What We Do</a></li>
              <li><a href="#services">Social Services</a></li>
              <li><a href="#org">Organizational Chart</a></li>
              <li><a href="#team">Calendar of Activities</a></li>
              <li><a href="#contact">Contact Us</a></li>
            </ul>
          </nav><!-- .nav-menu -->

          {{-- <a href="#about" class="get-started-btn scrollto">Get Started</a> --}}
        </div>
      </div>

    </div>
  </header><!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="zoom-out" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-10">
          <div class="row">
            <div class="col-xl-5">
              <h1>Hospice of St. Margaret of Cortona, Inc.</h1>
              <h2>Franciscan Sisters of the Sacred Hearts</h2>
              {{-- <a href="#about" class="btn-get-started scrollto">Find Out More</a> --}}
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch">
            <div class="content">
              <h3>Hospice of St. Margaret of Cortona, Inc.</h3>
              <h3>(History) </h3>
              <p>
                  The Mission Center started as a community-based child welfare service located in Calauan, Laguna through the invitation of the Salesian Priest through Mo. Flora Zippo, SFSC former Delegate Superior of the Franciscan Sisters of the Sacred Hearts marks the beginning of the apostolate and this Mission Center was named after Madre Giovanna Zippo, SFSC. Former Mother General.
                <br>
                  It was through Mo. Flora Zippo’s passion and love for the poor that inspire them to carry apostolate mission which will cater poor and disadvantaged children and families. And she wants to inculcate to children the value of spirituality, joy and simplicity as Franciscan.
                <br>
                  This Mission Center was established in year 2011 as a shelter for needy indigent, homeless and abandoned children. Likewise, mostly admitted in the shelter were coming the big number of resettled families of the government from slum areas in Manila particularly along the Pasig River and some of them are referred by DSWD like exploited and abused and with other special cases.
              </p>

            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>Mission
                  </h4>
                  @foreach($missions as $mission)

                  <p>{{$mission->mission}}</p>
                   @endforeach
                </div>
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                  <i class="bx bx-cube-alt"></i>
                  <h4>Vision </h4>
                    @foreach($visions as $vision)
                    <p>{{$vision->vision}}</p>
                     @endforeach
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->


     <!-- ======= What We Do Section ======= -->
     <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>What We Do</h2>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center mb-4">
            <h3>Hospice of St. Margaret's Photo Gallery</h3>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200" >
          @foreach ($galleries as $gallery)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <a href="{{ asset('/storage/gallery_images/'. $gallery->gallery_image) }}" data-gall="portfolioGallery" class="venobox" title="Gallery">
            <div class="portfolio-wrap">
                <img src="{{ asset('/storage/gallery_images/'. $gallery->gallery_image) }}" alt="Image" style =  "height: 350px; width: 100%;">
              </a>
              <div class="portfolio-info">
                {{-- <h4>{{ $gallery -> gallery_description }}</h4> --}}
                <p>{{ $gallery -> gallery_date }}</p>
                <div class="portfolio-links">
                  {{-- <img src="{{ asset('/storage/gallery_images/'. $gallery->gallery_image) }}" width="30px" height="30px" alt="Image"> --}}
                  {{-- <a href="{{ asset('/storage/gallery_images/'. $gallery->gallery_image) }}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-area"></i></a> --}}
                  <p><a href="{{ asset('/storage/gallery_images/'. $gallery->gallery_image) }}" data-gall="portfolioGallery" class="venobox" title="Gallery">{{ $gallery -> gallery_description }}</a></p>
                </div>
              </div>
            </div>
          </div>
          @endforeach 

        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- ======= Social Services Section ======= -->
    <section id="services" class="services section-bg ">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>We offer Programs and Social Services that provides shelter, gives nurture and develop youth. We create positive environment where people—the young ones or even adults, develop tools and are empowered to have successful, fulfilling lives.</p>
        </div>

        <div class="row">
          @foreach ($socialServices as $socialService)
          <div class="col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="icofont-holding-hands"></i>
              <h4>{{$socialService->title}}</h4>
              <p> {{$socialService->description}} </p>
            </div>
          </div>
            @endforeach
        </div>

      </div>
    </section><!-- End Services Section -->


  <!-- ======= Org Chart ======= -->
  <section id="org" class="testimonials">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Organizational Chart</h2>
        <p>Relying heavily volunteers. Here are the Staff and the Volunteers positions that make up the human resources of our Charity.</p>
      </div>
    </div>

    <div class="container-fluid">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <ol class="list-group list-group-numbered col-md-12">
            
            @foreach ($organizations as $organization)
            <div class="p-3 mb-2" style="background-color: #05192e">
            <li class="list-group-item d-flex justify-content-between align-items-center">
              <div class="mx-auto">
                <div class="fw-bold"><h3 class="text-center font-weight-bold" style="padding-bottom: 5px">{{$organization->org_position}}</h3>
                </div>
                <h4 class="text-center">{{$organization->org_name}}</h4>
              </div>
            </li>
            </div>
            @endforeach
            
          </ol>
        
        </div>
      </div>

    
  
  </section><!--  End Org Chart  -->


     <!-- ======= Calendar of Activities Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">


        <div class="section-title">
          <h2>Calendar of Activities</h2>
          <h3>Month of {{$month->formatted_date_month}}</h3>
        </div>


        <div class="row">
          <?php $count=0; ?>
          @foreach ($calendarOfActs as $calendarOfAct)

          
          <div class="col-lg-4 mb-4 d-flex justify-content-center">
            {{-- <div class="card h-100">
              {{-- <img class="card-img-top" src="..." alt="Card image cap">--}}
              {{-- <h4 class="card-header text-primary">{{$calendarOfAct->formatted_date}}</h4> 
              <div class="card-body">
                
                <p class="card-text text-dark">asdasd</p>
              </div>
              <div class="card-footer">
                <p class="card-text"><small class="text-dark">{{$calendarOfAct->act_description}}</small></p>
              </div>
            </div> --}}

            <div class="card" style="width: 18rem;">
              <h4 class="card-header text-dark text-center">{{$calendarOfAct->formatted_date}}</h4> 
              {{-- <img class="card-img-top" src="{{ asset('/storage/gallery_images/'. $calendarOfAct->act_image) }}" alt="Card image cap"> --}}
              <img class = "ml-5 mt-2" src="{{ asset("/storage/gallery_image/".$calendarOfAct->act_image) }}" width="190px" height="170px" alt="Activity Image"/>
              {{-- <img src="{{ asset('/storage/gallery_images/'. $gallery->gallery_image) }}"  width="300px" height="300px" alt="Image"> --}}
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-primary text-center">{{$calendarOfAct->act_description}}</p>
              </div>
            </div>

          </div>

          
          @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> --}}
        </div>
        @foreach ($contacts as $contact)
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="info-box">
              <i class="bx bx-donate-heart"></i>
              <h3>Donation</h3>
              <p><strong>Bank Name: </strong>{{$contact->bank_name}}</p>
              <p><strong>Bank Branch: </strong>{{$contact->bank_branch}}</p>
              <p><strong>Bank Account #: </strong>{{$contact->bank_act_num}}</p>
              <p><strong>Swift Code #: </strong>{{$contact->swift_code_num}}</p>
            </div>
          </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-4">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>{{$contact->address}}</p>
              </div>
            </div>

            <div class="col-md-4">
                <div class="info-box">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>{{$contact->email_ad}}</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-box">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>{{$contact->contact_number}}</p>
                  <p>{{$contact->contact_number}}</p>
                </div>
            </div>

          @endforeach
        </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
          @foreach ($contacts as $contact)
          <div class="col-lg-4 col-md-4 footer-contact">
            <h3>Hospice of St. Margaret of Cortona, Inc.</h3>
            <p>
              <br> {{$contact->address}} <br> <br>
              <strong>Phone:</strong> <br> {{$contact->contact_number}} <br> {{$contact->contact_number1}} <br> <br>
              <strong>Email:</strong> {{$contact->email_ad}}<br>
            </p>
          </div>
          @endforeach
          <div class="col-lg-8 col-md-4">
              <img src="assets/img/map.jpg" class="img-fluid" alt="map">
          </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Hospice of St. Margaret</span></strong>. All Rights Reserved
        </div>
      </div>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>