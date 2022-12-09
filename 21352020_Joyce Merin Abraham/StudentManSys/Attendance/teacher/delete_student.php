<html>
  <head>
    <title>delete</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <style>
      form{
        float:right;
        padding-top:50px;
        padding-bottom:40px;
      }
    </style>
  </head>
  <body>
    <div class="container">
    <a href="students.php" style="float: right;margin-top:19px;color:black;text-decoration:none;font-size:17px">Back</a>
      <center><div style="font-size:30px;font-weight:bolder;">Delete Data</div></center>
      <form class="form-inline" method="post">
        <input type="number" name="delete" class="form-control" placeholder="Enter the reg no">
        <button type="submit" name="save" class="btn btn-primary">Delete</button>
      </form>
    </div>

    <table class="table table-success table-striped">
      <tr>
        <th>Registration Number</th>
        <th>Name</th>
        <th>Institutional Email</th>
        <th>Personal Email</th>
        <th>Mobile</th>
      </tr>
      <?php
        
          include 'z_db.php';
          $s=0;
          $sql="select * from `member` order by `member_id`";
          $result=mysqli_query($con,$sql) or die("select error");
          while($rec=mysqli_fetch_array($result))
          {
            $s=$s+1;
            echo '
            <tr>
              <td>'.$rec["reg_no"].'</td>
              <td>'.$rec["name"].'</td>
              <td>'.$rec["inst_email"].'</td>
              <td>'.$rec["per_email"].'</td>
              <td>'.$rec["mobile"].'</td>
            </tr>
            ';
          }
      ?>
    </table>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $reg = isset($_POST['delete']) ? $_POST['delete'] : '';

      include 'z_db.php';

      $sql = "delete from `member` where `reg_no`='$reg'";
      $result = mysqli_query($con, $sql) or die("select error");
      if ($result) {
        echo "Data deleted";
      } else {
        echo "Deletion failed";
      }
    }
      mysqli_close($con);

    ?>


  </body>
</html>

