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
                                  <li><a href="addmod.php"> Add moderator</a></li>
                                  <li><a href="useredit.php"> Edit Users </a></li>';
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


          
            
        
                    <h1>USERS LIST!!!</h1>
                   <div id="reg">
                   <form name="myForm"    action="useredit_process.php" method="post" >
                       <ul>
                            <?php 
                                    $sid = $_SESSION['varname'];
                                    mysql_connect("localhost","root","");
                                    mysql_select_db("cds");

                                    $sql=mysql_query("select * from users where role <> 'admin' ")
                                            or die("failed to query from users".mysql_error());
                                            //$rowone= mysql_fetch_array($one);
                                           

                                          while($rows = mysql_fetch_array($sql))
                                          {
                                             echo "ID     ".$rows['id']. '<br>'.
                                                      "Name     ".$rows['first'].$rows['last'].'<br>'.
                                                      "Role  ".$rows['role'].'<br>'.'<br>';
                                                      
                                          }

                                         

                                    
                            ?>
                            
                              <input type="search" name="searchid">
                              <input type="submit" name="search" value="delete">
                                                        

                       </ul>
                       </form>
                   </div>
                </div>
                
               
                        
    <footer id="footer">
      &copy;All Rights are reserved 2016.
    </footer>    
       
    </div>
  
    
  </div> 
</html>
        
    
    
    
       
