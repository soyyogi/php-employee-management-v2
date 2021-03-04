<?php 
session_start();

if(isset($_SESSION["user"]))  
{ 
    if(time()-$_SESSION["login_time_stamp"] >60)   
    { 
        session_unset(); 
        session_destroy(); 
        header("Location: http://localhost/php-employee-management-v2");
    } 
} 
else
{ 
    header("Location: http://localhost/php-employee-management-v2");
}