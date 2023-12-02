<?php 
$conn = mysqli_connect("localhost","root", "", "add_data") or die();
$form  = file_get_contents("php://input");
$sendata = json_decode($form,true);
if($sendata['Submit'])
{
$id =   $sendata['Id']; 
$name = $sendata['Name'];
$email =$sendata['Email'];

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
    
    $sql = "UPDATE `data` SET  `name`='$name',`email`='$email' WHERE `id` = '$id'";
    if(mysqli_query($conn,$sql))
    {
        echo  json_encode(['success' => "Data updated Successfully"]);
    }

}
}