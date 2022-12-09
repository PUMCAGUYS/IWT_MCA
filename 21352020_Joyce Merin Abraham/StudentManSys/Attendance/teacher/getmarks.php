<?php

    if(isset($_POST["btnrecord"]))
    {
        include "z_db.php";
        $Course=$_POST["course"];
        $Faculty=$_POST["faculty"];
        $Mark=$_POST["mark"];

        $query="select * from `member`";

        $result=mysqli_query($con,$query)or die("select error");
        while($rec=mysqli_fetch_array($result))
        {
            $mno=$rec["member_id"];
            $mname=$rec["name"];
            $mreg=$rec["reg_no"];
            
                
            $query1 = "INSERT INTO `marksdata`(`member_id`,`name`,`reg_no`,`course`,`faculty`,`marks`) VALUES ('$mno','$mname','$mreg','$Course','$Faculty','$Mark')";

            mysqli_query($con, $query1) or die("insert error" . $mno);
            print "<script>";
            print "alert('Marks recorded successfully...');";
            print "self.location='addcourse.php';";
			print "</script>";
            
        }
    }

?>