<?php 
		if(!isset($_SESSION))
         {
                                   
                                  
         }
?>

<!DOCTYPE HTML>
<html>
	<head>
       
        <title>Home</title>

        <link type="text/css" rel="stylesheet" href="css/style.css">
        <style type="text/css">
            #contents_area img{
                width:1000px;
            }
        </style>
    </head>  
	
	<body>
    	<div id="wrapper">
    	<header id="header">
			<div id="header_area">
				<div id="logo"><img src="files/icon/logo.png" alt="Logo"></div>
					<?php 
						if(!isset($_SESSION))
                                  {
                                  session_start();

		                                  if(isset($_SESSION['varname']))
		                                  {
		                                  $sid = $_SESSION['varname'];
		                                  echo $sid;
		                                  echo '<a href="logout.php"><button>log out</button></a>';

		                                  }
		                                  else
		                                  {
		                                  	echo "not logged in";
		                                  }
                                  }
                                  
                                  if(isset($sid)) // if sid  has any value then it will enter inside else dont
                                  {
                                  //echo $sid;
                                  }
                                  else // 
                                  {
                                 
                                  }

					?>
               
			</div>

			<div id="menu_area">
				<nav id="menu">
					<ul>
					<?php 
							if(isset($sid)) // if sid  has any value then it will enter inside else dont
                                 {
                                  echo '<li><a href="index.php"> Home </a></li>
                                  <li><a href="about_us.php"> About Us</a></li>
                                  <li><a href="contact_us.php"> Contact Us </a></li>
                                   <li><a href="app.php"> Set Appoinment </a></li>
                                   <li><a href="user_profile.php"> User Profile </a></li>';
                                  }
                                  else
                                  {
                                  	echo '<li><a href="index.php"> Home </a></li>
						
                        <li><a href="login.php"> Already A Donor? </a></li>                             
                        <li><a href="about_us.php"> About Us</a></li>
                        <li><a href="register.php"> Become A Donor </a></li> 
                        <li><a href="contact_us.php"> Contact Us </a></li>';

                                  }

						?>
						
					</ul>
				</nav>
			</div>
		</header>
     
		<div id="contents_area">
        	<img src="files/icon/bg.jpg" alt="Background">        	
		</div>
	
		<footer id="footer">
			&copy; All Rights are reserved 2016.
		</footer>    
	
	</div> 
        
    
    
    
       
