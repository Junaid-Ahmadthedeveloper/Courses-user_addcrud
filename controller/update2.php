<?php 
$conn = mysqli_connect("localhost","root", "", "add_data") or die();
$form  = file_get_contents("php://input");
$sendata = json_decode($form,true);
if($sendata['Submit'])
{
$id =   $sendata['Id']; 
$name = $sendata['Name'];
$duration =$sendata['Duration'];
$fees =$sendata['Fees'];
$teacher =$sendata['Teacher'];



if(empty($name))
{
    echo  json_encode(['nameerorr' => "Please Enter Your name"]);
}
elseif(empty($duration))
{
    echo  json_encode(['emalerorr' => "Please Enter Your course duration"]);
}
elseif(empty($fees))
{
    echo  json_encode(['emalerorr' => "Please Enter Your fees"]);
}
elseif(empty($teacher))
{
    echo  json_encode(['emalerorr' => "Please Enter Your Teacher"]);
}
else
{
    
    $sql = "UPDATE `courses` SET  `name`='$name',`duration`='$duration' , `fees` = '$fees' , `teacher` = '$teacher' WHERE `id` = '$id'";
    if(mysqli_query($conn,$sql))
    {
        echo  json_encode(['success' => "Data updated Successfully"]);
    }

}
}