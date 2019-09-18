<?php

						if(isset($_POST['create'])){
							include 'config.php';
							$name = $_POST['name'];
							$email = $_POST['email'];
							$psw = $_POST['psw'];
							$psw1 = $_POST['psw1'];
							
							$qry = "INSERT INTO user (name,email,psw,psw1)
							VALUES('$name','$email', '$psw','$psw1')";
							
						if ($conn->query($qry) === TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Registration Successful.\");
											window.location = (\"welcome.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registration Failed. Try Again\");
											window.location = (\"signup.html\")
											</script>";
							}
						}
						
					  ?>

