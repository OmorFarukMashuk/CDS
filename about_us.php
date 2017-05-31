<!DOCTYPE HTML>
<html>
	<head>
       
        <title>Home</title>

        <link type="text/css" rel="stylesheet" href="css/style.css">
        <style type="text/css">
            #contents_area img{
                width:1000px;
            }
            .mySlides {display:none;}
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
                            else
                            {
								if(isset($sid)) // if sid  has any value then it will enter inside else dont
                                  {
                                  //$sid = $_SESSION['varname'];
		                                  echo $sid;
		                                  echo '<a href="logout.php"><button>log out</button></a>';
                                  }
                                  else // 
                                  {
                                 echo "not logged in";
                                  }
                            }
                                  
                                  

					?>
               
			</div>

			<div id="menu_area">
				<nav id="menu">
					<ul>
					<?php 

					
							if(isset($sid)) // if sid  has any value then it will enter inside else dont
                                 {
		                                  //session_start();
		                                 		mysql_connect("localhost","root","");
												mysql_select_db("cds");

										$result=mysql_query("select * from users where id ='$sid'")
										or die("failed to query ".mysql_error());
										$row= mysql_fetch_array($result);
										if($row['role']=='donor')  // for donor
										{
											 echo '<li><a href="index.php"> Home </a></li>
				                                  <li><a href="about_us.php"> About Us</a></li>
				                                  <li><a href="contact_us.php"> Contact Us </a></li>
				                                   <li><a href="app.php"> Set Appoinment </a></li>
				                                   <li><a href="user_profile.php"> User Profile</a></li>
				                                   <li><a href="my_donation.php"> My donation </a></li>';
				                                   

										}
										else if ($row['role']=='moderator' ) // for mod
										{ 
											 

				                                   echo '<li><a href="index.php"> Home </a></li>
				                                  <li><a href="about_us.php"> About Us</a></li>
				                                  <li><a href="contact_us.php"> Contact Us </a></li>
				                                   <li><a href="donorlist.php"> Donor List </a></li>
				                                   <li><a href="donationdetails.php"> Donation Details</a></li>
				                                   <li><a href="user_profile.php"> User Profile </a></li>
				                                   <li><a href="my_donation.php"> My donation </a></li>';
				                                   


										}
										else if ($row['role']=='admin' ) // for admin
										{ 
											 
  
				                                   echo '<li><a href="index.php"> Home </a></li>
				                                  <li><a href="about_us.php"> About Us</a></li>
				                                  <li><a href="contact_us.php"> Contact Us </a></li>
				                                 
				                                  	<li><a href="useredit.php"> Edit Users </a></li>';
				                                   
				                                  
				                                   


										}
										

		                                 
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
     
		
	
		<footer id="footer">
			&copy; All Rights are reserved 2016.
		</footer>    
	
	</div>
		</body>
</html> 
         
        
    
    
    
       
