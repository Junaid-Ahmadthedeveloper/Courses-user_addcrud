<?php 
$conn = mysqli_connect("localhost","root", "", "add_data");
$sql = "SELECT * FROM `data`";
$result = mysqli_query($conn,$sql);
$hamza = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($hamza);
?>