<?php
session_start();
require "connection.php";
// include "navbar.php";

?>

<?php
if (isset($_POST['submit'])){ 
    $user = $_POST['idReg'];
    $username = $_POST['usernameReg'];
    $firstname = $_POST['nameReg']; 
    $surname = $_POST['surnameReg']; 
    $pass = $_POST['passReg']; 
    $title = $_POST['titleReg'];
    $report = $_POST['reportReg'];
    $hashpassword = password_hash($pass,PASSWORD_BCRYPT);

    $duplicate = mysqli_query($conn,"SELECT * FROM tbusers WHERE idt = '$user' OR username = '$username'");

    if(mysqli_num_rows($duplicate) > 0)
    {
      echo "<h2>ID or Username already exists</h2>";  
    }else{
      if($user ==  "" || $username == "" || $firstname == "" || $surname == "" || $pass == "" || $title == "" || $report == "")
      {
        echo "<h1>Fill in all the values</h1>";  
      }else{ 
        $query = "INSERT INTO tbusers (username,firstname,surname,password,title,reports_to,idt) VALUES ('$username','$firstname','$surname','$hashpassword','$title','$report','$user')";
        mysqli_query($conn,$query);
        echo "Registration successful";
        header("location: login.php");
        // exit;
      }
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
            <form action ="register.php" method = 'POST'>
                <label class ='lgLabel'>user_id</label>
                <input placeholder='Enter your id...' type ='text' name = "idReg"  class='lgInput'/>

                <label class ='lgLabel'>Username</label>
                <input placeholder='Enter your Username..' type ='text' name = "usernameReg"  class='lgInput'/>

                <label class ='lgLabel'>Name</label>
                <input placeholder='Enter your firstName...' type ='text' name = "nameReg"  class='lgInput'/>

                <label  class ='lgLabel'>Surname</label>
                <input placeholder='Enter your Surname...' type ='text' name = "surnameReg"  class='lgInput'/>

                <label class ='lgLabel'>Password</label>              
                <input placeholder='Enter password...' type ='password' name = "passReg" class ='lgInput'/><br/>

                <label class ='lgLabel'>Title</label>
                <input placeholder='Enter your title...' type ='text' name = "titleReg"  class='lgInput'/> 
                
                <label class ='lgLabel'>Reports To</label>
                <input placeholder='who do you report to...' type ='text' name = "reportReg"  class='lgInput'/>                
                <input type='submit' id='sub_butt' name="submit" value="Register"/>
            </form>
          <div class ='foot'>
          <p>Already have an account? <a href ="login.php">click to Login</a></p>
          </div>
        </div>

        <div class ="right-side">
          <div class ='welcomeNote'>
            <h2 id='welid'>Welcome to Employee Tree</h2>
          </div>

            <img src='gallery/logo.png' alt='' id='wel-img-id'/>

        </div>        

      </div>       
</body>
</html>
