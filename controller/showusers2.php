<?php 
$conn = mysqli_connect("localhost","root", "", "add_data");
$sql = "SELECT * FROM `courses`";
$result = mysqli_query($conn,$sql);
$courses = $result->fetch_all(MYSQLI_ASSOC);
echo json_encode($courses);
?>