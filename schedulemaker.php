<?php
session_start();
require "connection.php";
// include "navbar.php";
if($_SESSION['id'] == '')
{
    header("Location:login.php");
}

if (isset($_POST['submit'])){ 
    $user = $_POST['idReg'];
    $startDate = $_POST['startReg'];
    $endDate = $_POST['endReg'];
    $startTime = $_POST['startTimeReg'];
    $endTime = $_POST['endTimeReg'];
    $title = $_POST['titleReg'];
    $description = $_POST['descReg'];

      if($user ==  "" || $startTime == "" || $endTime == "" || $startDate == "" || $endDate == "" ||  $title == "" || $description == "")
      {
        echo "<h1>Fill in all the values</h1>";  
      }else{ 
        $query = "INSERT INTO tbschedule (userid,start_date,end_date,start_time,end_time,title,description) VALUES ('$user',' $startDate','$endDate','$startTime','$endTime','$title','$description')";
        mysqli_query($conn,$query);
        echo "Registration successful";
        // header("location: login.php");
        // exit;
      }
    }   

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EPI USE</title>
        <link rel="icon" type="image/x-icon" href="media/favlogo.ico">
        <link rel="stylesheet" type="text/css" href="css/registerstyle.css" />
    </head>
   
<body>
    <br/><br/><br/><br/>
    <div class ="login-contain">
        <div class="left-side">
          <div class='img-class'>
       
          </div><br/><br/><br/><br/><br/>
            <form action ="schedulemaker.php" method = 'POST'>
                <label class ='lgLabel'>user_id</label>
                <input placeholder='Enter your id...' type ='text' name = "idReg"  class='lgInput'/>

                <label class ='lgLabel'>start date</label>
                <input placeholder='Enter your Username..' type ='text' name = "startReg"  class='lgInput'/>

                <label class ='lgLabel'>end date</label>
                <input placeholder='Enter your firstName...' type ='text' name = "endReg"  class='lgInput'/>

                <label class ='lgLabel'>start time</label>
                <input placeholder='Enter your Username..' type ='text' name = "startTimeReg"  class='lgInput'/>

                <label class ='lgLabel'>end time</label>
                <input placeholder='Enter your firstName...' type ='text' name = "endTimeReg"  class='lgInput'/>

                <label  class ='lgLabel'>title</label>
                <input placeholder='Enter title...' type ='text' name = "titleReg"  class='lgInput'/>

                <label class ='lgLabel'>description</label>              
                <input placeholder='Enter description...' type ='text' name = "descReg" class ='lgInput'/><br/>
                <input type='submit' name="submit" id='sub_butt' value="Login"/>
            </form>
          <div class ='foot'>
          <p>Already have an account? <a href ="login.php">click to Login</a></p>
          </div>
        </div>

        <div class ="right-side">
          <div class ='welcomeNote'>
            <h3 id='welid'>Welcome</h3>
          </div>

            <img src='media/snowman2.png' alt='' id='wel-img-id'/>

        </div>        

      </div>       
</body>
</html>
