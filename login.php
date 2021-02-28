<?PHP
// Step1: DB Connection
include('conn.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
//FROM Data
$u_name = $_POST['u_name'];
$u_pass = $_POST['u_pass'];
//Step2: User Query form DB

$db_user= "SELECT * FROM signup WHERE f_name='$u_name' AND pass='$u_pass'";
$check = mysqli_query($conn,$db_user);
while($result = mysqli_fetch_assoc($check)){
	
if($result['f_name']==$u_name && $result['pass']==$u_pass){
	
	
	
	header('location:index.php');
}
else
{
	echo mysqli_error($conn);
}

}
 } 
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="style">
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


<meta charset="utf-8">
  <title>Hostelize</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Hostel Management" name="keywords">
  <meta content="Hostel Management System" name="description">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  
  <link href="css/style.css" rel="stylesheet">





	<title>Sign In</title>
	<script type="text/javascript"></script>
	<style type="text/css">
		body{
			background-image: url(img/bg.jpg); 
			background-size: 100%;
		    }
		    form{
			       background: transparent;
		        }
	</style>
</head>
  <header id="header">
    <div class="container-fluid">

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li class="nav-item drop-link">
            <a class="nav-link" href="Allocation.html">Hostels</a>
            <ul>
              <li><a href="modeltown.html">Model Town</a></li>
              <li><a href="JoharTown.html">Johar Town</a></li>
              <li><a href="GreenTown.html">GreenTown</a></li>
              <li><a href="Township.html">Township</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="signin.php">Sign In</a></li>
        </ul>
      </nav>
    </div>
  </header>
<body>
	<div class="container col-lg-6" style="padding-top: 10%;">
		<h1 class="text-success text-center">Sign In</h1>
		<div class="form-group col-lg-5 m-auto d-block">
			<form class="widget-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<div class="form-row">
				<div class="form-group col-lg-12">
					<input type="text" name="u_name" id="username" class="form-control" placeholder="Username" >
				</div>
				<div class="form-group col-lg-12">
					<input type="password" name="u_pass" id="password" class="form-control" placeholder="Password">
				</div>
				<div class="form-group col-lg-12">
				<a href="signup.php" type="button" class="btn form-group btn-primary" alt="Sign Up" name="Sign Up" >Sign Up</a>
				<input type="Submit" name="Submit" alt="Submit" value="Submit" class="form-group btn btn-success">
				</div>
			</form>
		</div>
	</div>
	

</body></html>