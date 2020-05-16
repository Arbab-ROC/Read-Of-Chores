<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>View Jobs Posted</title>
 
  <script src="https://kit.fontawesome.com/5c480d6bd6.js" crossorigin="anonymous"></script>
  
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 
	  <link href="mdb.min.css" rel="stylesheet">

  <!-- Your custom styles (optional) -->
  <link href="style6.css" rel="stylesheet">
  <link href="style5.css" rel="stylesheet">
</head>

<body>


  <!-- navigation menu -->
  <nav class="navbar  navbar-expand-sm navbar-dark bg-dark">
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
  <!-- creating heading of dashboard -->
    <div class=" py-3 text-white" style="background-color: #484854">
      <h1>&nbsp;&nbsp;<i class="far fa-eye "></i> My Job Post</h1>
    </div>
    <div class="bg-light p-3">
     
    <div class="row">
       <div class="col-sm-4">
         <a href="" class="btn btn-info d-block font-weight-bold">
          <i class="fas fa-plus"></i> &nbsp;ADD POST</a>
       </div>
       <div class="col-sm-8">
         <a href="" class="btn btn-dark d-block font-weight-bold">
          <i class="far fa-eye"></i> &nbsp; VIEW All Posted Jobs</a>
       </div>
       
    </div>
  </div>
  <!-- dashboard heading ends -->
  <!-- dashboard contet start -->
  <div class="container-fluid">
    
    <div class="row"> 
      <div class="col-8">
        <h2 style="background-color: #17A2B8;" class="text-white p-2 ">My Recent Job Posts</h2>
        <div class="container">
        <!-- creating table -->
        <table class="table mt-3 animated zoomIn slower ">
          <thead class="table-info">
            <tr>
              <th>#</th>
              <th>Title</th>
              <th>Subject</th>
              <th>MY Posted Bid</th>
              <th>Lowest Placed Bid</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Post One</td>
              <td>Operating System</td>
              <td>200 INR</td>
              <td>50 INR</td>
              <td><a href="3rdlayer.php" class="btn btn-outline-info btn-sm">
                 Details <i></i>
              </a></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Post two</td>
              <td>Computer Network</td>
              <td>300 INR</td>
              <td>100 INR</td>
              <td><a href="#" class="btn btn-outline-info btn-sm">
                 Details <i></i>
              </a></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Post three</td>
              <td>Web Development</td>
              <td>250 INR</td>
              <td>55 INR</td>
              <td><a href="#" class="btn btn-outline-info btn-sm">
                 Details <i></i>
              </a></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Post four</td>
              <td>DLCD</td>
              <td>400 INR</td>
              <td>150 INR</td>
              <td><a href="#" class="btn btn-outline-info btn-sm">
                 Details <i></i>
              </a></td>
            </tr>
            
            </tr>
          </tbody>
        </table>
      </div>
    </div>
      <div class="col-md-4 mt-4">
          <div class="card">
            <div class=" bg-info text-white p-4">
              <i class="fas fa-list-ul fa-6x"></i>
              <h2 class="float-right font-weight-bold" style="font-size: 50px; text-align: center;">04 <span class="d-block">Posts</span></h2>
            </div>
            <div class="card-footer text-primary">
              <h6 class="text-center"><a href=""> View Details
              <i class="fas fa-arrow-alt-circle-right"></i></h6></a>
            </div>
          </div>
          
          <div class="card mt-5">
            <div class=" bg-dark  text-white p-4 ">
              <i class="fas fa-hand-holding-usd fa-6x"></i>
			  
              <h2 class="float-right font-weight-bold" style="font-size: 50px; text-align: center;">10 <span class="d-block">Bids Offerd</span></h2>
            </div>
            <div class="card-footer text-warning">
              <h6 class="text-center"><a href=""> View Details
              <i class="fas fa-arrow-alt-circle-right"></i></h6></a>
            </div>
          </div>
      </div> 
    </div>
</div>	
  
  <!-- dashboard content ends -->
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
							<li><a href="index.php">Dashboard</a></li>
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
 
  <!-- JQuery -->
  
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
