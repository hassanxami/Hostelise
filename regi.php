<?php 
//db conn
include('conn.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
//step 2 data insertion
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$cnic=$_POST['cnic'];
$city=$_POST['city'];
$address=$_POST['address'];
$email=$_POST['email'];
$date=$_POST['date'];
$mobile=$_POST['mobile'];
$n_seat=$_POST['n_seat'];
$save_data="INSERT INTO registration(f_name,l_name,cnic,city,address,email,date,mobile,n_seat)VALUES('$f_name','$l_name','$cnic','$city','$address','$email','$date','$mobile','$n_seat')";
$data=mysqli_query($conn,$save_data);
if($data)
{
header('location:index.php');
}
else
{
echo 'error'.mysqli_error($conn);
}
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="style.css">


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


	<title>Registration</title>
	<script type="text/javascript"></script>
	<script>
function myFunction()
{
alert("Congratulations!! Registration Done Successfully!");
}
</script>
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
				<li></li>><a href="index.php">Home</a></li>
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
	<div class="container" style="padding-top: 6%;">
		<h1 class="text-success text-center">Registration Form</h1>
		<div class="form-group col-lg-8 m-auto d-block">
			<form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<div class="form-row">
					<div class="col-lg-6">
						<input type="text" name="f_name" id="First" class="form-control" placeholder="First Name" maxlength="20"  required>
					</div>
					<div class="form-group col-lg-6">
						<input type="text" name="l_name" id="Last" class="form-control" placeholder="Last Name" maxlength="20" required>
					</div>
					<div class="form-group col-lg-12">
						<input type="number" name="cnic" id="CNIC" class="form-control" placeholder="CNIC" maxlength="13" pattern="[0-9]{13}" required>
					</div>
					<div class="form-group col-lg-12">
						<input type="text" name="city" id="City" class="form-control" placeholder="City" required>
					</div>
					<div class="form-group col-lg-12">
						<input type="text" name="address" id="Address" class="form-control" placeholder="Address" required>
					</div>
					<div class="form-group col-lg-12">
						<input type="Email" name="email" id="Email" class="form-control" placeholder="Email" required>
					</div>
					<div class="form-group col-lg-6">
						<input type="Date" name="date" id="Date" class="form-control" placeholder="Date of Birth" required>
					</div>
					<div class="form-group col-lg-6">
					<input type="numbers" name="mobile" id="Mobile" class="form-control" placeholder="Mobile No" required>
					</div>
					<div class="form-group col-lg-12">
						<input type="numbers" name="n_seat" id="Seats" class="form-control" placeholder="No of Seats" required>
					</div>
					<div class="form-group col-lg-12">
						<button type="Submit" name="Submit" alt="Submit" value="Submit" class=" form-group btn btn-success col-lg-4" required>SUBMIT</button>
						<input type="button" name="Cancel" alt="Cancel" value="Cancel" class=" form-group btn btn-secondary col-lg-4" required>
					</div>
				</form>
			</div>
		</div>
		<script type="text/javascript">function validation(){
			var FirstName = document.getElementById('First') .value;
			var LastName = document.getElementById('Last') .value;
			var CNIC = document.getElementById('CNIC') .value;
			var City = document.getElementById('City') .value;
			var Address = document.getElementById('Address') .value;
			var Email = document.getElementById('Email') .value;
			var Dateofbirth = document.getElementById('Date') .value;
			var mobileno = document.getElementById('Mobile') .value;
			var Noofseats = document.getElementById('Seats') .value;
		}
		if (FirstName=="characters") {
			document.getElementById('First').innerHTML="**please enter the Upper Case and Lower Case alphabets";
			return false;
		}
		if (LastName=="characters") {
			document.getElementById('Last').innerHTML="**please enter the Upper Case and Lower Case alphabets";
			return false;
		}
		if ((CNIC<="0") || (CNIC >"13")) {
			document.getElementById('CNIC').innerHTML="**length must be between 0 and 13";
			return false;
		}
		if (City=="characters") {
			document.getElementById('City').innerHTML="**please enter the city";
			return false;
		}
		if (Address=="characters and numbers") {
			document.getElementById('Address').innerHTML="**please enter the address";
			return false;
		}
		if (Email=="alphabets, numbers and characters") {
			document.getElementById('Email').innerHTML="**please enter the valid Email";
			return false;
		}
		if (Dateofbirth=="numbers and characters") {
			document.getElementById('Date').innerHTML="**please enter the Date of Birth";
			return false;
		}
		if (mobileno=="only Numbers") {
			document.getElementById('First').innerHTML="**please enter the mobile number";
			return false;
		}
		if ((Noofseats<="1") || (Noofseats >"20")) {
			document.getElementById('Seats').innerHTML="**length must be between 1 and 20";
			return false;
		}
	</script>

</body>
</html>