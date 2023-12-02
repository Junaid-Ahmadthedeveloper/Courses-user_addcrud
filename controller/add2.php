<?php 
$conn = new mysqli("localhost","root", "", "add_data") or die();

$form  = file_get_contents("php://input");
$_POST = json_decode($form,true);
if($_POST['Submit'])
{
$name = $_POST['Name'];
$duration = $_POST['Duration'];
$fees = $_POST['Fees'];
$teacher = $_POST['Teacher'];



if(empty($name))
{
    echo  json_encode(['nameerorr' => "Please Enter Your name"]);
}
elseif(empty($duration))
{
    echo  json_encode(['emalerorr' => "Please Enter Your name"]);
}
elseif(empty($fees))
{
    echo  json_encode(['emalerorr' => "Please Enter Your name"]);
}
elseif(empty($teacher))
{
    echo  json_encode(['emalerorr' => "Please Enter Your teacher"]);
}
else
{
    
    $sql = "INSERT INTO `courses`(`name`, `duration` , `fees` , `teacher`) VALUES ('{$name}','{$duration}' , '{$fees}' , '{$teacher}')";
    if(mysqli_query($conn,$sql))
    {
        echo  json_encode(['success' => "Data inserted Successfully"]);
    }

}


}
?>