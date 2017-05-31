<?php


    $db_connect = mysql_connect("localhost","root","") or die("unable to connect");
    mysql_select_db("cds",$db_connect) or die ("unable to select cds");
    
    $firstname = $_POST["FirstName"];
    $lastname= $_POST["LastName"];
    $houseaddress=$_POST["houseaddress"];
    $password=$_POST["password"];
    $Phone=$_POST["Phone"];
    $email=$_POST["email"]; 
    $dob=$_POST["DOB"];
    $district=$_POST["district"];
    if($_POST["Gender"] == "male") {
        $gender="male";
    } elseif($_POST["Gender"] == "female") {
         $gender="female";
    }
    $role="moderator";
    //echo $firstname ."</br>".$lastname."</br>".$dob ."</br>".$gender."</br>".$houseaddress."</br>".$password."</br>".$Phone."</br>".$email;

    $query = "INSERT INTO users(first,last,dob,address,district,gender,phone,email,pass,role)
    VALUES('$firstname','$lastname','$dob','$houseaddress','$district', '$gender','$Phone','$email','$password','$role')";
    if(mysql_query($query))
    {
        echo '<script type="text/javascript">alert("Welcome!")</script>';
        include "index.php";
    }
    else
    {
        echo '<script type="text/javascript">alert("try again")</script>';
        include "login.php";
    }


?>