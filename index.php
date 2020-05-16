<?php session_start() ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style9.css">
	 <link href="style6.css" rel="stylesheet">
	<link href="style5.css" rel="stylesheet">
	<link href="mdb.min.css" rel="stylesheet">
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
	<script src="https://kit.fontawesome.com/5c480d6bd6.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <!-- navigation menu -->
	
    <nav class="navbar fixed-top navbar-expand-sm navbar-dark bg-dark">
      <a href="index.php" class="navbar-brand text-warning">&nbsp;&nbsp;
        <i class="fas fa-book-dead " ></i>  R O C</a>
        <button class="navbar-toggler " data-toggle="collapse" data-target="#menu"> 
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="menu">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="fas fa-home"></i> Dashboard</a>
          </li>	  
		  <li class="nav-item">
            <a href="postjob.php" class="nav-link">
              <i class="far fa-edit"></i> Posts a Job</a>
          </li>
          <li class="nav-item">
            <a href="myjobpost.php" class="nav-link">
             <i class="far fa-eye"></i> My Job Posts</a>  
          </li>
          <li class="nav-item">
            <a href="getjob.php" class="nav-link">
            <i class="fas fa-file-invoice-dollar"></i> Get a Job</a>
          </li>
          <li class="nav-item">
            <a href="contactus.php" class="nav-link">
              <i class="far fa-address-card"></i> Contact Us</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
           <li class="nav-item">
            <div class="dropdown">
              <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" >
                <i class="fas fa-id-badge"></i> My Info</a>
              <div class="dropdown-menu">
                <a href="myinfo.php" class="dropdown-item">Profile</a>
                <a href="postjob.html" class="dropdown-item">My Job Posts</a>
                <a href="contactus.php" class="dropdown-item">Feedback</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a href="bobbysignup2.php" class="nav-link">
              <i class="fas fa-sign-out-alt"></i> Logout</a>
          </li>
        </ul>
      </div>
	</nav>
	
  <!-- navigation menu ends here -->

<!--slider code starts-->

  

<div "class=col-xl-6">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
<ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active data-interval=10000">
      <img src="re2.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <font color="#FFBB33"><h5><i class="fas fa-book-dead " ></i> R O C</h5></font>
      </div>
    </div>
    <div class="carousel-item">
      <img src="re1.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <font color="#DC3545"><h5><i class="fas fa-book-dead " ></i> R O C</h5></font>
      </div>
    </div>
    <div class="carousel-item">
      <img src="re3.jpg" class="d-block w-100" alt="...">
	  <div class="carousel-caption d-none d-md-block">
        <font color="#17A2B8"><h5><i class="fas fa-book-dead " ></i> R O C</h5></font>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
	<!--dashboard design -->
    <section id="showcase">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="showcase-right animated fadeInLeftBig slower  delay-3s">
              <font color="#FFBB33"><h1>Rid Of Chores</h1></font>
              <p class="text-justify">This project aims at developing a web application that would save student time and help them to complete their assignments or files or project or any other handwritten work. 
				The other part of the project is, student can use their time and earn some money by helping others in their handwritten work. 
				A client can select the person by whom he wants to get his work done based on his rating and handwriting photos. 
				The person wants to do the work can place a bid at which he will do a work for a client.</p>
				
            </div>
            <br>
			<a href="file:///C:/xampp/htdocs/Website/final/getjob.html" class="btn btn-outline-warning btn-sm animated  fadeInLeftBig slower">Get Your Job Posted</a>
          </div>
		  <div class="col-md-6 col-sm-6">
            <div class="showcase-right animated fadeInRight slower  delay-3s">
              <img src="512x512.jpg">
            </div>
          </div>
        </div>
      </div>
    </section>

    

    <section id="info1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="info-left animated fadeInLeft slower delay-5s">
              <img src="image15.png">
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="info-right animated fadeInRight slower delay-5s">
              <font color="#FFBB33"><h1>Hurry Up!!</h1></font>
              <p>This web application is the first of its kind. It is another effort to make student’s life easy and a chance to earn money just by knowing how to write.</p>
              <br>
             <a href="file:///C:/xampp/htdocs/Website/final/getjob.html" class="btn btn-outline-warning btn-sm">Get a job</a>
			 
            </div>
          </div>
        </div>
      </div>
    </section>
    <hr>
    <section id="info2">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="info-left">
              <font color="#FFBB33"><h2>View Your Post</h2></font>
              <p>This project aims at developing a web application that would save student time and help them to complete their assignments or files or project or any other handwritten work. </p>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <div class="info-right">
              <h2>Info Block Two</h2>
              <p>This project aims at developing a web application that would save student time and help them to complete their assignments or files or project or any other handwritten work. 
				</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer start -->
         <footer>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
						 <a href="http://localhost/Website/index2.php#0">
						<h3><i class="fas fa-book-dead"></i> R O C</h3></a>
						<p class="text-justify">This project aims at developing a web application that would save student time and help them to complete their assignments or files or project or any other handwritten work.</p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
						<h2>Quick Links</h2>
						<ul>
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#">My Profile</a></li>
							<li><a href="postjob.html">Post a Job</a></li>
							<li><a href="">View Job Posts</a></li>
							<li><a href="getjob.html">Get a Job</a></li>
						</ul>	
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 segment-three  sm-mb-30 ">
						<h2>Follow Us</h2>
						<p>Please Follow us on our Media Profile in order to keep updated.</p>
						<ul><li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter-square"></i></a></li></ul>
				</div>
					<div class="col-md-3 col-sm-6 col-xs-12 segment-four sm-mb-30">
						<h2>Contact Us</h2>
						<ul>
							<li><i class="fas fa-map-marked-alt" aria-hidden="true"></i>  1, XYZ Streat, Indore</li>					
					<li><i class="fas fa-phone-square" aria-hidden="true"></i>  8839540772</li>
					<li><i class="fas fa-envelope-open-text" aria-hidden="true"></i>  ak.arbabkhan4@gmail.com</li>	
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item animated zoomInUp slower delay-3s " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235527.45446938823!2d75.72376397472755!3d22.72391173166939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2sIndore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1584284175148!5m2!1sen!2sin"
              frameborder="0"></iframe>
         </div>
      
        </div>
			</div>
		</div>
	</div>
	<p class="footer-bottom-text">ALL Right reserved by &copy; Rid Of Chores.2020</p>
</footer>
  <!-- footer ends here -->
 
  
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
