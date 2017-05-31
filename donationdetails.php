<?php



?>


<!DOCTYPE HTML>
<html >
	<head>
       
        <title>register</title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <style type="text/css">
            
            #reg{
                padding:0px 0px 0px 50px;
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
                            else
                            {
								//echo $sid;
                            	echo '<a href="logout.php"><button>log out</button></a>';
                            }
                                  
                                  if(isset($sid)) // if sid  has any value then it will enter inside else dont
                                  {
                                  //
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
                                  <li><a href="user_profile.php"> User Profile </a></li>
                                  <li><a href="my_donation.php"> My donation </a></li>';
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

		
     
		<div id="contents_area" >
        	
            
				
                    <h1>REGISTER!!!</h1>
                   <div id="reg">
                   <form name="myForm"  onsubmit="return validateForm()"  action="register.php" method="post" >
                       <ul>
                            
                       	<?php 
                       	//session_start();
$sid = $_SESSION['varname'];
mysql_connect("localhost","root","");
mysql_select_db("cds");
//echo $sid;

$result=mysql_query("select * from inventory where mod_id='$sid'") 
or die("failed to query from inventory".mysql_error());

$shirt=0;
$pant=0;
$jacket=0;
$blanket=0;
while ($row = mysql_fetch_assoc($result)){
    $shirt = $shirt+$row['shirt'];
    $pant =$pant+ $row['pant'];
    $jacket =  $jacket+$row['jacket'];
    $blanket = $blanket+$row['blanket'];
    
}

echo "total number of shirt in stock :".$shirt.'<br>'.
	"total number of pant in stock :".$pant.'<br>'.
	"total number of jacket in stock :".$jacket.'<br>'.
	"total number of blanket in stock :".$blanket.'<br>';

	
	
	
	
	//echo '<a href="logout.php"><button>log out</button></a>';
                       	?>


                       </ul>
                       </form>
                   </div>
                </div>
                
               
                        
			   
		</div>
	
		<footer id="footer">
			&copy;All Rights are reserved 2016.
		</footer>    
	
	</div> 
</html>
        
    
    
    
       

