<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <title>Project Management System</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #2c3e50;
        display: flex;
        align-items: center;
        height: 100vh;
        overflow: hidden;

    }

    #container {
        display: flex;
        position: relative;
        width: 100%;
        height: 100%;
        overflow: hidden;
    }

    #left-space {
        flex: 1;


        background-color: #3498db;
        color: #ffffff;
        text-align: center;
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        /* justify-content: center; */
        position: relative;
        z-index: 2;
        /* Ensure it is above the line */
    }

    #left-space h1 {
        font-family: "Sofia", sans-serif;

        font-size: 45px;
        margin-bottom: 20px;
        opacity: 0;
        /* Initially set opacity to 0 */
        animation: fadeIn 1.5s ease-in-out forwards;
        /* Animation for fading in */
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    #curve-line {
        position: absolute;
        top: 0;
        left: 50%;
        width: 2px;
        height: 100%;
        background-color: #fff;
        transform: translateX(-50%);
        z-index: 1;
    }

    #right-space {
        flex: 1;

        justify-content: space-around;
        align-items: center;
        overflow: hidden;
    }

    .entry-point {
        background-color: #fff;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        text-align: center;
        cursor: pointer;
        transition: transform 2s ease;
    }

    .entry-point:hover {
        transform: scale(1.20);
    }

    .entry-point img {
        max-width: 100px;
        margin-bottom: 20px;
    }
    </style>
</head>

<body>
    <div id="container">
        <div id="left-space"><br><br>
            <div style="width: auto;">
                <img src="images/collegelogo.png" height="130px" width="130px" style="border-radius:2px;">
            </div>
            <h3 style="color: rgb(168, 249, 255);">Shri Shivaji Vidya Prasarak Sanstha's<br>
                Bapusaheb Shivajirao Deore Polytechnic, Dhule (0059)<br>

                <i style="color: rgb(227 255 162);font-size:25px">Department of Computer Engineering</i>
            </h3><br><br>

            <h1>Project Work Monitoring System</h1>


        </div>
        <div id="curve-line"></div>
        <div id="right-space"><br><br><br>

            <form style="display:inline;">
                <b><label
                        style="color: rgb(255, 255, 255);font-size:23px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year:&nbsp;&nbsp;</label></b>
                <select id="batch" name="batch" required style="font-size:23px;border-radius:2px">
                    <!-- Show only the current year -->

                    <?php
                        $year=date("Y");
                        $month=date("n");
                        if($month<5)
                         {
                            $year=$year-1;
                         }
                        for($y=$year-5;$y<=$year+2;$y++)
                        {
                            $z=$y."-".$y+1;
                            ?>

                    <option value="<?php echo $y; ?>" selected> <?php echo $z; ?></option>
                    <?php
                        }
                    ?>
                    <option value="<?php echo $year; ?>" selected> <?php $z=$year."-".$year+1; 
                                                      echo $z; ?></option>
                </select>
            </form>

            <br><br>
            <h2 style="color: rgb(255, 255, 255);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select your role:</h2>
            <div style="display: flex;      
            justify-content: space-around;
            align-items: center;
            overflow: hidden;">
                <div class="entry-point" onclick="redirectTo('student')">
                    <i class="fas fa-user-graduate" style="font-size:60px;color:rgb(224, 121, 52)"></i>
                    <!-- <img src="student-icon.png" alt="Student"> -->
                    <h2>Student</h2>
                </div>
                <div class="entry-point" onclick="redirectTo('teacher')">
                    <i class="fas fa-chalkboard-teacher" style="font-size:60px;color:rgb(224, 121, 52)"></i>
                    <!-- <img src="teacher-icon.png" alt="Teacher"> -->
                    <h2>Mentor</h2>
                </div>
                <div class="entry-point" onclick="redirectTo('admin')">
                    <i class="fas fa-layer-group" style="font-size:60px;color:rgb(224, 121, 52)"></i>
                    <!-- <img src="admin-icon.png" alt="Admin"> -->
                    <h2>Admin</h2>
                </div>
            </div>
        </div>
    </div>

    <script>
    function redirectTo(role) {
        var batch = document.getElementById('batch').value;
        // Redirect to the respective page based on the selected role
        switch (role) {
            case 'student':
                window.location.href = 'Student/student_login.php?year=' + batch;
                break;
            case 'teacher':
                window.location.href = 'Mentor/mentor_login.php?year=' + batch;
                break;
            case 'admin':
                window.location.href = 'Admin/admin_login.php?year=' + batch;
                break;
            default:
                break;
        }
    }
    </script>
</body>

</html>