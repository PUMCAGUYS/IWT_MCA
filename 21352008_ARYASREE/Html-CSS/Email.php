    <!DOCTYPE HTML>  
    <html>
        <head>
        <style>
            .error {color: #FF0000;}
            </style>
        </head>
    <body>  

    <?php
    
            $emailErr = "";
            $email = "";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
                }
            }
        }
                
            

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>

    <h2>PHP Email Validation</h2>
       
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
    
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">  
    </form>

    <?php

        
        echo $email;
        echo "<br>";

    ?>

    </body>
    </html>