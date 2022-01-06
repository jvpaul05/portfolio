<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Portfolio - Jayvee Paul A. Saludarios</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <!-- <link href="img/favicon.ico" rel="icon"> -->

        <!-- Google Font -->
        <link href="{{ asset('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap') }}" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('template/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <!-- <a href="index.html" class="navbar-brand">DevFolio</a> -->
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#experience" class="nav-item nav-link">Experience</a>
                        <a href="#portfolio" class="nav-item nav-link">Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero" id="home">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-content">
                            <div class="hero-text">
                                <p>I'm</p>
                                <h1>Jayvee Paul A. Saludario</h1>
                                <h2></h2>
                                <div class="typed-text">Software Developer, Web Developer, Power Builder Developer</div>
                            </div>
                            <div class="hero-btn">
                                <a class="btn" href="/downloadCV">Download my CV</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="{{ asset('template/img/image1.png') }}" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="about wow" data-wow-delay="0.1s" id="about">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{ asset('template/img/image4.png') }}" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header text-left">
                                <p>Learn About Me</p>
                                <h2>4 Years Experience</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Software Programmer, highly familiar with a wide variety of programming languages. Possess a Bachelor of Science in Computer Science.
                                </p>
                            </div>
                            <div class="skills">
                                <div class="skill-name">
                                    <p>Software Development</p><p>80%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Web Development</p><p>95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Front End Development & Back End Development</p><p>95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p>Power Builder Development</p><p>80%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <!-- <a class="btn" href="">Learn More</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Service Start -->
        <div class="service" id="service">
            <div class="container">
                <div class="section-header text-center wow" data-wow-delay="0.1s">
                    <p id="service_p">What I do</p>
                    <h2>Awesome Quality Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow " data-wow-delay="0.0s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="service-text">
                                <h3>Software Development</h3>
                                <p>
                                    2 years Software Development using Powerscript language in Quorus Concepts and Designs and maintain our main product called ERP.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow " data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-laptop-code"></i>
                            </div>
                            <div class="service-text">
                                <h3>Web Development</h3>
                                <p>
                                    Almost 3 years professional experience in web development using the laravel framework. 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow " data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-globe"></i>
                            </div>
                            <div class="service-text">
                                <h3>Front End Development & Back End Development</h3>
                                <p>
                                    Full stack web development both client side and server side experience.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow " data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-windows"></i>
                            </div>
                            <div class="service-text">
                                <h3>Power Builder Development</h3>
                                <p>
                                    Uses Power Builder to maintain and build new features to our main product ERP. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
         <!-- Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow " data-wow-delay="0.1s">
                    <p>My Resume</p>
                    <h2>Working Experience</h2>
                </header>
                <div class="timeline">
                    <div class="timeline-item left wow " data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2017 - 2019</div>
                            <h2>Software Developer</h2>
                            <h4>Quorus Concepts and Designs, West Avenue Quezon City</h4>
                            <p>
                                <br>
                                <!-- Software Developer (2 years and 6 months)<br><br> -->
                                • Develops and modifies programs in an authorized language to Core Applications.<br>
                                • Prepares and submit test data for review and validation of a Senior Software Programmer.<br>
                                • Provides day to day Off-site/On-site support of different system to client.<br>
                                • Generates different reports through backend requested by client.<br>
                                • Develops new programs from the scratch provided with detailed design documentation.<br>
                                • Participates in development and implementation process of the system to client.<br>
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item right wow " data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">2021 - 2021</div>
                            <h2>Science Research Specialist (Computer Programmer) </h2>
                            <h4>Department of Science and Technology (Forest Product Research and Development), UP Los banos Laguna</h4>
                            <p>
                                <br>
                                • Developed a dynamic website run as a database information system that contains the different kind of woods.<br>
                                • Perform Front-end and Back-end development to the system.<br>
                                • Encoded all the data needed for the system.<br>
                                • Offsite and Onsite support.<br>
                                • Perform a computer software and hardware support.<br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Experience End -->

        <!-- Portfolio Start -->
        <div class="portfolio" id="portfolio">
            <div class="container">
                <div class="section-header text-center wow " data-wow-delay="0.1s">
                    <p id="portfolio_p">My Portfolio</p>
                    <h2>My Excellent Portfolio</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="portfolio-filter">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-1">Web Development</li>
                            <li data-filter=".filter-2">Power Builder Development</li>
                            <li data-filter=".filter-3">Visual Basic</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow " data-wow-delay="0.0s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="{{ asset('template/img/image5.png') }}" style=" height:260px;" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Blogging Page</h3>
                                <a class="btn" href="{{ asset('template/img/image5.png') }}" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow " data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="{{ asset('template/img/image6.png') }}" style=" height:260px;" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Admin Module</h3>
                                <a class="btn" href="{{ asset('template/img/image6.png') }}" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow " data-wow-delay="0.4s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="{{ asset('template/img/image7.png') }}" style=" height:260px;" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Database Information</h3>
                                <a class="btn" href="{{ asset('template/img/image7.png') }}" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow " data-wow-delay="0.6s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="{{ asset('template/img/image8.png') }}" style=" height:260px;" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Ordering Sytem VB6</h3>
                                <a class="btn" href="{{ asset('template/img/image8.png') }}" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow " data-wow-delay="0.8s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="{{ asset('template/img/image9.png') }}" style=" height:260px;" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>ERP</h3>
                                <a class="btn" href="{{ asset('template/img/image9.png') }}" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Portfolio End -->

        <!-- Footer Start -->
        <div class="footer wow " data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <h2>Jayvee Paul A. Saludario</h2>
                        <h3>2428 F. Legarda St. Sampaloc Manila</h3>
                        <div class="footer-menu">
                            <p>+639 531 226996</p>
                            <p>jayveepaul.05@gmail.com</p>
                        </div>
                        <div class="footer-social">
                            <!-- <a href=""><i class="fab fa-twitter"></i></a> -->
                            <a href="https://www.facebook.com/jv.paul.05/"><i class="fab fa-facebook-f"></i></a>
                            <!-- <a href=""><i class="fab fa-youtube"></i></a> -->
                            <!-- <a href=""><i class="fab fa-instagram"></i></a> -->
                            <a href="https://www.linkedin.com/in/jayvee-paul-saludario-6a8711204/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <p>&copy; <a href="#">Portfolio - Jayvee Paul A. Saludario</a>, All Right Reserved | Designed By <a href="https://www.facebook.com/jnveeitsolutions/?ref=pages_you_manage">J&V IT Solutions</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to top button -->
        <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        
        <!-- JavaScript Libraries -->
        <script src="{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('template/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('template/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('template/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('template/lib/typed/typed.min.js') }}"></script>
        <script src="{{ asset('template/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('template/lib/isotope/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('template/lib/lightbox/js/lightbox.min.js') }}"></script>
        
        <!-- Contact Javascript File -->
        <!-- <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script> -->

        <!-- Template Javascript -->
        <script src="{{ asset('template/js/main.js') }}"></script>
    </body>
</html>
