<?php
session_start();
require "connection.php";
include "navbar.php";
	$UserID =  $_SESSION['id'];

    if($_SESSION['id'] == '')
    {
        header("Location:login.php");
    }
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
//-------------------Displaying the users details in hierarchy---//
$queryShow = "SELECT * FROM tbusers WHERE idt = '$UserID' ";
				
$resultss = $conn->query($queryShow);
if($resultss->num_rows > 0)
{
	echo "<br/>";
	echo '<div class="container">
	<div class="row">';
	while ($row = $resultss->fetch_assoc()) 
	{	
		$CurrentEvent =$row["idt"];

		
		echo '<div class="col-12 col-md-4 offset-md-4" class="showCard">
                <form action="strangerpage.php" method="post">
					<div class="myCardMain"> 
                    <img src="gallery/default profile.png" style="width:50%;height:180px; margin-left: 25%;" class= “eventsGallery"/>                 
						<div class="">'.
							'<h3 class="offset-3">'.$row["title"].'(You)</h3><br/>'.
							'<h4 class="offset-3">@'.$row["username"].'</h4><br/>'.
							'<h5>'.$row["idt"].'</h5><br/>'.
						'</div>
                        <input type="hidden"  name="user_stuff" value="'.$CurrentEvent.'">
						
					</div>
                </form>
			  </div>';
		
	}

	echo '</div>';
	echo '</div>';
}
else{
	echo "<h1 class='TheMessage'> No one  reports to you</h1>";
}
//---------------------end of displaying user details------------------------/


//-------------------Displaying all the users that report to logged in user---//
$queryShow = "SELECT * FROM tbusers WHERE reports_to = '$UserID' ";
				
$resultss = $conn->query($queryShow);
if($resultss->num_rows > 0)
{
	echo "<br/>";
	echo "<h2 class='TheMessage'>Employees who report directly to you: </h2><br/>";
	echo '<div class="container">
	<div class="row">';
	while ($row = $resultss->fetch_assoc()) 
	{	
		$CurrentEvent =$row["idt"];

		
		echo '<div class="col-12 col-md-4" class="showCard">
                <form action="strangerpage.php" method="post">
					<div class="myCard">    
                    <img src="gallery/default profile.png" style="width:50%;height:180px; margin-left: 25%;" class= “eventsGallery"/>                 
						<div class="">'.
							'<h3 class="offset-2">'.$row["title"].'</h3><br/>'.
							'<h4 class="offset-3">@'.$row["username"].'</h4><br/>'.
							'<h5>'.$row["idt"].'</h5><br/>'.
						'</div>
                        <input type="hidden"  name="user_stuff" value="'.$CurrentEvent.'">
					</div><br>  
                </form>
			  </div>';
		
	}

	echo '</div>';
	echo '</div>';
}
else{
	echo "<h1 class='TheMessage'> No one  reports to you</h1>";
}
//---------------------end of displaying users that report to logged in user------------------------/

?>