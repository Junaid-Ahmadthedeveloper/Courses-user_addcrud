<?php 
$conn = new mysqli("localhost","root", "", "add_data") or die();

$form  = file_get_contents("php://input");
$_POST = json_decode($form,true);
if($_POST['Submit'])
{
$name = $_POST['Name'];
$email = $_POST['Email'];

if(empty($name))
{
    echo  json_encode(['nameerorr' => "Please Enter Your name"]);
}
elseif(empty($email))
{
    echo  json_encode(['emalerorr' => "Please Enter Your name"]);
}
else
{
    
    $sql = "INSERT INTO `data`(`name`, `email`) VALUES ('{$name}','{$email}')";
    if(mysqli_query($conn,$sql))
    {
        echo  json_encode(['success' => "Data inserted Successfully"]);
    }

}


}
?>