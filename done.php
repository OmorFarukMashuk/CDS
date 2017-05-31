<?php

//session_start();
if(isset($_SESSION['doneid']))
 {
                                              
                               $doneid= $_SESSION['doneid'];
                                            //echo $doneid;


                                          $db_connect = mysql_connect("localhost","root","") or die("unable to connect");

    mysql_select_db("cds",$db_connect) or die ("unable to select cds");



        $result="select * from inventory where user_id='$doneid' "
		or die("failed to query ".mysql_error());
	
if(mysql_query($result))
    {
        //$d="done";
        //echo $d;
       $updatestatus= "update inventory set status='done' where user_id='$doneid' "
       or die("failed to query ".mysql_error());
            if(mysql_query($updatestatus))
            {
                echo '<script type="text/javascript">alert("updated!")</script>'.mysql_error();
       include "donorlist.php";
            }
            else
            {
                echo '<script type="text/javascript">alert("try again!")</script>'.mysql_error();
        include "donorlist.php";
            }
    	
        
    }
    else
    {
        echo '<script type="text/javascript">alert("try again!")</script>'.mysql_error();
        include "donorlist.php";
    }
                                              
}

?>