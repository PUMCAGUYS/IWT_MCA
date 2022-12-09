<?php
    include 'z_db.php';

?>

<html>
    <head>
        <title>Edit Student</title>
        <style></style>
    </head>
    <body>
        <div class="form">
            <h1>Update record</h1>
            <?php
                $status="";
                if(isset($_POST['new'])&& $_POST['new']==1){

                    $reg_no=$_REQUEST['reg_no'];
                    $name=$_REQUEST['name'];
                    $inst_email=$_POST['inst_email'];
                    $per_email=$_POST['per_email'];
                    $mobile=$_POST['mobile'];

                    $sql="update from `member` set `name`='".$name."' , `inst_email`='".$inst_email."' , `per_email='".$per_email."' , `mobile`='".$mobile."' where `reg_no`='".$reg_no."'";

                    mysqli_query($con, $sql) or die("select error");

                    $status="Record Updated Successfully<br>";

                
                }
                else{
                    ?>    
                    <div>
                        <form name="form" method="post" action="">
                            <input type="hidden" name="new" value="1"/>

                            <?php
                            if (isset($classname))
                                echo $classname;
                            ?>

                            <input name="reg_no" type="hidden" value="<?php echo $rec['reg_no'];?>"/>

                            <input type="text" name="name" placeholder="Enter name" required value="<?php echo $rec['name'];?>"/>

                            <input type="text" name="inst_email" placeholder="Enter email" required value="<?php echo $rec['inst_email'];?>"/>

                            <input type="text" name="per_email" placeholder="Enter personal email" required value="<?php echo $rec["per_email"];?>"/>

                            <input type="text" name="mobile" placeholder="Enter mobile no." required value="<?php echo $rec['mobile'];?>"/>

                            <input type="submit" name="submit" value="Update"/>
                            
                        </form>
                    </div>
                    
                }
            

        </div>
    </body>
</html>