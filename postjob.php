<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/5c480d6bd6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
	<link href="mdb.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="post.css">
	<link href="style10.css" rel="stylesheet">
	<title>nav bar</title>
  </head>
  <body>
 
  
	 
     <!-- navigation menu -->
     <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
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
    <div class=" py-3 text-white" style="background-color: #484854">
      <h1>&nbsp;&nbsp;<i class="far fa-edit"></i> Post a Job</h1>
    </div>
     <div class="bg-light p-2">
     
    <div class="row">
       <div class="col-sm-4">
         <a href="" class="btn btn-primary d-block font-weight-bold">
          <i class="fas fa-file-invoice-dollar "></i> &nbsp;Get a Job</a>
       </div>
       <div class="col-sm-8">
         <a href="" class="btn btn-success d-block font-weight-bold">
          <i class="far fa-eye"></i> &nbsp; VIEW MY POSTS</a>
       </div>
       
    </div>
  </div>
	
	 <div class=" p-2 text-warning" style="background-color: #212121">
      <center><h1><i class="fas fa-user-plus"></i>&nbsp;&nbsp; YOUR NEXT HIRE IS HERE</h1></center>
    </div>
	
	  
  
  <div class="container-fluid cfbox">
		<div class="Overlay"></div>
		<div class="container cbox d-inline-block animated slideInLeft slower delay-1s">
		<center><h1><i class="fas fa-user-plus text-warning animated slideInLeft slower delay-1s"></i></h1>
		<h2 style="color:#FFBB33">YOUR NEXT HIRE IS HERE</h2>
		<p class= "text-justify" style="color:#FFBB33">This Project aims at developing a web application that would save student time and help them to complete their assignments or files or project or any other handwritten work</p>
		</center></div>
 
  
  <!--form-->
		<div class ="container cbox1 d-inline-block animated zoomIn slower delay-1s">
   
		  <form>
			<div class="roc-form ">	
				<h2><font color="#FFBB33"><i  class="fas fa-book-dead " ></i>&nbsp; R O C</font></h2>
					<form action="#">	
					<div class="row row-space">
					<div class="col-6">
				<p data-toggle="tooltip" title="Enter project Name!"><i class="fa fa-pencil fa-lg fa-fw" aria-hidden="true"></i>&nbsp; Name of Project:</p>
				<input type="text" name="name" id="project" placeholder="">
				</div>
				<div class="col-6">
				<p data-toggle="tooltip" title="Enter Subject Name!"><i class="fa fa-server" aria-hidden="true"></i>&nbsp; Subject</p>
				<input type="text" placeholder=""></div>
				<div class="col-6">
				<p data-toggle="tooltip" title="Enter no. of pages to be written!"><i class="fas fa-file-alt"></i>&nbsp; Approx page to be written</p>
				<input type="text" placeholder=""></div>
				<div class="col-6">
				<p data-toggle="tooltip" title="Enter no. of diagram to be drawn!"><i class="fas fa-chart-pie"></i>&nbsp; Approx diagram to be drawn</p>
				<input type="text" placeholder=""></div>
				<div class="col-6">
				<p data-toggle="tooltip" title="What material you will be providing?...if none mention it null!"><i class="fas fa-pencil-ruler"></i>&nbsp; Stationary</p>
				<input type="text" placeholder=""></div>			
				
				<div class="col-6">	
				<p data-toggle="tooltip" title="Max time in which you want your work to be finished"><i class="fas fa-business-time"></i></i>&nbsp; Deadline</p>
				<input type="text" placeholder=""></div></div>
				<div class="form-group">
				<label><p data-toggle="tooltip" title="Describe your project in few words.">Description of Project</p></label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				</div>
				<p data-toggle="tooltip" title="Enter the amount you are willing to pay to get this job done"><i class="fas fa-rupee-sign"></i>&nbsp; Max Bid</p>
				<input type="text" placeholder="">
        <center><a href="#" class="btn btn-outline-warning btn-block" onclick="myFunction()">
                 Post <i></i></a></center>
                 <script>
            function myFunction() {
              alert("Your job has been posted. Thank You for Choosing ROC");
            }
            </script>
              
            </div>
          </form>
        </div>  


    <!--form ends-->
	</div>
	<!--Container fluid ends-->
	
     <!-- footer start -->
         <footer>
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12 segment-one md-mb-30 sm-mb-30">
						 <a href="index.php">
						<h3><i class="fas fa-book-dead"></i> R O C</h3></a>
						<p class="text-justify">This project aims at developing a web application that would save student time and help them to complete their assignments or files or project or any other handwritten work.</p>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12 segment-two md-mb-30 sm-mb-30">
						<h2>Quick Links</h2>
						<ul>
							<li><a href="index.php">Dashboard</a></li>
							<li><a href="myjobpost.html">My Profile</a></li>
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
					<li><i class="fas fa-phone-square" aria-hidden="true"></i>  987654321</li>
					<li><i class="fas fa-envelope-open-text" aria-hidden="true"></i>  support@gmail.com</li>
					<div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235527.45446938823!2d75.72376397472755!3d22.72391173166939!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fcad1b410ddb%3A0x96ec4da356240f4!2sIndore%2C%20Madhya%20Pradesh!5e0!3m2!1sen!2sin!4v1584284175148!5m2!1sen!2sin"
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