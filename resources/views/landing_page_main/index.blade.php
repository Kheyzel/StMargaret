<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>HOSPICE OF ST. MARGARET OF CORTONA INC.</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Animate.css animation -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> -->
    <!-- AOS Scroll animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="css/aos-master"> -->
</head>
<body>
       <!-- Navigation-->
       <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.html"><img src="assets/img/navbar-logo-stmargaret.png" alt=""/></a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ml-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about-us">About us</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#what-we-do">What we do?</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#social-services">Social Services</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#announcement">Announcement</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact-us">Contact us</a></li>
                </ul>
            </div>
        </div>
    </nav>
   
    <!-- Masthead-->
    <!-- <header class="masthead"> -->
        <!-- <div class="container">
            <div class="masthead-subheading">Franciscan Sisters of the Sacred Hearts</div>
            <div class="masthead-heading text-uppercase">Hospice of St. Margaret of Cortona Inc.</div>
             <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="main.html">See More...</a> 
            
        </div> -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="assets/img/carousel/carousel1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block text-lg-right text-body">
                    <h3>“No act of kindness, no matter <br> how small, is ever wasted.”</h3>
                    <p>- Aesop</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/carousel/carousel2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block text-lg-left text-body">
                    <h3>“Go into the world and do well. <br> But more importantly, go into the world and do good.”</h3>
                    <p>– Minor Myers</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="assets/img/carousel/carousel3.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        
    <!-- </header>  -->

    <div class="main">
    <!-- About Us-->
    <section class="page-section" id="about-us">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">ABOUT US</h2> 
                <br>
                <br>
                <br>
            </div>

            

            <div class="text-center">
                <h2 class="section-heading text-uppercase">
                    @foreach ($abouts as $about)
                     {{$about->mission}}
                    @endforeach
                </h2> 
                <br>
                <br>
                <br>

                {{-- dont use <br> use bootstrap margin.. --}}
            </div>

            <div class="text-center">
                <div class="history" data-aos="fade-down" 
                data-aos-easing="linear"
                data-aos-duration="750">
                <!-- <div class="col-md-4"> -->
                    <!-- <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span> -->
                    <h1 class="my-3 text-white" >History</h1>
                    
                    <p class="text-white">Margaret was brought up at the Hungarian court, where her father, Edward (son of Edmund Ironside), was in exile. After the Battle of Hastings, Edward’s widow, Princess Agatha of Hungary, and their children fled for safety to Scotland. Margaret’s brother Edgar the Aetheling, defeated claimant to the English throne, joined them there. In spite of her leanings toward a religious life, Margaret married (c. 1070) Malcolm III Canmore, king of Scotland from 1057 or 1058 to 1093. They had eight children, six sons and two daughters, all of whom were raised in the Roman Catholic faith. She lived a pious and devout life and was known for her charity and compassion for the poor of Scotland. Through her influence over her husband and his court, she promoted, in conformity with the Gregorian reform, the interests of the church and of the English population conquered by the Scots in the previous century. She died shortly after her husband was slain near Alnwick, Northumberland. She was canonized by Pope Innocent IV in 1250.</p>
                    <br>
                    <br>
                </div>
            </div>
            <br>
            <br>
                
                <!-- <div class="col-md-4"> 
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span> -->
            <div class="text-center">
                <div class="mission" data-aos="fade-down" 
                data-aos-easing="linear"
                data-aos-duration="750">
                    <h1 class="my-3 text-white">Mission</h1>
                    <ul>
                    <li class="text-white">To provide a friendly, warm, and conductive Residential Home Care to render a quality of service, to provide a place of improvement, enhancement and enrichment of learning to the poor, indigent and disadvantaged children that serves as a valuable tool for improved and successful life.</li>
                    <li class="text-white">The charism and spirituality of the Franciscan Sisters of the Sacred Hearts and the ideals and principles of Fr. Simpliciano of the Nativity provide enlightenment to develop the talents and potentials of the children and young girls.</li>
                    <li class="text-white">For the children and young girls who are served in the institution to regain their hope and self-worth by recognizing their capacities in molding themselves to attain their fulfillment in life. </il>
                    <li class="text-white">Strengthening linkages with other and NGO's, GO's, and other stakeholders for effective and efficient delivery of the programs and services.</li>
                    </ul>
                </div>
            </div>
            <br>
            <br>
            <div class="text-center">
                <div class="vision" data-aos="fade-down" 
                data-aos-easing="linear"
                data-aos-duration="750">
                <!-- <div class="col-md-4"> -->
                    <!-- <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span> -->
                    <h1 class="my-3 text-white" >Vision</h1>
                    
                    <p class="text-white">Envisions that every child enjoys life to the fullest, freely assures the rights and protection against any form of threats and hostiles, able to enhance and develop one's potential and skill to grow a self-sufficient individual. To live a life in the love of god and helping gift to others, thus become a responsible citizen for the country and active participant in building a wholesome society.</p>
                    <br>
                    <br>
                </div>
            </div>

                
            </div>
        </div>
    </section>

    <!-- what-we-do Grid-->
    <section class="page-section bg-light" id="what-we-do"> 
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">What we do?</h2>
                <h3 class="section-subheading text-muted">Selfless and unconditional love. In here we do activities and charity works</h3>
            </div>
            <br>
            <br>

            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="what-we-do-item">
                        <a class="what-we-do-link" data-toggle="modal" href="#what-we-doModal1">
                            <div class="what-we-do-hover">
                                <div class="what-we-do-hover-content"><i class="fas fa-expand fa-2x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/st-margaret.jpg" alt="" />
                        </a>
                        <div class="what-we-do-caption">
                            <div class="what-we-do-caption-heading">Hospice of St. Margaret</div>
                            <div class="what-we-do-caption-subheading text-muted">January 2020</div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="what-we-do-item">
                        <a class="what-we-do-link" data-toggle="modal" href="#what-we-doModal2">
                            <div class="what-we-do-hover">
                                <div class="what-we-do-hover-content"><i class="fas fa-expand fa-2x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/what-we-do/02-thumbnail.jpg" alt="" />
                        </a>
                        <div class="what-we-do-caption">
                            <div class="what-we-do-caption-heading">Explore</div>
                            <div class="what-we-do-caption-subheading text-muted">Graphic Design</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="what-we-do-item">
                        <a class="what-we-do-link" data-toggle="modal" href="#what-we-doModal3">
                            <div class="what-we-do-hover">
                                <div class="what-we-do-hover-content"><i class="fas fa-expand fa-2x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/what-we-do/03-thumbnail.jpg" alt="" />
                        </a>
                        <div class="what-we-do-caption">
                            <div class="what-we-do-caption-heading">Finish</div>
                            <div class="what-we-do-caption-subheading text-muted">Identity</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <div class="what-we-do-item">
                        <a class="what-we-do-link" data-toggle="modal" href="#what-we-doModal4">
                            <div class="what-we-do-hover">
                                <div class="what-we-do-hover-content"><i class="fas fa-expand fa-2x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/what-we-do/04-thumbnail.jpg" alt="" />
                        </a>
                        <div class="what-we-do-caption">
                            <div class="what-we-do-caption-heading">Lines</div>
                            <div class="what-we-do-caption-subheading text-muted">Branding</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <div class="what-we-do-item">
                        <a class="what-we-do-link" data-toggle="modal" href="#what-we-doModal5">
                            <div class="what-we-do-hover">
                                <div class="what-we-do-hover-content"><i class="fas fa-expand fa-2x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/what-we-do/05-thumbnail.jpg" alt="" />
                        </a>
                        <div class="what-we-do-caption">
                            <div class="what-we-do-caption-heading">Southwest</div>
                            <div class="what-we-do-caption-subheading text-muted">Website Design</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="what-we-do-item">
                        <a class="what-we-do-link" data-toggle="modal" href="#what-we-doModal6">
                            <div class="what-we-do-hover">
                                <div class="what-we-do-hover-content"><i class="fas fa-expand fa-2x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/what-we-do/06-thumbnail.jpg" alt="" />
                        </a>
                        <div class="what-we-do-caption">
                            <div class="what-we-do-caption-heading">Window</div>
                            <div class="what-we-do-caption-subheading text-muted">Photography</div>
                        </div>
                    </div>
                </div> --> 
            </div>
        </div>
    </section>
    <!-- social-services-->
    <section class="page-section" id="social-services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Social Services</h2>
                <h3 class="section-subheading text-muted">In our foundation, we love serving people.</h3>
                <br>
                <br>
            </div>
            <ul class="timeline" >
                <li data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <div class="timeline-image" ><img class="rounded-circle img-fluid" src="assets/img/temporary200x200/shelter-for-children.png" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <!-- <h4>2009-2011</h4> -->
                            <h4 class="subheading">Shelter for Children</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
                <li class="timeline-inverted" data-aos="fade-left"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/temporary200x200/medical-mission.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <!-- <h4>March 2011</h4> -->
                            <h4 class="subheading">Medical Mission</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
                <li data-aos="fade-right"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/temporary200x200/feeding-program.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <!-- <h4>December 2012</h4> -->
                            <h4 class="subheading">Feeding Programs</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">We provide meals to kids who has very little or no access to nutritious food due to their condition. We organize feeding programs in poor communities in Calauan, Laguna area.</p></div>
                    </div>
                </li>
                <li class="timeline-inverted" data-aos="fade-left"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/social-services/4.jpg" alt="" /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <!-- <h4>July 2014</h4> -->
                            <h4 class="subheading">Phase Two Expansion</h4>
                        </div>
                        <div class="timeline-body"><p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p></div>
                    </div>
                </li>
                <li class="timeline-inverted"data-aos="fade-up"
                data-aos-offset="300"
                data-aos-easing="ease-in-sine">
                    <div class="timeline-image" >
                        <h4>
                            Be A Part
                            <br />
                            Of Our
                            <br />
                            Foundation!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Announcement-->
    <section class="page-section bg-light bg-gradient" id="announcement">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Announcement</h2>
                <br>
                <h2 class="section-subheading text-muted">Activities for this Month!</h2>
                <br>
                <br>
                <br>
            </div>
            <!--Card Announcements-->
            <div class="row">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header text-center text-uppercase">December 25, 2020</div>
                    <div class="card-body">
                      <h5 class="card-title text-center">Christmas Day!</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    </div>


            </div>
            <br>
            <!-- <div class="row">
                <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
            </div> -->
        </div>
    </section>
    <!-- contact-us-->
    <section class="page-section" id="contact-us">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Contact Us</h2>
                <!-- <h2 class="section-subheading text-muted">NHA Southville 7, Site 2, Brgy. Dayap, Calauan, Laguna</h2> -->
                <h3 class="section-subheading text-muted">NHA Southville 7, Site 2, Brgy. Dayap, Calauan, Laguna</h3>
                <h3 class="section-subheading text-muted">E-mail Address: margarette7317@gmail.com</h3>
                <h3 class="section-subheading text-muted">Contact Details: +639669681402 / +639218362697</h3>
            </div>
            <!-- <form id="contact-usForm" name="sentMessage" novalidate="novalidate">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div id="success"></div>
                    <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Send Message</button>
                </div>
            </form> -->
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Copyright © St. Margaret 2020</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-right">
                    <a class="mr-3" href="#!">Privacy Policy</a>
                    <a href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- what-we-do Modals-->
    <!-- Modal 1-->
    <div class="what-we-do-modal modal fade" id="what-we-doModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Hospice of St. Margaret</h2>
                                <br>
                                <br>
                                <!-- <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p> -->
                                <img class="img-fluid d-block mx-auto" src="assets/img/st-margaret.jpg" alt="" />
                                <img src="assets/img/modal-a.jpg" class="img-fluid" alt="Responsive image">
                                <img src="assets/img/modal-b.jpg" class="img-fluid" alt="Responsive image">
                                <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p> -->
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Threads</li>
                                    <li>Category: Illustration</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 2-->
    <div class="what-we-do-modal modal fade" id="what-we-doModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/what-we-do/02-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Explore</li>
                                    <li>Category: Graphic Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 3-->
    <div class="what-we-do-modal modal fade" id="what-we-doModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/what-we-do/03-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Finish</li>
                                    <li>Category: Identity</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 4-->
    <div class="what-we-do-modal modal fade" id="what-we-doModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/what-we-do/04-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Lines</li>
                                    <li>Category: Branding</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 5-->
    <div class="what-we-do-modal modal fade" id="what-we-doModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/what-we-do/05-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Southwest</li>
                                    <li>Category: Website Design</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal 6-->
    <div class="what-we-do-modal modal fade" id="what-we-doModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project Details Go Here-->
                                <h2 class="text-uppercase">Project Name</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                <img class="img-fluid d-block mx-auto" src="assets/img/what-we-do/06-full.jpg" alt="" />
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2020</li>
                                    <li>Client: Window</li>
                                    <li>Category: Photography</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Close Project
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



      <!-- Bootstrap core JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Third party plugin JS-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
      <!-- contact-us form JS-->
      <script src="assets/mail/jqBootstrapValidation.js"></script>
      <script src="assets/mail/contact-us_me.js"></script>
      <!-- AOS Scroll Animation Javascript  -->
      <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
      <!-- Core theme JS-->
      <script src="js/scripts.js"></script>
        <!-- AOS Scroll animation JS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
         <script>
         AOS.init();
         </script>
      
</body>
</html>