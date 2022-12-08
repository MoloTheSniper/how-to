<?php
session_start();
require "connection.php";
include "navbar.php";
header("Cache-Control: max-age=300, must-revalidate");
	$UserID =  $_SESSION['id'];

    if($_SESSION['id'] == '')
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


</body>
</html>
<?php
//--------------------------showing grandchildren/ users that report to people the CEO manages-----------------------------------//
$queryShow = "SELECT * FROM tbusers WHERE reports_to = '$currentEmp' ";
				

$resultss = $conn->query($queryShow);
if($resultss->num_rows > 0)
{
	echo "<br/>";
	echo "<h2 class='TheMessage'>Manage Schedules</h2><br/>";
	echo '<div class="container">
	<div class="row">';
	while ($row = $resultss->fetch_assoc()) 
	{	
		$CurrentEmployee =$row["idt"];

		
		echo '<div class="col-12 col-md-12" class="showCard">
                
					<div class="myCard">  
                <div class= "row">  
                    <div class= "col-5">
                          <img src="gallery/default profile.png" style="width:130px;height:140px; margin-left: 25%;" class= “eventsGallery"/> 
                    </div>                   
						<div class=" col-5">'.
                        
							'<h3>'.$row["title"].'</h3><br/>'.
                            '<h4>@'.$row["username"].'</h4><br/>'.
							'<h5>ID: '.$row["idt"].'</h5><br/>'.
						'</div>
                </div><br>
                        
                        <div class= "row">

                            <div class="col-3">
                            <form action="managechildreportee.php" method="post">
                                <input type="submit" id="sub_butt" name="viewPage" value ="Manage">
                                <input type="hidden"  name="user_stuff" value="'.$CurrentEmployee.'">
                            </form>    
                            </div>

                           <div class="col-3">
                           
                           </div>
                        </div>
						
					</div><br>
              
			  </div>';
		
	}

	echo '</div>';
	echo '</div>';
}
else{
	echo "<h1 class='TheMessage'> No Data yet</h1>";
}
//---------------------end of displaying grand children------------------------/
?>