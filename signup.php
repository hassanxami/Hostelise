<?php 
//db conn
include('conn.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
//step 2 data insertion
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$email=$_POST['email'];
$reemail=$_POST['reemail'];
$pass=$_POST['pass'];
$repass=$_POST['repass'];
$month=$_POST['month'];
$date=$_POST['date'];
$year=$_POST['year'];
$save_data="INSERT INTO signup(f_name,l_name,email,reemail,pass,repass,month,date,year)VALUES('$f_name','$l_name','$email','$reemail','$pass','$repass','$month','$date','$year')";
$data=mysqli_query($conn,$save_data);
if($data)
{
header('location:login.php');
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
<link rel="stylesheet" type="text/css" href="style2.css">
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


	<meta charset="utf-8">
  <title>Hostelize</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Hostel Management" name="keywords">
  <meta content="Hostel Management System" name="description">

  
  <link href="img/logo.jpg" rel="icon">

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  
  <link href="css/style.css" rel="stylesheet">


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
<body>
	<div class="container" >
		<h1 class="text-success text-center">Sign Up!</h1>
		<div class="form-group col-lg-5 m-auto d-block">
			<form method='POST' action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
				<div class="form-row">
	
				<i class="glyphicon glyphicon-globe"></i>
				    <div class="form-group col-lg-6">
						<input type="text" name="f_name" id="First" class="form-control" placeholder="First Name" required>
					</div>
					<div class="form-group col-lg-6">
						<input type="text" name="l_name" id="Last" class="form-control" placeholder="Last Name" required>
					</div>
					<div class="form-group col-lg-12">
		            <input class="form-control" type="email" name="email" placeholder="Your Email" / required>
		            </div>
		            
		            <div class="form-group col-lg-12">
		            <input class="form-control" type="password" name="pass" placeholder="Password" / required>
		            </div>
		            <div class="form-group col-lg-12">
		            <input class="form-control" type="password" name="repass" placeholder="Confirm Password" / required>
		            </div>
		            <label class="form-group col-lg-12">
		            	Birth Date</label>
		            	<br>
		            <div class="row">
		            	<div class="col-xs-4 col-md-4">
		            		<select name="month" class="form-control" / required>
		            			<option value="0">Month</option>
		            			<option value="1">Jan</option>
		            			<option value="2">Feb</option>
		            			<option value="3">Mar</option>
		            			<option value="4">Apr</option>
		            			<option value="5">May</option>
		            			<option value="6">Jun</option>
		            			<option value="7">Jul</option>
		            			<option value="8">Aug</option>
		            			<option value="9">Sep</option>
		            			<option value="10">Oct</option>
		            			<option value="11">Nov</option>
		            			<option value="12">Dec</option>
		            		</select>	
		            	</div>
		            	<div class="col-xs-4 col-md-4">
		            		<select name="date" class="form-control" / required>
		            			<option value="0">Day</option>
		            			<option value="1">1</option>
		            			<option value="2">2</option>
		            			<option value="3">3</option>
		            			<option value="4">4</option>
		            			<option value="5">5</option>
		            			<option value="6">6</option>
		            			<option value="7">7</option>
		            			<option value="8">8</option>
		            			<option value="9">9</option>
		            			<option value="10">10</option>
		            			<option value="11">11</option>
		            			<option value="12">12</option>
		            			<option value="13">13</option>
		            			<option value="14">14</option>
		            			<option value="15">15</option>
		            			<option value="16">16</option>
		            			<option value="17">17</option>
		            			<option value="18">18</option>
		            			<option value="19">19</option>
		            			<option value="20">20</option>
		            			<option value="21">21</option>
		            			<option value="22">22</option>
		            			<option value="23">23</option>
		            			<option value="24">24</option>
		            			<option value="25">25</option>
		            			<option value="26">26</option>
		            			<option value="27">27</option>
		            			<option value="28">28</option>
		            			<option value="29">29</option>
		            			<option value="30">30</option>
		            			<option value="31">31</option>
		            		</select>
		            	</div>
		            	<div class="col-xs-4 col-md-4">
		            		<select name="year" class="form-control" / required>
		            			<option value="0">Year</option>
		            			<option value="2020">2020</option>
		            			<option value="2019">2019</option>
		            			<option value="2018">2018</option>
		            			<option value="2017">2017</option>
		            			<option value="2016">2016</option>
		            			<option value="2015">2015</option>
		            			<option value="2014">2014</option>
		            			<option value="2013">2013</option>
		            			<option value="2012">2012</option>
		            			<option value="2011">2011</option>
		            			<option value="2010">2010</option>
		            			<option value="2009">2009</option>
		            			<option value="2008">2008</option>
		            			<option value="2007">2007</option>
		            			<option value="2006">2006</option>
		            			<option value="2005">2005</option>
		            			<option value="2004">2004</option>
		            			<option value="2003">2003</option>
		            			<option value="2002">2002</option>
		            			<option value="2001">2001</option>
		            			<option value="2000">2000</option>
		            			<option value="1999">1999</option>
		            			<option value="1998">1998</option>
		            			<option value="1997">1997</option>
		            			<option value="1996">1996</option>
		            			<option value="1995">1995</option>
		            			<option value="1994">1994</option>
		            			<option value="1993">1993</option>
		            			<option value="1992">1992</option>
		            			<option value="1991">1991</option>
		            			<option value="1990">1990</option>
		            		</select>
		            	</div>
		            </div>
		            <br>
		            <br>
		            <label class="form-group col-lg-12">
		            	Gender</label>
		           
		            <span class="_5k_3" data-type="radio" data-name="gender_wrapper" id="u_1_o">
					<span class="_5k_2 _5dba">
						<label class="_58mt" for="u_1_2">Female</label>
							<input type="radio" class="_8esa" name="sex" value="1" id="u_1_2">
					</span>
					<span class="_5k_2 _5dba">
						<label class="_58mt" for="u_1_3">Male</label>
							<input type="radio" class="_8esa" name="sex" value="2" id="u_1_3">
					</span>
					
					</span>
					 
		           
		     
		             <p>By clicking Sign Up, you agree to our Terms and Data Policy. You may receive SMS notifications from us</p>
		            <button class="btn btn-lg btn-success btn-block" type="submit">
		            	 Sign Up</button>
				</form>
			</div>
		</div>			
		</div>
	</div>
</body>
</html>