<?php
session_start();
require "connection.php";
include "navbar.php";
header("Cache-Control: max-age=300, must-revalidate");
	$UserID =  $_SESSION['id'];

    if($_SESSION['id'] == '') //is the user logged in?
    {
        header("Location:login.php");
    }

$currentEmp = $_POST['user_stuff'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flakevents Login</title>
        <link rel="icon" type="image/x-icon" href="media/favlogo.ico">
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        
    </head>
   
<body>
    <br/><br/><br/><br/>
<script>
$(document).ready(function(){
    $(".profile2").toggle(); //toggling the user creation menu to show and hide when button pressed
  $(".togg_butt").click(function(){
    $(".profile2").toggle();
  });
});
</script>
</body>
</html>

<?php
//-------deleting a schedule for a specific user--------------//
	if (isset($_POST['deleteTask']))
	{
		$tID = $_POST['user_task'];
		$sql = "DELETE FROM tbschedule WHERE id = '$tID'";
		if ($conn->query($sql) === TRUE) {
			echo "<div class='container'><h3 class ='TheMessage'>Task deleted successfully</h3></div>";
		  } else {
			echo "Error deleting record: " . $conn->error;
		  }
	}
    //--------------------end of deleting task-----------------------//
?>


<?php
//------------------------code for creating new task-------------------------------//
if (isset($_POST['submitNew']))
{ 
    $startDate = $_POST['startdatePost'];
    $endDate = $_POST['enddatePost'];
    $startTime = $_POST['starttimePost'];
    $endTime = $_POST['endtimePost'];
    $title = $_POST['titlePost'];
    $description = $_POST['descrPost'];

    $duplicate = mysqli_query($conn,"SELECT * FROM tbschedule WHERE userid = '$currentEmp' AND start_time = '$startTime' AND end_time = '$endTime'  AND start_date = '$startDate' AND end_date = '$endDate'");

    if(mysqli_num_rows($duplicate) > 0)
    {
      echo "<h3 class='TheMessage'>You Already have an existing task with the same time</h3>";  
    }
    else
    {
      if($startTime == "" || $endTime == "" || $startDate == "" || $endDate == "" ||  $title == "" || $description == "")
      {
        echo "<h1>Fill in all the values</h1>";  
      }else{ 
        $query = "INSERT INTO tbschedule (userid,start_date,end_date,start_time,end_time,title,description) VALUES ('$currentEmp',' $startDate','$endDate','$startTime','$endTime','$title','$description')";
        mysqli_query($conn,$query);
        echo "<h3 class='TheMessage'>Task creation successful</h3>";
      }
    }  
}   
//-------------------------------------end of creating new task-----------------------//
?>


<?php
//-------------------Task COUNT-------------------//
$TaskCount = 0;
$queryCount = "SELECT * FROM tbschedule WHERE userid = '$currentEmp'";
$resultCount = $conn->query($queryCount);
if($resultCount->num_rows > 0)
{
	while ($row = $resultCount->fetch_assoc()) 
	{	
        $TaskCount++;
	}
}
?>

<?php
//-------------------------Code for creating a new task and showing the selected user details--------------------//
$queryUser = "SELECT * FROM tbusers WHERE idt = '$currentEmp' ";

$userFirstname = '';
$userSurname = '';

$resultUser = $conn->query($queryUser);
if($resultUser->num_rows > 0)
{

	while ($row = $resultUser->fetch_assoc()) 
	{	
        $userFirstname = $row['firstname'];
        $userSurname = $row['surname']; 
        $username = $row['username'];
	}
}



 echo '
 <div class="container">
     <br/>
     
         <div id="profile" >
             <div class="row">
                 <div id="profHolder" class="col-xl-3  offset-xl-0 col-md-6 offset-md-0  col-sm-7 offset-sm-3 col-7 offset-3">
                     <img src="gallery/default profile.png" alt="" id=""/>
                 </div>
                 
                 <div id="detailsHolder" class="col-xl-7  offset-xl-0 col-md-6 offset-md-0  col-sm-7 offset-sm-3 col-7 offset-3">
                     <div><h2>'.$userFirstname.' '.$userSurname.'<br>@'.$username.'</h2></div><br/>
                    
                     <div class ="row">
                         <div class= "col-12">
                             <h4>User ID: '.$currentEmp.'</h4>
                             <h4>Tasks: '.$TaskCount.'</h4>
                             
                         </div>
                  
                     </div><br>
                     <div class="row">
                         <div class ="col-3">
                           <input type="submit" class="togg_butt" name="text_me" value="Add Schedule"/>
                         </div>
                         <div class ="col-3 offset-3 offset-lg-0  offset-xl-0  offset-md-1  offset-sm-2">

                         </div>
                     </div>

                 </div>
             </div> 
         </div><br>


         <div class="profile2">
            <form action = "manageuser.php" method = "POST">
                <label class ="lgLabel">Title</label>
                <input placeholder="Enter event name..." type ="text" name = "titlePost"  class="lgInput"/><br/>

                <label class ="lgLabel">Description</label>
                <input placeholder="Enter event description..." type ="text" name = "descrPost"  class="lgInput"/><br/>

                <label class ="lgLabel">Start Date</label>
                <input placeholder="Enter event date..." type ="date" name = "startdatePost"  class="lgInput"/><br/>

                <label class ="lgLabel">End Date</label>
                <input placeholder="Enter event date..." type ="date" name = "enddatePost"  class="lgInput"/><br/>
                <div class ="row">
                    <div class ="col-2">
                        <label class ="lgLabel">Start Time</label>
                        <input placeholder="Enter event location..." type ="time" name = "starttimePost"  class="lgTimeInput"/>
                    </div>

                    <div class="col-2">
                        <label class ="lgLabel">End Time</label>
                        <input placeholder="Enter event location..." type ="time" name = "endtimePost"  class="lgTimeInput"/><br/>
                    </div>
                </div>


                <input type="hidden"  name="user_stuff" value="'. $_POST["user_stuff"].'">
                <input type="submit" id="sub_butt" name="submitNew" value="Add Task"/>
            </form>                      
         </div>
     
     <br/>
 </div>  ' ;

 //---------------------end of showing selected user and creating new task-------------------------------//
 ?>


<?php

//---------------------------------code for showing tasks and deleting users-------------------------//
$queryShow = "SELECT * FROM tbschedule WHERE userid = '$currentEmp'";
				
$resultss = $conn->query($queryShow);
if($resultss->num_rows > 0)
{
	echo "<br/>";
	echo "<h2 class='TheMessage'>All Tasks</h2><br/>";
	echo '<div class="container">
	<div class="row">';
	while ($row = $resultss->fetch_assoc()) 
	{	
		$CurrentTask=$row["id"];

		
		echo '<div class="col-12 col-md-4" class="showCard">
                <form action="manageuser.php" method="post">
					<div class="myCard">                     
						<div class="">'.
                            '<h3>'.$row["title"].'</h3><br/>'.
                            '<h5>'.$row["description"].'</h5><br/>'.
							'<h5>'.$row["start_date"].' to '.$row["end_date"].'<br> ('.$row["start_time"].' - '.$row["end_time"].') </h5><br/>'.
							
						'</div>
                        

                        <div class ="row">
                            <div class="col-6">
                              <input type="submit" id="delete_butt" name="deleteTask" value ="Delete">
                            </div>
                            <input type="hidden"  name="user_task" value="'.$CurrentTask.'">
                            <input type="hidden"  name="user_stuff" value="'.$_POST['user_stuff'].'">
                </form>
                            
                            
                            <div class="col-6">
                                <form action="updatetask.php" method="POST" >
                                    <input type="hidden"  name="user_task" value="'.$CurrentTask.'">
                                    <input type="hidden"  name="user_stuff" value="'.$_POST['user_stuff'].'">
                                    <input type="submit" id="sub_butt" name="updateT" value ="Update">
                                </form>
                            </div>
                            
                        </div>
                     </div><br>
						
                        
                        
				
			  </div>';
		
	}

	echo '</div>';
	echo '</div>';
}
else{
	echo "<h1 class='TheMessage'> No Schedules</h1>";
}
//---------------------end of displaying tasks------------------------/
?>