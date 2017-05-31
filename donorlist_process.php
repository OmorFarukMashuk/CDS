<?php

session_start();


                               $doneid=$_POST["doneid"];              
                               $_SESSION['doneid']=$doneid;
                                            include 'done.php';
                                             



?>