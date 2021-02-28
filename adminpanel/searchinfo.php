<?php 
//db conn
include('connection.php');
$q="SELECT * FROM addinfo ";

$result=mysqli_query($conn, $q);
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Hostel Information</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Hostel Management" name="keywords">
    <meta content="Hostel Management System" name="description">


    <link href="img/logo.jpg" rel="icon">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">


    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <link href="css/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6d7f162dc4.js" crossorigin="anonymous"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        img {
            width: 100%;
        }

        Header {
            background: black;
            opacity: 0.6;
        }

        h6 {
            color: lightgreen;
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <header id="header">
        <div class="container-fluid">
            <div class="float-left ml-5"><h6><i class="fas fa-user-shield" style="font-size:30px;"></i> Admin Panel</h6></div>
            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="admin.php"><i class="fas fa-user-shield" style="font-size:20px;"></i> Admin</a></li>
                    
                    <li class="nav-item drop-link">
                        <a class="nav-link" href="">Hostels <i class="fas fa-info" style="font-size:20px;"></i>nfo</a>
                        <ul>
                            <li><a href="updateinfo.php"><i class="fas fa-edit" style="font-size:15px;"></i>Update Info</a></li>
                            <li><a href="deleteinfp.php"> <i class="far fa-trash-alt"  style="font-size:15px;"></i>  Delete Info</a></li>
                            <li><a href="addinfo.php"><i class="fas fa-plus-circle" style="font-size:15px;"></i> Add Hostel</a></li>
                            <li><a href="searchinfo.php"><i class="fas fa-search-plus" style="font-size:15px;"></i>Hostel Information</a></li>
                        </ul>
                    </li>
                    <li><a href=""><i class="fas fa-sign-out-alt" style="font-size:20px;"></i> LogOut</a></li>
                </ul>
            </nav>
        </div>
    </header><br><br><br>
    
    <br><br><br><br>
    <section class="testimonial py-5" id="testimonial">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 py-5 bg-primary text-white text-center ">
                    <div class=" ">
                        <div class="card-body">
                            <img src="http://www.ansonika.com/mavia/img/registration_bg.svg" style="width:30%">
                            <h2 class="py-3">Hostels Data</h2>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-8 py-5 border">
                        <h4 class="pb-4 display-4" style="font-weight:bold;">Hostel Data.</h4>
                        <div class="All_Users_Content">
 		                     <div class="All_Users_headingstyle"></div>
                                <div>
        	                        <table id="t01">
        		                        <thead>
                                            <tr>
        			                            <th>HOSTEL ID | </th>
        			                            <th>HOSTEL NAME | </th>
        			                            <th>No. Rooms | </th>
        			                            <th>Hostel Area | </th>
                                                <th>Details | </th>
        		                            </tr>
                                        </thead>
                                            <tbody>
                                                   <?php while($row=mysqli_fetch_array($result))
                                                         {
                                                            # code...
                                                                ?>                   
                                                           <tr>
                                                                <td><?php echo $row['hostel_id'] ?></td>
                                                                <td><?php echo $row['hostel_name'] ?></td>
                                                                <td><?php echo $row['no_rooms'] ?></td>
                                                                <td><?php echo $row['hostel_area'] ?></td>
                                                                <td><?php echo $row['details'] ?></td>
                                                                <td><a href="updateinfo.php?id=<?php echo $row['hostel_id']?>" class="User_link_style">Edit</a>&nbsp&nbsp   
                                                                <a href="delete.php?id=<?php echo $row['hostel_id']?>" class="User_link_style">Delete</a></td> 
                                                            </tr>
                                                   <?php     
                                                         }
                                                   ?>
                                             </tbody>
                </div>
            </div>
        </div>
    </section>
</body>
</html>