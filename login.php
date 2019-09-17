<?php
				if(isset($_POST['login'])){
					include 'config.php';
					
					$email = $_POST['email'];
					$psw = $_POST['psw'];
					
					$query = "SELECT * FROM User WHERE email = '$email' AND psw = '$psw'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $rows['email'];
						$_SESSION['psw'] = $rows['psw'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful\");
									window.location = (\"index.html\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again\");
									window.location = (\"index.html\")
									</script>";
					}
				}
			?>