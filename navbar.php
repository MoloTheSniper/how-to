<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" type = "text/css" href ="css/navstyle.css">
</head>
<body>
<nav class="navbar">
            <!-- LOGO -->
            <div class="logo"><h3>EMPLOYEE TREE</h3></div>
            <!-- NAVIGATION MENU -->
            <ul class="nav-links">
              <!-- USING CHECKBOX HACK -->
              <input type="checkbox" id="checkbox_toggle" />
              <label for="checkbox_toggle" class="hamburger">&#9776;</label>
              <!-- NAVIGATION MENUS -->
              <div class="menu">
                <li><a href="hierarchy.php">Hierarchy</a></li>
                <li><a href="manage.php">Manage Schedule</a></li>
                <li><a href="logout.php">Log Out</a></li>
              </div>
            </ul>
          </nav>  
</body>
</html>