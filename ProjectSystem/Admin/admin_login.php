<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Login Form</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            overflow: hidden;
            background: linear-gradient(to right, #3498db 50%, #2c3e50 50%);
        }

        .login-form {
            background-color: #f2f2f2;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .login-form h2 {
            color: #2c3e50;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: flex;
            margin-bottom: 8px;
            font-weight: bold;
            color: #2c3e50;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;    
            
        }
        .form-group input:hover {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            background-color: rgb(231, 231, 231);
            
        }


        #login{
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            
        }
        #login:hover{
            background-color: #2c3e50;
        }
        #sign:hover{
            background-color: #c6ddf5;
            border-radius: 2px;
        }
        
    </style>
</head>

<body>
    <div class="login-form">
        <h2> Admin Login</h2>
        <form id="loginForm" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="log_email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" required title="Please enter a valid email address">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="log_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            </div>

            <div class="form-group"><br>
                <input type="submit" value="Login" id="login" name="login">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <br>
               <!-- <span>Don't yet account?</span> <a href="adminform.php" style="color: #4e8fd1;" id="sign"> Sign Up</a> -->
            </div>
        </form>
    </div>

 
</body>

</html>
<?php
	include "config.php";
	if(isset($_POST['login']))
	{
		extract($_POST);

		$email=mysqli_real_escape_string($con,$_POST['log_email']);
		$password=mysqli_real_escape_string($con,$_POST['log_password']);
		$log=mysqli_query($con,"select * from admin where email='$email' and password='$password'") or die(mysqli_error($con));
		if(mysqli_num_rows($log)>0){
			
			$fetch=mysqli_fetch_array($log);
			$_SESSION['id']=$fetch['Id'];
			$_SESSION['email']=$fetch['email'];
            $year = $_GET['year'];
			echo "<script>";
			echo "alert('Login Successful.');";
            echo "window.location.href = 'newhome.php?year=$year';";
			echo "</script>";
			
		}
		else{
			echo "<script>";
			echo "alert('Login Failed.');";
            echo "window.location.href = 'admin_login.php?year=$year';";
			echo "</script>";
			
		}
	}

?>
