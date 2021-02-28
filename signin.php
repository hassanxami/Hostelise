<?php

if(isset([$_POST]))
{
    $q=mysqli_query($conn,"SELECT * `user` where (uname, username, password, access) values ('$fname', '$fusername', '$fpassword', '2')");

						if(isset($_GET["status"])){
							if(($_GET["status"])=="ERRun"){
								echo "<p class='error'>Wrong username</p>";
							}
							else if(($_GET["status"])=="ERRpw"){
								echo "<p class='error'>Wrong password</p>";
							}
							else if(($_GET["status"])=="EMP"){
								echo "<p class='error'>Fill both fields.</p>";
							}
						}
						else{
							echo "<p>Enter username and password to login</p>";
						}
				


							if(isset($_COOKIE["adminusername"])){
								echo "value='" . $_COOKIE["adminusername"] . "'";
                            }
                        }
						?>