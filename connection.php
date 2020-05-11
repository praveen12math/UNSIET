<?php 

$conn= mysqli_connect("localhost","root",""); 
mysqli_select_db($conn,"unsiet"); 

if($conn) 
{
    
}
else 
{
    echo $conn-> connect_error;
}
?>