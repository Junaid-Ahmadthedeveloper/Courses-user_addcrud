<?php 
$conn = mysqli_connect("localhost","root", "", "add_data") or die();
$form  = file_get_contents("php://input");
$_POST = json_decode($form,true);

$id = $_POST['Id'];
$sql = "DELETE FROM `courses` WHERE `id` = $id";
if(mysqli_query($conn,$sql))
{
    echo json_encode(['success' => "User Deleted Successfully"]);
}
?>