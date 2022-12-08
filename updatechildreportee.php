<?php
session_start();
require "connection.php";
include "navbar.php";

$UserID =  $_SESSION['id'];
$taskID = $_POST['user_task'];
$currentEmp = $_POST['user_stuff'];
header("Cache-Control: max-age=300, must-revalidate");
echo "<br>";
?>

<?php
	//------------------------------------------code for updating a task for grandchild----------------------------------------------//
if (isset($_POST['submit']))
{ 
	$title = $_POST['titlePost'];
	$descr = $_POST['descrPost'];
	$startDate = $_POST['startdatePost'];
	$endDate = $_POST['enddatePost'];
	$startTime = $_POST['starttimePost'];
	$endTime = $_POST['endtimePost'];

	$duplicate = mysqli_query($conn,"SELECT * FROM tbschedule WHERE userid = '$currentEmp' AND  start_time = '$startTime' AND end_time = '$endTime'  AND start_date = '$startDate' AND end_date = '$endDate'");
	
    if(mysqli_num_rows($duplicate) > 0)
    {
      echo "<h3 class='TheMessage'>You Already have an existing task with the same time,or that overlaps with other tasks</h3>";  
    }

    else
	{

      if($title  == "" || $descr  == "" ||  $startDate == "" ||  $endDate  == "" ||  $startTime == "" ||  $endTime  == "")
      {
        echo "<h1 class='TheMessage'>Fill in all the values</h1>";  
      }
	  else if($startDate > $endDate || $startTime > $endTime)
	  {
		echo "<h1 class='TheMessage'>Your start time/date is greater than the end time/date</h1>"; 
	  }
	  else
	  {

		
        $query = "UPDATE tbschedule SET start_date = '".$startDate."', end_date = '".$endDate."', start_time = '".$startTime."',end_time = '".$endTime."',title = '".$title."',description = '".$descr."' WHERE id = '".$taskID."'";
        mysqli_query($conn,$query);
        echo "<h1 class='TheMessage'>Update successful</h1>";
		
      }
   }  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <title>Search</title>
	<link rel="icon" type="image/x-icon" href="media/favlogo.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class ="container">

<div class ="row" id="inputHolder" >
			
			<div class="col-xl-12 offset-xl-0 col-lg-12 col-md-12 offset-md-0  col-sm-12">
					<br/><h1>Update a Schedule</h1><br/>
					<form action='updatechildreportee.php' method='POST'>					
						<label class ='lgLabel'>Title</label>
						<input placeholder='Enter task name...' type ='text' name = "titlePost"  class='lgInput'/><br/>

						<label class ='lgLabel'>Description</label>
						<input placeholder='Enter task description...' type ='text' name = "descrPost"  class='lgInput'/><br/>

						<label class ='lgLabel'>Start Date</label>
						<input placeholder='Enter task start date...' type ='date' name = "startdatePost"  class='lgInput'/><br/>

                        <label class ='lgLabel'>End Date</label>
						<input placeholder='Enter task end date...' type ='date' name = "enddatePost"  class='lgInput'/><br/>
						<div class ="row">
							<div class ="col-2">
								<label class ='lgLabel'>Start Time</label>
								<input placeholder='Enter task start time...' type ='time' name = "starttimePost"  class='lgTimeInput'/>
							</div>

							<div class="col-2">
								<label class ='lgLabel'>End Time</label>
								<input placeholder='Enter task end time...' type ='time' name = "endtimePost"  class='lgTimeInput'/><br/>
							</div>
						</div>


                        <input type="hidden"  name="user_task" value="<?php echo $_POST['user_task']?>">
						<input type="hidden"  name="user_stuff" value="<?php echo $_POST['user_stuff']?>">
						<input type='submit' id='sub_butt' name="submit" value="Update"/>
					</form>
			</div>
		</div>

</div>
</div>

</body>
</html>


