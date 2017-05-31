<!DOCTYPE HTML>
<html >
	<head>
       
        <title>login</title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
        <style type="text/css">

        </style>
        <script type="text/javascript">
        	function validateForm() {

	if(document.getElementById("email").value==null||document.getElementById("email").value==""||document.getElementById("pass").value==null||document.getElementById("pass").value==""){
		alert("field empty");
	return false;
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
					</ul>
				</nav>
			</div>
		</header>	

		z
     
		<div id="contents_area">

            
				<h1>Login </h1>
                <form name="myForm" onsubmit="return validateForm()"  action="loginprocess.php" method="post"  >
<pre>

    Email           <input type="text" name="email" id="email" value ="abc@abc.com"><br>

    
    Password            <input type="pass" name="pass" id="pass" value="a"><br>
        
                        <input type="submit"  value="Submit" ><br>

        
    
</pre>
</form>
            
		</div>
	
		<footer id="footer">
			&copy; All Rights are reserved 2016.
		</footer>    
	
	</div> 
</html>
        
    
    
    
       
