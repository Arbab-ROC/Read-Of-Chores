<?php
	require "conn.php";
	$name = $username = $password = $city = $state = $institute = $err = "";
	$phone = 0;
	if(isset($_POST['signup'])){
		$name =$_POST['name'];
		$phone = trim($_POST['phone']);
		$Email = trim($_POST['Email']);
		$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
		$city = trim($_POST['city']);
		$state = $_POST['state'];
		$institute = $_POST['college'];
		if(strlen($Email) > 0)
		{
			$sql1 = "SELECT email FROM bidusers WHERE email = '$Email'";
			$result=mysqli_query($conn,$sql1);
			$row=mysqli_num_rows($result);
			if($row==0)
			{
				$sql2="insert into bidusers (name,phone,email,password,city,state,institute) 
				values('$name',$phone,'$Email','$password','$city','$state','$institute')";
				mysqli_query($conn,$sql2);
			}
			else
			{
				echo "ye nahi ho paega";
			}
		}
	}
	
	if(isset($_POST['login'])){
		session_start();
		$EmailL = $passwordL = "";
		$err = "";
		$EmailL = trim($_POST['EmailL']);
		$passwordL = trim($_POST['passwordL']);
		$sql3 = "SELECT * FROM bidusers WHERE email = '$EmailL'";
		$result1=mysqli_query($conn,$sql3);
		$row1=mysqli_num_rows($result1);
		$row2=mysqli_fetch_row($result1);
		if($row1==1)
		{
			if(password_verify($passwordL,$row2[3])){
				$_SESSION['name']=$row2[0];
				$_SESSION['phone']=$row2[1];
				$_SESSION['email']=$row2[2];
				$_SESSION['city']=$row2[4];
				$_SESSION['state']=$row2[5];
				$_SESSION['institute']=$row2[6];
				$_SESSION['mypic']='Arbab.jpg';
				header('location:index.php');
			}
			else{
				echo $row2[3];
			}
		}
		else{
			echo "immpossible";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SignUp and Login</title>
	 <script src="https://kit.fontawesome.com/5c480d6bd6.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
<div class="container " id="container">
<div class="form-container sign-up-container su ">

<form action="" method="Post" >
	<font color="#FFFFFF"><h1>Create Account</h1></font>
	<input type="text" name="name" placeholder="Name" required>
	<input type="text" name="phone" placeholder="phone no." id="phno" required>
	<input type="email" name="Email" placeholder="Email" required>
	<input type="password" name="password" placeholder="Password" id="pass" required>
	<input type="text" name="college" placeholder="College/University" required>
	<input type="text" name="state" placeholder="State" required>
	<input type="text" name="city" placeholder="City" required>
	<button name="signup"> SIGN UP</button>
	
</form>
</div>
<div class="form-container sign-in-container si">
	<form action="" method="Post" >
		<font color="#FFFFFF"><h1>Sign In</h1></font>
		
	<input type="text" name="EmailL" placeholder="Email" required>
		<input type="password" name="passwordL" placeholder="Password" required>
	<font color="#000000"><a href="#">Forgot Your Password</a></font>

	<button name="login">SIGN IN</button>
	</form>
</div>
<div class="overlay-container">
	<div class="overlay">
		<div class="overlay-panel overlay-left"><font color="#FFBB33">
			<h1><i class="fas fa-book-dead " ></i> R O C</h1>
			<p>This project aims at developing a web application that would save student time and help them to complete their assignments or files or project or any other handwritten work.</p>
			</font>
			<button class="ghost" id="signIn">Sign In</button>
		</div>
		<div class="overlay-panel overlay-right">
			<font color="#FFBB33">
			<h1><i class="fas fa-book-dead " ></i> R O C</h1>
			<p>This project aims at developing a web application that would save student time and help them to complete their assignments or files or project or any other handwritten work.</p></font>
			<button class="ghost" id="signUp">Sign Up</button>
		</div>
	</div>
</div>
</div>

<p style="color:red">
<?php
	echo $err;
?>
</p>
<script type="text/javascript">
	const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const container = document.getElementById('container');

	signUpButton.addEventListener('click', () => {
		container.classList.add("right-panel-active");
	});
	signInButton.addEventListener('click', () => {
		container.classList.remove("right-panel-active");
	});
</script>


</body>
</html>