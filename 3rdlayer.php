<?php

session_start();
?>


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
<br><br>
    <br/>
    <!-- Info block Started -->
	<div class="container" id="info ">
		<div class="row">
			<div class="col-sm-6 bg-dark text-center animated zoomInLeft slower delay-1s">
                <br/><br/>
                <img src="Arbab.jpg" class="rounded-circle mx-auto d-block" height="100" width="100">
				<br/>
				<h2 class="text-white text-center">Name: Arbab Khan</h2>
                <h2 class="text-white text-center">City: Indore</h2>
                <h2 class="text-white text-center">No. of current Posted Jobs: 4</h2>
            </div>
            
			<div class="col-sm-6 bg-white text-center animated zoomInRight slower delay-1s">
                <p class="text-light bg-secondary">Project Information</p>
				<br>
                <h2 class="text-dark text-center">Name Of Project: Computer Science</h2>
                <h2 class="text-dark text-center">Subject: Operating System</h2>
                <h2 class="text-dark text-center">Pages to be written: 50 pages</h2>
                <h2 class="text-dark text-center">Diagrams to be drown: 20 diagrams</h2>
                <h2 class="text-dark text-center">Deadline: 5th of july</h2>
                <h2 class="text-dark text-center">Stationary: Will Be Provided</h2>
                <h2 class="text-dark text-center">Max Bid: 200 INR</h2>
                <h2 class="text-dark text-center">Least Bid: 100 INR</h2>

				
			</div>
		</div>
	</div>
    &nbsp;
    <div class=" text-center">
        <p class="text-white animated zoomInDown slower delay-1s"><i class="fas fa-rupee-sign" ></i>&nbsp; Bid Lower than least bid: <input type="number" name="name" id="project" placeholder="">
        </p></div>
        <div class="text-center">
        <button type="button" class="btn btn-outline-secondary btn-sm animated zoomInUp slower delay-1s"  onclick="myFunction()">BID</button></div>
        <script>
            function myFunction() {
              alert("Your bid is placed!");
            }
            </script>
            <!-- Info block End -->
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
