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
                                  echo '<li><a href="index.php"> Home </a></li>
                                  <li><a href="about_us.php"> About Us</a></li>
                                  <li><a href="contact_us.php"> Contact Us </a></li>
                                  <li><a href="app.php"> Set Appoinment </a></li>
                                  <li><a href="user_profile.php"> User Profile </a></li>
                                  <li><a href="my_donation.php"> My donation </a></li>
                                  <li><a href="donorlist.php"> Donor List </a></li>
                                  <li><a href="donationdetails.php"> Donation Details</a></li>';
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
          
            
        
                    <h1>DONOR LIST!!!</h1>
                   <div id="reg">
                   <form name="myForm"    action="donorlist_process.php" method="post" >
                       <ul>
                            <?php 

                              //session_start();
$sid = $_SESSION['varname'];
mysql_connect("localhost","root","");
mysql_select_db("cds");

$one=mysql_query("select * from users where id='$sid'")
        or die("failed to query from users".mysql_error());
        
        $rowone= mysql_fetch_array($one);
        $modid=$rowone['id'];
        $moddis=$rowone['district'];
       echo "area : " .$moddis.'</br>';

    $two=mysql_query("select * from users where district='$moddis' and role='donor'")
        or die("failed to query from users ".mysql_error());
       while($rowtwo= mysql_fetch_array($two))
       {
          $idone= $rowtwo['id'] ;     
          echo "name :".$rowtwo['first'].'   '.$rowtwo['last'].'<br>';
          echo "ID ".$rowtwo['id'].'<br>';
                 
          $three=mysql_query("select * from inventory where user_id='$idone' and mod_id='$modid' ")
           or die("failed to query from users ".mysql_error());
          while($rowthree= mysql_fetch_array($three))
          {
            
            echo "Status ".$rowthree['status'].'<br>'.'<br>'; 
             echo "Appoinment Date     ".$rowthree['appdate']. '<br>'; 
            echo "shirt     ".$rowthree['shirt']. '<br>'.
                  "pant     ".$rowthree['pant'].'<br>'.
                  "jacket   ".$rowthree['jacket'].'<br>'.
                  "blanket  ".$rowthree['blanket'].'<br>'.
                  "appdate  ".$rowthree['appdate'].'<br>';
          }
          echo '<br>'.'<br>';

       }
        
      
        
  
//echo '<a href="logout.php"><button>log out</button></a>';

                            ?>



                       </ul>
                       <input type="search" name="doneid">
                       <input type="submit" name="done" value="done!!">
                       </form>
                   </div>
                </div>
                
               
                        
         
    </div>
  
    <footer id="footer">
      &copy;All Rights are reserved 2016.
    </footer>    
  
  </div> 
</html>
        
    
    
    
       
