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
        <script type="text/javascript">


function validateForm() {

    if(document.getElementById("firstnameid").value==null||document.getElementById("firstnameid").value==""||document.getElementById("lastnameid").value==null||document.getElementById("lastnameid").value==""||document.getElementById("phone").value==null||document.getElementById("phone").value==""||
        document.getElementById("pass1").value==null||document.getElementById("pass1").value==""||
        document.getElementById("pass2").value==null||document.getElementById("pass2").value==""
        ){
        alert("field empty");
    return false;
    }

   var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
    
    var pass1 = document.getElementById("pass1").value;
    var pass2 = document.getElementById("pass2").value;
    if (pass1 != pass2) {
        alert("Passwords Do not match");
       // document.getElementById("pass1").style.borderColor = "#E34234";
        //document.getElementById("pass2").style.borderColor = "#E34234";
        return false;
    }
    var val = document.getElementById("phone").value;
    if (/^\d{11}$/.test(val)) {
                //ok
    } 
    else 
    {
            alert("Invalid number; must be eleven digits")
         
            return false
    }
    
 };

</script>
	</head>    
	<body>
    	<div id="wrapper">
    	<header id="header">
			<div id="header_area">
				<div id="logo"><img src="files/icon/logo.png" alt="Logo"></div>
                  
			</div>

			<div id="menu_area">
				<nav id="menu">
					<ul>
						<li><a href="index.php"> Home </a></li>
                        <li><a href="login.php"> Already A Donor? </a></li>                             
                        <li><a href="about_us.php"> About Us</a></li>
                        <li><a href="register.php"> Become A Donor </a></li> 
                        <li><a href="contact_us.php"> Contact Us </a></li>
				</nav>
			</div>
		</header>	

		
     
		<div id="contents_area" >
        	
            
				
                    <h1>REGISTER!!!</h1>
                   <div id="reg">
                   <form name="myForm"  onsubmit="return validateForm()"  action="register.php" method="post" >
                       <ul>
                            First Name<li><input type="text" name="FirstName" id="firstnameid" placeholder="First Name" ><br></li>
                            Last Name<li><input type="text" name ="LastName" id="lastnameid" placeholder="Last Name"><br></li>
                            DOB<li><input type="date" name="DOB" value="2016-04-06"><br></li>
                            Hourse Address<li><textarea rows="4" cols="50" name="houseaddress"></textarea><br></li>
                            Gender<li><input type="radio" name="Gender" value="male" checked>Male<br>
                                      <input type="radio" name="Gender" value="female" >Female<br></li>
                            Phone<li><input type="text" name="Phone" id="phone" placeholder="Phone"><br></li>
                            Email ID<li><input type="text" name="email" id="emailid" placeholder="Email ID"><br></li>
                            Password<li><input type="password" name="password"id="pass1" placeholder="password"><br></li>
                            Confirm password<li><input type="password" id="pass2"  placeholder="password"><br></li>


                            <input type="submit"  name="submit" value="Submit" "><br>
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
        
    
    
    
       
