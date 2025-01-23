
<html>
<head>
    <title>Mentor Registration Form</title>
      <style>
        body{
          background: linear-gradient(to right, #3498db 50%, #2c3e50 50%);
        }
 .container {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  color: #333;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
  color: #666;
}

input[type="text"],
input[type="tel"],
input[type="password"],
select {
  width: 100%;
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  color: #333;
  
}

button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  width: 100%;
}

button[type="submit"]:hover {
  background-color: #45a049;
}

.error-message {
  color: red;
  font-size: 14px;
  margin-top: 5px;
}

.success-message {
  color: green;
  font-size: 14px;
  margin-top: 5px;
}
        </style>
        <script>
        
        function submitForm(event) {
            var form = document.getElementById('myForm');
            var firstname = form.elements['firstname'].value.trim(); // Trim whitespace
            var lastname = form.elements['lastname'].value.trim(); // Trim whitespace
            var mobilenum = form.elements['mobilenumber'].value;
            var email = form.elements['email'].value;
            var gender = form.elements['gender'].value;
            var pass = form.elements['password'].value;

            // Convert the first letter of firstname and lastname to uppercase
            firstname = firstname.charAt(0).toUpperCase() + firstname.slice(1).toLowerCase();
            lastname = lastname.charAt(0).toUpperCase() + lastname.slice(1).toLowerCase();

            var isConfirmed = confirm('Mentor Name: ' + firstname + ' ' + lastname +
                '\nMobile Number: ' + mobilenum + '\nEmail: ' + email +
                '\nGender: ' + gender + '\nPassword: ' + pass + '\n\nDo you want to submit the form?');

            if (!isConfirmed) {
                // Prevent the form from submitting if the user clicks "Cancel"
                event.preventDefault();
            }
        }
    
          </script>
</head>
<body>
    <div class="container">
        <h2>Mentor Registration</h2>
        <form id="myForm" method="post">
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" id="first-name" name="firstname" pattern="[A-Za-z]+" title="Please enter only alphabetic characters" required>
            </div>
            
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" id="last-name" name="lastname" pattern="[A-Za-z]+" title="Please enter only alphabetic characters" required>
            </div>
            <div class="form-group">
                <label for="mobilenumber">Mobile Number</label>
                <input type="tel" id="mobilenumber" name="mobilenumber" pattern="[789]\d{9}" title="Please enter a valid 10-digit mobile number starting with 7, 8, or 9" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Please enter a valid email address"  required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select id="gender" name="gender" required>
                    <option value="">Select</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
           
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}"
  title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or less than 16 characters" required>
            </div>
            <button type="submit" name="submit"  onclick="submitForm(event)">Register</button>
        </form>
    </div>
</body>
</html>
<?php

  include "config.php";
  if(isset($_POST['submit']))
  {
    extract($_POST);
    $firstname1 = ucfirst(strtolower($firstname)); // Convert first letter to uppercase
    $lastname1 = ucfirst(strtolower($lastname)); // Convert first letter to uppercase
   
       $add=mysqli_query($con ,"insert into mentor(firstname,lastname,mobileno,email,gender,password) values('$firstname1','$lastname1','$mobilenumber','$email','$gender','$password')")or die(mysqli_error($con));
	
	if ($add) {
		echo "<script>;";
		echo "window.alert('Data insert successfully....!');";
		echo 'window.location.href = "../index.php";';
		echo "</script>";
	} else {
		echo "<script>;";
		echo "window.alert('Data error....!');";
		echo "</script>";
	}
  }
?>
