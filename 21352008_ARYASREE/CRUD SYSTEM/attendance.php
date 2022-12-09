<html>
    <head>
        <title>Attendance</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
        
<body>

            <form action="" method="post">
 	   <center> <h1 style="font-family: Times New Roman">UPLOAD ATTENDANCE</h1></center>
            <table class="table table-striped">
                
                <thead class="table-dark">
                    <th width="114"><span class="style7">REG NO.</span></th>
                    <th width="170"><span class="style7">NAME</span></th>
                    <th width="110"><span class="style7">INSTITUTIONAL EMAIL</span></th>
                    <th width="110"><span class="style7">PERSONAL EMAIL</span></th>
                    <th width="110"><span class="style7">MOBILE</span></th>
                    <th width="110"><span class="style7">ATTENDANCE</span></th>
                </thead>
                <?php
				    include "config.php";
				    extract($_POST);
				    $query = "select * from `students`";
				    $s = 0;
				    $result = mysqli_query($link,$query)or die("select error");
				    while($rec = mysqli_fetch_array($result))
				    {
					    $s = $s + 1;
					    echo ' <tr>
							  <td width="114">'.$rec["regno"].'</td>
							  <td width="152">'.$rec["name"].'</td>
                              <td width="152">'.$rec["iemail"].'</td>
                              <td width="152">'.$rec["pemail"].'</td>
                              <td width="130">'.$rec["mobile"].'</td>
							  <td width="130"><input type=checkbox name='.$rec["regno"].'onclick="getatt(this.checked)"/></td>
							</tr>';
				    }
			    ?>			
                <tr>
                <td colspan="3">
                    <input type="submit" class="btn btn-primary" value="Get Attendance" name="btnsubmit"/>
                    <a href="index.php" class="btn btn-dark">Back</a>
                </td>
                </tr>
            </table>
            </form>
        
    <?php
	if(isset($_POST["btnsubmit"]))
	{
		include "config.php";
		$query = "select * from attendance";
		$result = mysqli_query($link,$query)or die("select error");
		while($rec = mysqli_fetch_array($result))
		{
			$reg_no = $rec["regno"];
			if(isset($_POST[$reg_no]))
			{
				$query1 = "INSERT INTO  `attendance`(`reg_no`,   `attend`) VALUES('$reg_no','1')";
			}
			else
			{
				$query1 = "INSERT INTO  `attendance`(`reg_no` ,   `attend`) VALUES('$reg_no','0')";
			}
			mysqli_query($link,$query1)or die("insert error".$reg_no);
			print "<script>";
			print "alert('Attendance get successfully....');";
			print "self.location='attendance.php';";
			print "</script>";
		}
		
		
			
		
	}
?>
</body>
</html>