<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mentor Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url('frontend/img/favicon.png')}}"  rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('frontend/vendor/animate.css/animate.min.css')}}"  rel="stylesheet">
  <link href="{{ url('frontend/vendor/aos/aos.css')}}"  rel="stylesheet">
  <link href="{{ url('frontend/vendor/bootstrap/css/bootstrap.min.css')}}"  rel="stylesheet">
  <link href="{{ url('frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}"  rel="stylesheet">
  <link href="{{ url('frontend/vendor/boxicons/css/boxicons.min.css')}}"  rel="stylesheet">
  <link href="{{ url('frontend/vendor/remixicon/remixicon.css')}}"  rel="stylesheet">
  <link href="{{ url('frontend/vendor/swiper/swiper-bundle.min.css')}}"  rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('frontend/css/style.css')}}"  rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.8.1
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <img src="{{ url('frontend/img/logo1.png')}}" class="logo me-auto" alt="">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
     
          <li><a class="active" href="index.html">Acceuil</a></li>
          <li><a href="{{ url('frontend/views/courses.blade.php')}}">Formations</a></li>
          <li><a href="{{ url('frontend/views/events.blade.php')}}">Actualité</a></li>
          <li><a href="{{ url('frontend/views/about.blade.php')}}">A propos</a></li>

          <li><a href="contact.html">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="courses.html" class="get-started-btn">se connecter</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>ESPRIT<br>CARRER CENTER</h1>
      <h2>Votre pont vers l'employabilité !
</h2>
      <a href="courses.html" class="btn-get-started">En savoir plus</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="{{ url('frontend/img/salle-digital-1024x683.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Esprit carrer center vise l'amélioration de l'employabilité des étudiants et des futurs diplômés</h3>
            </br>
    
            <ul>
              <li><i class="bi bi-check-circle"></i> La Mission d'Esprit carrer center est de préparer et d'accompagner ses usagers,
étudiants et diplômés, en vue de faciliter leur insertion sur le marché du travail.</li>
          <li><i class="bi bi-check-circle"></i> Il tend également à jouer le rôle du partenaire privilégié pour toute
entreprise désirant recruter un profil professionnel particulier ayant obtenu un
diplôme universitaire mais n’ayant pas encore cumulé une expérience
confirmée.</li>
              <li><i class="bi bi-check-circle"></i> Le centre œuvre également à faciliter la certification des compétences afin
de renforcer les chances de recrutement des nouveaux diplômés.
</li>
<li><i class="bi bi-check-circle"></i> Il met ses services à la disposition des entreprises afin de renforcer et
valoriser les qualifications professionnelles de leurs employés.
</li>
            </ul>
           

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>étudients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Workshop</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Evenements</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Partenaires</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch">
            <div class="content">
              <h3>Les services du ESPRIT CARRER CENTER</h3>
              <p>
              Les Services d'un centre de carriére ESPRIT comportent des actions d’accueil, d’information,
d’orientation universitaire et professionnelle et d’accompagnement vers
l’emploi à travers la formation et la certification.
              </p>
              <div class="text-center">
                <a href="about.html" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Accueil et Information</h4>
                    <p>Organisation des  salon de l’emploi, visites sur site, rencontres avec les entreprises Partenariat avec les associations </p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-cube-alt"></i>
                    <h4>Orientation Professionnelle </h4>
                    <p>Conseil dans le choix du parcours académique et professionnel avec un bilan de compétences et un coaching individuel.</p>
                  </div>
                </div>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-images"></i>
                    <h4>Accompagnement et Formation </h4>
                    <p>Accompagnement dans la préparation du dossier de candidature pour un stage ou un emploi Offres de stages et d’emploi.A l'aide des ateliers de formation en soft skills,Techniques de recherche d’emploi...
</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    

    <!-- ======= Popular Courses Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>LES ÉVÉNEMENTS D'ESPRIT CARRER CENTER</p>
          <h2> </h2>
        </div>

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="{{ url('frontend/img/SALLON.jpg')}}"class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
             
                <h3><a href="course-details.html">SALON D'EMPLOI SEPTEMBRE 2021</a></h3>
                </div>

                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <p>Rencontre des étudiants et des diplômés avec les entreprises au sein de l'ESPRIT  pour offrir de stages d'été,stages pfe ou d'emploi.</p>
                  </div>
                 
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="course-item">
              <img src="{{ url('frontend/img/Soliya-16.jpg')}}"  class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
                

                <h3><a href="course-details.html">Journeé carriére et recrutement</a></h3>
                </div>
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                  <p>Cet événement offre aux employeurs l’occasion de découvrir les meilleures compétences en adéquation avec leurs besoins.</p>

                  </div>
                  
                </div>
              </div>
            </div>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="course-item">
              <img src="{{ url('frontend/img/ff.png')}}"  class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  
                

                <h3><a href="course-details.html">Visite d'entreprise</a></h3>
                </div>
                
                <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                <p>Immersion professionnelle aux étudiants pour découvrir l'entreprise et son fonctionnement sur site.</p>
</div>
                  
                  </div>
                </div>
              </div>
            </div> <!-- End Course Item-->

       

    
    </section><!-- End Popular Courses Section -->

    <!-- ======= Trainers Section ======= -->
    <section id="popular-courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          
          <p>Les partenaires d'ESPRIT CARRER CENTER</p>
          <h2></h2>
        </div>
</div>
</section>

    <section id="features" class="features"  >
      <div class="container" data-aos="fade-up" >

        
            <img src="{{ url('frontend/img/part.jpg')}}"  style=" display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;" >

          
   
          

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
       
          <div class="col-lg-3 col-md-6 footer-contact">
          <img src="{{ url('frontend/img/logo2.png')}}" class="logo me-auto">
            <br>
            <p>
            1,2 rue André Ampère<br>
            2083,Pôle Technologique <br>
            El Ghazala.A <br><br>
              <strong>Téléphone:</strong> T (216) 70 250 000<br>
              <strong>Email:</strong> contact@esprit.tn<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>LIENS UTILES</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Acceuil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">A propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Evénement</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Partenaires</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            
          </div>

         

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>S'INSCRIRE À LA NEWSLETTER</h4>
            <p>Tapper votre email ici</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="S'abonner">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
        
          &copy; Copyright 2022  | <strong><span>ESPRIT CARRER CENTER</span></strong>. Tous droits réservés
        </div>
        <div class="credits">
         
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('frontend/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ url('frontend/vendor/aos/aos.js')}}"></script>
  <script src="{{ url('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ url('frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ url('frontend/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('frontend/js/main.js')}}"></script>

</body>

</html>