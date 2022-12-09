<?php
	if(isset($_POST["btnsubmit"]))
	{
		include "z_db.php";
		
		$date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
		$Course=$_POST["course"];
               		
		$query = "select *from `member` ";

		$result = mysqli_query($con,$query)or die("select error");
		while($rec = mysqli_fetch_array($result))
		{
			$mno = $rec["member_id"];
            $mname=$rec["name"];
            $mreg=$rec["reg_no"];
			if(isset($_POST[$mno]))
			{
				$query1 = "INSERT INTO  `attandance`(`member_id` ,`name`,`reg_no`, `date` ,  `attendance`,`course`) VALUES('$mno','$mname','$mreg','$date','1','$Course')";
			}
			else
			{
				$query1 = "INSERT INTO  `attandance`(`member_id`, `name`,`reg_no`, `date` ,  `attendance`,`course`) VALUES('$mno','$mname','$mreg','$date','0','$Course')";
			}
			mysqli_query($con,$query1)or die("insert error".$mno);
			print "<script>";
			print "alert('Attendance get successfully....');";
			print "self.location='getattendance.php';";
			print "</script>";
		}
		
		
			
		
	}
	else
	{
		header("Location:index.php");
	}
?>