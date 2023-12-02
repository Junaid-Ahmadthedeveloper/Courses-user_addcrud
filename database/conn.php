<?php  
$conn = new mysqli("localhost","root", "", "add_data");
if ($conn->connect_error) 
{
    die("Not Connected" . $conn->connect_error);
}
?>