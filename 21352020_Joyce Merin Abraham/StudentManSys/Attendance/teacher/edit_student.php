<html>
    <head>
        <title>edit data</title>
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
      <center><div style="font-size:30px;font-weight:bolder;">Edit Data</div></center>
            <form class="form-inline" method="post" action="updatedata.php">
                <input type="number" class="form-control" placeholder="Enter the reg no" name="edit">
                <button type="submit" name="change" class="btn btn-primary">Edit Student</button>
            </form>
        </div>

        <table class="table table-warning table-striped">
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
                while($rec=mysqli_fetch_array($result)){
                    $s=$s+1;
                echo '
                    <tr>
                        <td>'.$rec["reg_no"].'</td>
                        <td>'.$rec["name"].'</td>
                        <td>'.$rec["inst_email"].'</td>
                        <td>'.$rec["per_email"].'</td>
                        <td>'.$rec["mobile"].'</td>
                    
                ';
                echo "<td><b><a href='updatedata.php?update={$rec['reg_no']}'>update</a></b></td>";
                echo "</tr>";
                }
            ?>

            

        </table>

    </body>
</html>