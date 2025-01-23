
<html>
<head>
    <title>Student Registration Form</title>
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
            var middlename = form.elements['middlename'].value.trim(); // Trim whitespace
            var rollno = form.elements['rollnumber'].value;
            var enrollno = form.elements['enrollmentnumber'].value;
            var gender = form.elements['gender'].value;
            var mobilenum = form.elements['mobilenumber'].value;
            var pass = form.elements['password'].value;
            var sta = form.elements['status'].value;

             // Convert the first letter of firstname and lastname to uppercase
             firstname = firstname.charAt(0).toUpperCase() + firstname.slice(1).toLowerCase();
            lastname = lastname.charAt(0).toUpperCase() + lastname.slice(1).toLowerCase();
            middlename = middlename.charAt(0).toUpperCase() + middlename.slice(1).toLowerCase();

            var isConfirmed = confirm('Student Name: ' + firstname + ' ' + middlename + ' ' + lastname +
                '\nRoll Number: ' + rollno + '\nEnrollment Number: ' + enrollno +
                '\nGender: ' + gender + '\nMobile Number: ' + mobilenum + '\nStatus: ' +sta+ 
                '\nPassword: ' + pass + '\n\nDo you want to submit the form?');

            if (!isConfirmed) {
                // Prevent the form from submitting if the user clicks "Cancel"
                event.preventDefault();
            }
        }
    
          </script>
</head>
<body>


    <div class="container">
        <h2>Student Registration</h2>
        <form id="myForm" method="post">
            <div class="form-group">
                <label for="firstname">First Name</label>
                <input type="text" id="first-name" name="firstname" pattern="[A-Za-z]+" title="Please enter only alphabetic characters" required>
            </div>
            <div class="form-group">
                <label for="middlename">Middle Name</label>
                <input type="text" id="middle-name" name="middlename" pattern="[A-Za-z]+" title="Please enter only alphabetic characters" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name</label>
                <input type="text" id="last-name" name="lastname" pattern="[A-Za-z]+" title="Please enter only alphabetic characters" required>
            </div>
            <div class="form-group">
                <label for="rollnumber">Roll Number</label>
                <input type="text" id="roll-number" name="rollnumber" pattern="[1-9][0-9]{0,2}"title="Please enter a valid roll number" required>
            </div>
            <div class="form-group">
                <label for="enrollmentnumber">Enrollment Number</label>
                <input type="text" id="enrollment-number" name="enrollmentnumber" pattern="[1-9]\d{9}" title="Please enter a valid enrollment number" required>
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
                <label for="mobilenumber">Mobile Number</label>
                <input type="tel" id="mobilenumber" name="mobilenumber" pattern="[789]\d{9}" title="Please enter a valid 10-digit mobile number starting with 7, 8, or 9" required>
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select id="status" name="status" required>
                    <option value="">Select</option>
                    <option value="Regular">Regular</option>
                    <option value="YD">CarryOn</option>
                </select>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}" title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or less than 16 characters" required>
            </div>
             <div class="form-group">
                <label for="year">Year</label>
                <input type="text" id="year" name="year" value="<?php echo date("Y"); ?>" required>
                
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
            $middlename1 = ucfirst(strtolower($middlename)); // Convert first letter to uppercase
            
       $add=mysqli_query($con ,"insert into student(firstname,middlename,lastname,rollno,enrollmentno,gender,mobileno,password,status,year) values('$firstname1','$middlename1','$lastname1','$rollnumber','$enrollmentnumber','$gender','$mobilenumber','$password','$status','$year')")or die(mysqli_error($con));
	
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
