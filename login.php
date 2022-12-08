<?php
session_start();
require "connection.php";
// include "navbar.php";

if(isset($_POST["logsubmit"]))
{
  $username = $_POST["userLog"];
  $pass = $_POST["passLog"];
 
$sql = "SELECT * FROM tbusers WHERE username = '$username'";
 
$result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) === 1)
  {
    $row = mysqli_fetch_assoc($result);
    if(password_verify($pass,$row['password'])) //---------checking the password againts the hashed one in the database
    {
        echo "Logged In";
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['idt']; //creating a session using a users id to be able to navigate properly
        //added these net for control
        $_SESSION['name'] = $row['name'];
        $_SESSION['surname'] = $row['surname'];
        header("Location: hierarchy.php");
        exit();
    }


    

  } 
  else if($username== 'admin@gmail.com' && $pass == '1234')   
  {
    $_SESSION['username'] = $row['username'];
    $_SESSION['id'] = $row['user_id'];
    //added these net for control
    $_SESSION['name'] = $row['name'];
    $_SESSION['surname'] = $row['surname'];
    header("Location: adminhome.php");
    exit();
  }
  else{
    echo "<h1>incorrect details</h1>";
  }


}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>EPIUSE Login</title>
        <link rel="icon" type="image/x-icon" href="media/favlogo.ico">
        <link rel="stylesheet" type="text/css" href="css/loginstyle.css" />
    </head>
   
<body>
    <br/><br/><br/><br/><br/><br/><br/><br/>
    <div class ="login-contain">
        <div class="left-side">
          <div class='img-class'>
  
          </div>
            <form action ="login.php" method = 'POST'>
                <label For ='emil1' class ='lgLabel'>Username</label>
                <input placeholder='Enter your username..' type ='text' name = "userLog" id="emil1"  class='lgInput'/>
                <label For ='pwd1'class ='lgLabel'>Password</label>              
                <input placeholder='Enter password...' type ='password' name = "passLog" id="pwd1"  class ='lgInput'/><br/>
                <input type='submit' name="logsubmit" id='sub_butt' value="Login"/>
            </form>
          <div class ='foot'>
            <p>Dont have an account yet? <a href ="register.php">click to Register</a></p>
          </div>
        </div>

        <div class ="right-side">
          <div class ='welcomeNote'>
            <h2 id='welid'>welcome to Employee Tree</h2>
          </div>

            <img src='gallery/logo.png' alt='' id='wel-img-id'/>

        </div>        

      </div>       
</body>
</html>
