<?php
// Include config file
require_once "config.php";
 
$name = $regno = $iemail= $pemail=$mobile="";
$name_err =$regno_err = $iemail_err= $pemail_err =$mobile_err ="";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){

    $input_regno = trim($_POST["regno"]);
    if(empty($input_regno)){
        $regno_err = "Please enter the mobile amount.";     
    } elseif(!ctype_digit($input_regno)){
        $regno_err = "Please enter a positive integer value.";
    } else{
        $regno = $input_regno;
    }
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate iemail
    $input_iemail = trim($_POST["iemail"]);
    if(empty($input_iemail)){
        $iemail_err = "Please enter an iemail.";     
    } else{
        $iemail = $input_iemail;
    }
    
    $input_pemail = trim($_POST["pemail"]);
    if(empty($input_pemail)){
        $pemail_err = "Please enter an iemail.";     
    } else{
        $pemail = $input_pemail;
    }
    // Validate mobile
    $input_mobile = trim($_POST["mobile"]);
    if(empty($input_mobile)){
        $mobile_err = "Please enter the mobile amount.";     
    } elseif(!ctype_digit($input_mobile)){
        $mobile_err = "Please enter a positive integer value.";
    } else{
        $mobile = $input_mobile;
    }
    
    
    if(empty($regno_err) && empty($name_err) && empty($iemail_err) && empty($pemail_err) && empty($mobile_err)){
       
        $sql = "INSERT INTO students (regno,name, iemail,pemail, mobile) VALUES (?,?,? ,?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "sssss",$param_regno, $param_name, $param_iemail,$param_pemail, $param_mobile);
            
            $param_regno = $regno;
            $param_name = $name;
            $param_iemail = $iemail;
            $param_pemail = $pemail;
            $param_mobile = $mobile;
            
            
            if(mysqli_stmt_execute($stmt)){
                
                header("location: index.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        
        mysqli_stmt_close($stmt);
    }
     
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">New Admission</h2>
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                            <label>Register Number</label>
                            <input type="number" name="regno" class="form-control <?php echo (!empty($regno_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $regno; ?>">
                            <span class="invalid-feedback"><?php echo $regno_err;?></span>
                        </div>
                        <div class="form-group">
                        <label>Name</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                        <label>Institutional Email</label>
                            <input type="text" name="iemail" class="form-control <?php echo (!empty($iemail_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $iemail; ?>">
                            <span class="invalid-feedback"><?php echo $iemail_err;?></span>
                        </div>
                        <div class="form-group">
                        <label>Personal Email</label>
                            <input type="text" name="pemail" class="form-control <?php echo (!empty($pemail_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $pemail; ?>">
                            <span class="invalid-feedback"><?php echo $pemail_err;?></span>
                        </div>
                        <div class="form-group">
                        <label>Mobile</label>
                            <input type="text" name="mobile" class="form-control <?php echo (!empty($mobile_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $mobile; ?>">
                            <span class="invalid-feedback"><?php echo $mobile_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>