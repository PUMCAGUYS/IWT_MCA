<?php
	if(isset($_POST["btnsubmit"]))
	{
		extract($_POST);
		include "z_db.php";
	$rec = mysqli_fetch_array(mysqli_query($con, "SELECT member_id FROM `member` order by member_id "));
		
	$name = $_POST['Name'];
	$mobile = $_POST['Mobile'];
	$inst_email = $_POST['Institutional_Email'];
	$per_email = $_POST['Personal_Email'];
	$en = $_POST['Register_Number'];
		
		$query = "INSERT INTO  member(reg_no,name,mobile, inst_email,per_email) VALUES('$en','$name','$mobile','$inst_email','$per_email')";

		$q = mysqli_query($con,$query)or die("insert error");
		
			print "<script>";
			print "alert('Member add successfully....');";
			print "self.location='index.php';";
			print "</script>";
		
	}
	else
	{
		header("Location:index.php");
	}
?>

