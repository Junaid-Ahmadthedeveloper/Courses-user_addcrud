<?php 
$conn = mysqli_connect("localhost","root", "", "add_data") or die();
$form  = file_get_contents("php://input");
$_POST = json_decode($form,true);

$id = $_POST['Id'];
$sql = "SELECT * FROM `courses` WHERE `id` = $id";
$res = mysqli_query($conn,$sql);
$result = $res->fetch_assoc();

echo json_encode($result);


