<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">

		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

		<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
</head>
<script type="text/javascript">
	function getatt(value)
	{
		if(value == true)
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) - 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) + 1;
		}
		else
		{
			document.getElementById("txtAbsent").value = parseInt(document.getElementById("txtAbsent").value) + 1;
			document.getElementById("txtPresent").value = parseInt(document.getElementById("txtPresent").value) - 1;
		}
	}
</script>

    <table width=100%>
	<h2 align="center" style="color:black;padding-bottom:20px"><strong><span>Record Attendance</span></strong></h2>
        <tr>
            <td>
                <form action="getattendance1.php" method="post">
                    <table style="margin-left:10px" class="table table-dark table-striped" style="border-collapse:collapse" >
            	        <tr>
						
                	    <td style="padding-left:30px"> Select date : 
						
                            <?php 
				 		        $dt = getdate();
							    $day = $dt["mday"];
							    $month = date("m");
							    $year = $dt["year"];
							
							    echo "<select name='cdate'>";
							    for($a=1;$a<=31;$a++)
							    {
								    if($day == $a)
									    echo "<option value='$a' selected='selected'>$a</option>";
								    else
									    echo "<option value='$a' >$a</option>";
							    }
							    echo "</select><select name='cmonth'>";
							    for($a=1;$a<=12;$a++)
							    {
								    if($month == $a)
									    echo "<option value='$a' selected='selected'>$a</option>";
								    else
									    echo "<option value='$a' >$a</option>";
							    }
							    echo "</select><select name='cyear'>";
							    for($a=2010;$a<=$year;$a++)
							    {
								    if($year == $a)
									    echo "<option value='$a' selected='selected'>$a</option>";
								    else
									    echo "<option value='$a' >$a</option>";
							    }
							    echo "</select>";
						    ?> 
							                   
                        </td>
						
						<td colspan=2 style="padding-left:30px"> Select course:
                    <?php

                    
                    $courses = array("INTERNET AND WEB TECHNOLOGIES", "SOFTWARE ENGINEERING", "INTERNET AND WEB TECHNOLOGIES LAB", "DATABASE FOR BIG DATA", "MANAGEMENT AND CONCEPT STRATEGIES", "MINI PROJECT");
                    echo "<select name='course'>";
                    foreach($courses as $corse){

                        echo '<option value="' . $corse . '">' . $corse . '</option>';

                        }

                        echo'</select>'
                    ?>
					<a href="students.php" style="float:right;margin-right:18px;text-decoration:none;color:white">Back</a>
                    </td>
                    </tr>
                </table>
				
    <table class="table table-dark" align="left" style="margin-left:20px;" style="border-collapse:collapse;"> 
	
	<tr>
								<th>Registration Number</th>
                                <th>Name</th>
                                <th>Attendance</th>
                            </tr>

	<?php
		include "z_db.php";
		extract($_POST);
		$query = "select *from `member` order by `member_id`";
		$s = 0;
		$result = mysqli_query($con,$query)or die("select error");
		while($rec = mysqli_fetch_array($result))
		{
			$s = $s + 1;
			echo ' <tr>
						<td width="114">'.$rec["reg_no"].'</td>
						<td width="152">'.$rec["name"].'</td>
						<td width="110"><input type=checkbox name='.$rec["member_id"].' onclick="getatt(this.checked);"/></td>
						</tr>';
		}
		?>			
        <tr>
        <td colspan=6>
            <div align="center">
            <input type="submit" value="Get Attendance" name="btnsubmit"/>
            </div>
        </td>
        </tr>
        </table>
        </form>
   
	<table   style="margin-left:35px"" style="border-collapse:collapse;">
            	<tr>
                	<td> Total Absent : <input type="text" id="txtAbsent" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
                <tr>
                	<td> Total Present : <input type="text" id="txtPresent" value="0" size="10"  disabled="disabled"/></td>
                </tr>
                <tr>
                	<td> Total Strength : <input type="text" id="txtStrength" value="<?php print $s; ?>" size="10" disabled="disabled"/></td>
                </tr>
             </table>

</body>
</html>