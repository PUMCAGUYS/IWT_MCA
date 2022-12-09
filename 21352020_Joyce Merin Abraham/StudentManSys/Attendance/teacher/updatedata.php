


<html>
    <head>
    <title>Attendance</title>
  
        <style>
            td{
                color:#5B2C6F;
                padding-right:10px;
                font-weight: bold;
            }
            form{
                padding-top: 30px;
                padding-left:400px;
            }
            label{
                padding-top: 10px;
                margin-top:5px;
                padding-right: 30px;
                padding-bottom: 20px;
            }
            
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        
    </head>

    <body style="background-color:#D2B4DE;border:6px solid white">

    <?php
            include 'z_db.php';
            if(isset($_GET['submit'])){

                $registerno=$_GET['Register_Number'];
                $name=$_GET['Name'];
                $iemail=$_GET['Institutional_Email'];
                $pemail=$_GET['Personal_Email'];
                $mob=$_GET['Mobile'];

                $sql="update `member` set `reg_no`='$registerno' , `name`='$name' , `inst_email`='$iemail' , `per_email`='$pemail' , `mobile`='$mob' where `reg_no`='$registerno'";

                $result=mysqli_query($con,$sql) or die("select error");
            }
            $sql="select * from `member`";
            $result=mysqli_query($con,$sql);
            while($rec=mysqli_fetch_array($result)){
                
            }
        ?>
        <?php
            if(isset($_GET['update'])){
                $update=$_GET['update'];
                $query1="select * from `member` where `reg_no`='$update'";
                $result1=mysqli_query($con,$query1);
                echo "<center><h3>Edit student</h3></center>";
                while($row1=mysqli_fetch_array($result1)){
                    echo "<form class='form' method='get'>";
                    
                    
                    echo"<input class='input' type='hidden' name='Register_Number' value='{$row1['reg_no']}' />";
                    echo" <br />";
                    ?>
                    <table>
                        <tr>
                            <td><?php echo "<label>" . "Name:" . "</label>"; ?></td>
                            <td><?php echo"<input class='input' style='width:220px' type='text' name='Name' value='{$row1['name']}' />"?></td>
                            
                        </tr>
                        <tr>
                            <td><?php echo "<label>" . "Institutional Email" . "</label>"; ?></td>
                            <td><?php echo "<input style='width:220px' class='input' type='text' name='Institutional_Email' value='{$row1['inst_email']}' />"?></td>
                        </tr>
                        <tr>
                            <td><?php echo "<label>" . "Personal Email" . "</label>" ?></td>
                            <td><?php echo "<input style='width:220px;' class='input' type='text' name='Personal_Email' value='{$row1['per_email']}' />" ?></td>
                        </tr>
                        <tr>
                            <td><?php echo "<label>" . "Mobile" . "</label>" ?></td>
                            <td><?php echo "<input class='input' type='text' style='width:220px' name='Mobile' value='{$row1['mobile']}' " ?></td>
                        </tr>
                        <tr>
                            <td colspan=2><center><?php echo "<input type='submit' class='submit' name='submit' value='update'/>" ?></center></td>
                        </tr>
                    </table>
                    
                    <?php
                    // echo "<input class='submit' type='submit' name='submit' value='update' />";
                    echo "</form>";

                }

            }
            if (isset($_GET['submit'])) {
                echo '<div class="form" id="form3"><br><br><br><br><br><br>
                <Span>Data Updated Successfuly......!!</span></div>';
                }
        ?>
        <div class="clear"></div>
        </div>
        <div class="clear"></div>
        </div>
        </div><?php
        mysqli_close($con);
        ?>
    

    </body>
</html>