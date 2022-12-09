<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <style>
    form{
      margin-right:30px;
      margin-top:40px;
      float:right;
      padding-bottom:30px;
    }
    h3{
      padding-top:15px;
    }
  </style>
</head>
<body>
  
  <div class="container">
  <a href="students.php" style="float: right;margin-top:19px;color:black;text-decoration:none;font-size:17px">Back</a>
  <center><h3>Student Data</h3></center>
  
    <form class="form-inline" method="post">
      <input type="number" name="roll_no" class="form-control" placeholder="Search roll no..">
      <button type="submit" name="save" class="btn btn-primary">Search</button>
  </form>
  </div>

  <table class="table table-danger" style="border:5px solid white">
    <tr>
      <th>Registration Number</th>
      <th>Name</th>
      <th>Institutional Email</th>
      <th>Personal Email</th>
      <th>Phone Number</th>
    </tr>
    
    <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
          $reg = isset($_POST['roll_no']) ? $_POST['roll_no'] : '';

          include "z_db.php";
          $sql = "Select * from `member` where `reg_no`='$reg'";
          $result = mysqli_query($con, $sql) or die("select error");
          $i = 0;
          while ($row = mysqli_fetch_array($result)) {
    ?>
            <tr style="background-color: #82E0AA">
            <td><?php echo $row["reg_no"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["inst_email"]; ?></td>
            <td><?php echo $row["per_email"]; ?></td>
            <td><?php echo $row["mobile"]; ?></td>
            </tr>
          <?php
            $i++;
            
          }
          
          $reg='';
        }
        
      ?>
  

  <?php
		include "z_db.php";
		extract($_POST);
		$query = "select *from `member` order by `member_id`";
		$s = 0;
		$result = mysqli_query($con,$query)or die("select error");
		while($rec = mysqli_fetch_array($result))
		{
			$s = $s + 1;
			echo ' <tr class="<?php if(isset($classname)) echo $classname;?>">
						<td>'.$rec["reg_no"].'</td>
						<td>'.$rec["name"].'</td>
            <td>'.$rec["inst_email"].'</td>
            <td>'.$rec["per_email"].'</td>
						<td>'.$rec["mobile"].'</td>
            
						</tr>';
            
		}
		?>
    
        
  </table>
</body>
</html>

