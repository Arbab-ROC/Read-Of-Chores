<?php
	session_start();
	if(isset($_GET['change'])){
		require "conn.php";
		$email=$_SESSION['email'];
		$name =$_SESSION['name'];
		$phone =$_SESSION['phone'];
		$city =$_SESSION['city'];
		$state =$_SESSION['state'];
		$sql1="update bidusers set name='$name' where email='$email'";
		mysqli_query($conn,$sql1);
		$sql2="update bidusers set phone='$phone' where email='$email'";
		mysqli_query($conn,$sql2);
		$sql3="update bidusers set city='$city' where email='$email'";
		mysqli_query($conn,$sql3);
		$sql4="update bidusers set state='$state' where email='$email'";
		mysqli_query($conn,$sql4);
		$_SESSION['name']=$name;
		$_SESSION['phone']=$phone;
		$_SESSION['city']=$city;
		$_SESSION['state']=$state;
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	 <script src="https://kit.fontawesome.com/5c480d6bd6.js" crossorigin="anonymous"></script>
	 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<link href="mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="styleB.css">
	<link href="style6.css" rel="stylesheet">
  <link href="style5.css" rel="stylesheet">
    <title>My Info</title>
	
  </head>
  <body style="background-color:black;">
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
	<br/>
	<div class="container p-3 bg-white text-center">
	<form method="Post" enctype="multipart/form-data">
		<label for="photo" class="justify-content-cente"><img src="<?php echo $_SESSION['mypic'] ?>" class="rounded-circle z-depth-5 mx-auto d-block" alt="tiger" height="200" width="200"></label>
		<input style="opacity: 0; position: absolute; z-index: -1;" type="file" id ="photo" name="file" ><br><br>
		<input type="submit" name ="done" type="button" class="btn btn-info text-center" style="border-radius: 40px;" value="Edit Profile"><br><br>
		<?php
			$name =$_SESSION['name'];
			require "conn.php";
			if(isset($_POST['done'])){
				$files=$_FILES['file'];
				$filename=$files['name'];
				$filetemp=$files['tmp_name'];
				$fileext=explode('.',$filename);
				$filecheck=strtolower(end($fileext));
				$fileextstored=array('png','jpg','jgep');
				if(in_array($filecheck,$fileextstored)){
					$destinationfile='upload/'.$filename;
					move_uploaded_file($filetemp,$destinationfile);
					$q="update `bidusers` set mypic='$destinationfile' where name='$name'";
					mysqli_query($conn,$q);
					$_SESSION['mypic']=$destinationfile;
					}
			}
		?>
	<form>
		<h2 class="text-center font-weight-bolder"><b></h2>
		<h6 class="text-center text-muted"><?php echo $_SESSION['institute'];?></h6>
		<h6 class="text-center text-muted"><i class="fas fa-map-marked-alt"></i> <?php echo $_SESSION['city'];?>,<?php echo $_SESSION['state'];?> &nbsp; &nbsp; &nbsp; &nbsp;<i class="fas fa-globe"></i> Website</h6>
		<br/>
		<div class="text-center">
		
		</div><br/>
		<div class=" text-center topnav p-3">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#" onclick="my()" class="active">My Info</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#news">College Info</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#contact">Username & Password</a>
		</div>
	</div>
	<br/>
	<div class="container bg-transparent" id="info">
		<div class="row">
			<div class="col-sm-6 bg-info text-center">
				<br/><br/>
				<img src="Arbab.jpg" class="rounded-circle mx-auto d-block" alt="tiger" height="200" width="200"><br/>
			</div>
			<div class="col-sm-6 bg-white text-center"><br /><h4 class="font-weight-bold">My Information</h4><br />
				<form align="center">
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="name" value="<?php echo $_SESSION['name']; ?>" style=" border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: hidden; background-color: white;"  required>
				<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="phone" value="<?php echo $_SESSION['phone']; ?>" style=" border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: hidden; background-color: white;" required>
				<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="city" value="<?php echo $_SESSION['city']; ?>" style=" border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: hidden; background-color: white;"  required>
				<br><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="state" value="<?php echo $_SESSION['state']; ?>" style=" border-top-style: hidden; border-right-style: hidden; border-left-style: hidden; border-bottom-style: hidden; background-color: white;"  required><br />
				<br>
				<button name="change" class="btn btn-outline-info btn-sm"  onclick="myFunction()">Changes Done</button>
			
        	<script>
            function myFunction() {
              alert("Your changes are saved");
            }
            </script>
				</form>
			</div>
		</div>
	</div>
<br>
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
							<li><a href="myjobpost.html">View Job Posts</a></li>
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
 
    <!-- Optional JavaScript -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>