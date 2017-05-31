
<!DOCTYPE HTML>
<html >
    <head>
        
        <title>appointment</title>
        
        <link type="text/css" rel="stylesheet" href="css/style.css">


        <style type="text/css">
            #app{
                padding:0px 0px 0px 50px;
            }
            
            
        </style>
        <script type="text/javascript">
          function validateForm() {

            if(document.getElementById("app_date").value==null||document.getElementById("app_date").value=="")
            {
              alert("field empty");
                return false;
          }


            var inputdDate = document.getElementById("app_date").value;
            
            if(new Date(inputdDate).getTime() < new Date().getTime()){
              alert("Please Select a valid date");
              return false;

            }
          }
        </script>


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
                                        echo "not loggggged in";
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
                                  {   //session_start();
                                    $sid = $_SESSION['varname'];
                                      echo $sid;
                                      echo '<a href="logout.php"><button>log out</button></a>';
                                  }
                            }

          ?>
                
            </div>

            <div id="menu_area">
                <nav id="menu">
                    <ul>
                        <li><a href="index.php"> Home </a></li>
                                               
                        <li><a href="about_us.php"> About Us</a></li>
                        
                        <li><a href="contact_us.php"> Contact Us </a></li>
                        <li><a href="user_profile.php"> User Profile </a></li>
            </div>
        </header>   

        
     
        <div id="contents_area" >
            
            
                
               <div id="contents">
                    <h1>Set Appoinment</h1>
                   <div id="app">
                   <form name="appform" onsubmit="return validateForm()" action="app_process.php" method="post" >
                       <ul>
                            
                            <li>Shirt:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    
                            <select name="shirt">
                              <option value=1>1</option>
                              <option value=2>2</option>
                              <option value=3>3</option>
                              <option value=4>4</option>
                              <option value=5>5</option>
                              <option value=6>6</option>
                              <option value=7>7</option>
                              <option value=8>8</option>
                              <option value=9>9</option>
                              <option value=10>10</option>
                            </select><br></li>

                            <li>Pants:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp 
                            <select name="pant">
                              <option value=1>1</option>
                              <option value=2>2</option>
                              <option value=3>3</option>
                              <option value=4>4</option>
                              <option value=5>5</option>
                              <option value=6>6</option>
                              <option value=7>7</option>
                              <option value=8>8</option>
                              <option value=9>9</option>
                              <option value=10>10</option>
                            </select><br></li>

                            <li>Jacket:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp 
                            <select name="jacket">
                              <option value=1>1</option>
                              <option value=2>2</option>
                              <option value=3>3</option>
                              <option value=4>4</option>
                              <option value=5>5</option>
                              <option value=6>6</option>
                              <option value=7>7</option>
                              <option value=8>8</option>
                              <option value=9>9</option>
                              <option value=10>10</option>
                            </select><br></li>

                            <li>Blanket:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp &nbsp&nbsp&nbsp&nbsp 
                            <select name ="blanket">
                              <option value=1>1</option>
                              <option value=2>2</option>
                              <option value=3>3</option>
                              <option value=4>4</option>
                              <option value=5>5</option>
                              <option value=6>6</option>
                              <option value=7>7</option>
                              <option value=8>8</option>
                              <option value=9>9</option>
                              <option value=10>10</option>
                            </select><br></li>

                            <li>Appoinment Date:
                            
                            <input type="date" name="appdate" id="app_date"><br>
                           </li>

                           


                            <input type="submit"  name="submit" value="Submit" "><br>
                       </ul>
                       </form>
                   </div>
                </div>
                
               
                        
               
        </div>

        
        <footer id="footer">
            &copy;All Rights are reserved 2016.
        </footer>    
    
    </div> <!--End wrapper-->
</html>
        
    
    
    
       
