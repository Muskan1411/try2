<?php
include "connection.php";
	//Check Connection
	if($conn->connect_error) {
		die("Connection failed:".$conn->connect_error);
	}

//////////////////////////////////////////////////////////////////
///////////////// 1.USER REGISTRATION/////////////////////////////
/////////////////////////////////////////////////////////////////
	if(isset($_POST['user-register-button'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$contact = $_POST['mobile'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		//////////////////////check whether same email exists/////////////////////
		$sql1 = $conn->prepare("Select email from user_registration where email=?");
		$sql1->bind_param("s", $email);
		$sql1->execute();
		$result1 = $sql1->get_result();

		if($result1->num_rows > 0) {
			echo "<script>
				alert('User with this email already exists.');
				window.location.href = 'index.php';
			</script>";
		} 
		else 
		{
			//////////////////////check whether same username exists/////////////////////
			$sql2 = $conn->prepare("Select username from user_registration where username=?");
			$sql2->bind_param("s", $username);
			$sql2->execute();
			$result2 = $sql2->get_result();

			if($result2->num_rows > 0) {
				echo "<script>
				alert('Username already exists. Please Change your username.');
				window.location.href = 'index.php';
			</script>";
			}
			 else 
			 {
			 	//////////////////////Register the user/////////////////////
				$sql = $conn->prepare("Insert into user_registration (firstname, lastname, email, contact, username, password) VALUES (?, ?, ?, ?, ?, ?)");

				$sql->bind_param("sssiss", $firstname, $lastname, $email, $contact, $username, $password);
				$status = $sql->execute();

				if($status) {
					echo "<script>
						alert('Registration successful!!');
						window.location.href = 'index.php';
					</script>";
				}
			}
		}
	}


//////////////////////////////////////////////////////////////////
/////////////////	2.USER LOGIN/////////////////////////////
/////////////////////////////////////////////////////////////////
	if(isset($_POST['user-login-button'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql1 = $conn->prepare("Select * from user_registration where username=? and password=?");
		$sql1->bind_param("ss", $username, $password);
		$sql1->execute();
		$result = $sql1->get_result();

		if($result->num_rows >= 1) {
			session_start();
			$_SESSION['userlogin'] = $username;
			echo "<script>
					alert('You are logged in!!');
					window.location.href = 'index.php';
				</script>";
		} else {
			echo "<script>
					alert('No such user exists!!');
					window.location.href = 'index.php';
				</script>";
		}		

	}



//////////////////////////////////////////////////////////////////
/////////////////	3.SEND ME MY PASSWORD/////////////////////////////
/////////////////////////////////////////////////////////////////
	if(isset($_POST['send-pswd-button'])) {
		$email = $_POST['email'];

		$sql1 = $conn->prepare("Select * from user_registration where email=?");
		$sql1->bind_param("s", $email);
		$sql1->execute();
		$result = $sql1->get_result();

		if($result->num_rows >= 1) {

			// generate password
			$length = 10;
			$keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			 $pieces = [];
		    $max = mb_strlen($keyspace, '8bit') - 1;
		    for ($i = 0; $i < $length; ++$i) {
		        $pieces []= $keyspace[random_int(0, $max)];
		    }
		    $password = implode('', $pieces);

		    //Update the password
		    $sql2 = $conn->prepare("Update user_registration set password=? where email=?");
		    $sql2->bind_param("ss",$password,$email);
		    $sql2->execute();

		    //send mail to user 
		    $to = $email;
		    $subject = 'ADHub: Password Changed';
		    $message = 'Your new password is : '.$password;
		     $headers = 'From: muskan99ag@gmail.com'.'\r\n'.
		    			'Reply-To: '.'\r\n'.
		    			'X-Mailer: PHP/'.phpversion();
		    $status = mail($to, $subject, $message, $headers); 
		    if($status == true) {
		    	echo "<script>
					alert('Check your mail!!');
					window.location.href = 'index.php';
				</script>";
		    } else {
		    	echo "<script>
					alert('Not send!!');
					window.location.href = 'index.php';
				</script>";
		    }
		} else {
			echo "<script>
					alert('No such user exists!!');
					window.location.href = 'index.php';
				</script>";
		}
	}
?>