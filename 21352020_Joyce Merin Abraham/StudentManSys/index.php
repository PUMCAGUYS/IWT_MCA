<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="index.css">
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <title>Student Login</title>  
    </head>
    <body>
        <div class="brs">
            <div class="l-form">
            <div class="shape1"></div>
            <div class="shape2"></div>
            <div class="form">
                
                <form class="form__content" action="login.php" method="post">
                    <div class="sidenav">
                        <div class="login-main-text">
                            <h1 class="form__title" style="margin-top: 0px;">Login<span style="font-size: 25px;margin: 12px;">Student</span></h1>
                            <a href="admin.php" class="form__forgot">Click here for admin</a>
                        </div>
                    </div>
                        <div class="main">
                            <div class="col-md-6 col-sm-12">
                                <div class="login-form">
                                    <?php if (isset($_GET['error'])) { ?>
                                    <p class="error" style="color: white;text-align: center;background: #ff8080;padding: 10px;border-radius: 5px;"><?php echo $_GET['error']; ?></p>
                                    <?php } ?>

                                    <div class="form__div form__div-one" style="margin-top: 45px;">
                                        <div class="form__icon">
                                            
                                        </div>

                                        <div class="form__div-input">
                                            <i class='bx bx-user'></i>
                                            <label for="" class="form__label">Username</label>
                                            <input type="text" class="form__input" required name="uname">
                                        </div>
                                    </div>

                                    <div class="form__div">
                                        <div class="form__icon">
                                            
                                        </div>

                                        <div class="form__div-input">
                                            <i class='bx bx-lock' ></i>
                                            <label for="" class="form__label">Password</label>
                                            <input type="password" class="form__input" required  name="password">
                                        </div>
                                    </div>
                                    <a href="#" class="form__forgot">Forgot Password?</a>

                                    <input type="submit" class="form__button btn-black" value="Login">
                                </div>
                            </div>  
                        </div> 
                </form>
            </div>
        </div>
        </div>
        <script src="main.js"></script>
        <script type="text/javascript">
            setTimeout(function(){
        document.querySelector('.error').style.display = 'none';
      },3000);
        </script>
    </body>
</html>