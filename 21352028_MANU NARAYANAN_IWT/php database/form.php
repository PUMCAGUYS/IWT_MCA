<?php

$conn=mysqli_connect('localhost','root','manu3695','samp');
$name = $admno = $password = $email = $dob = $course = $cnumber = "";
if($conn->connect_error)
{
    die("connection failed:".$conn->connect_error);
}
else
{
echo"Success";
}
if(isset($_POST['submit']))
{   
    $name = $_POST['name'];
    $admno = $_POST['admno'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $course = $_POST['course'];
    $cnumber = $_POST['cnumber'];
}
$sql = "INSERT INTO user(`name`,`admno`,`email`,`dob`,`course`,`cnumber`) VALUES('$name','$admno','$email','$dob','$course','$cnumber')";
// echo $sql;exit;
if(mysqli_query($conn, $sql))
    {
      echo "New record created successfully.";
    } 
    else 
    
      echo "Error: " . $sql . "<br>" . $conn->error;
    
?>