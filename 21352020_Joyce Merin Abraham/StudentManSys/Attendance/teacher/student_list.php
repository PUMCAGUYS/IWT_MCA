<html>
    <head>
    <title>Attendance</title>
        <!-- <style type="text/css">
        <!--
        .style1 
        {
            font-family: "Roboto";
            font-size: 40px;
            color: black;
            
        }
        .style2 
        {
            font-weight: bold;
            font-family: "Roboto";
            font-size: 18px;
            color: black;
        }
        .style6 
        {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }
        }
        -->

        <style>
            td{
                color:#5B2C6F;
                padding-right:10px;
                font-weight: bold;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        
    </head>

    <body style="background-color:#D2B4DE;border:6px solid white">
        
    
        <table class="table"  align="center" style="margin-top:100px">
            
            
            <tr>
                
                    <div align="center">
                    <form action="insertmember.php" method="post" style="background-color:#D2B4DE" style="color:white">
                    <a href="students.php" style="text-decoration:none;color:#4A235A;float:right;font-weight:bold;margin-right:20px;margin-top:10px;font-size:20px">Back</a>
                        <table  align="center"  style="border-collapse:collapse" >
                            <tr>
                                <td colspan="2" >
                                    <center><h3 style="color:#4A235A;font-weight:bolder">Add student</h3></center>
                                </td>
                            </tr>
                            <tr>
                            <div class="form-outline">
                                <td style="padding-left:25px"><span class="form-label">Name</span></td>
                                <td width="222"><span class="style6"><input type="text" class="form-control form-control-lg"  name="Name" /></span></td>
                            </div>  
                            </tr>
                            <tr>
                                <td><span class="form-label" style="padding-left:25px">Register Number</span></td>
                                <td style="margin-right:25px"><span class="style6" style="margin-right:25px"><input   type="text" class="form-control form-control-lg"  name="Register_Number" /></span></td>
                            </tr>
                            <tr>
                                <td><span style="padding-left:25px" class="form-label">Institutional Email</span></td>
                                <td><span class="style6"><input  type="email" class="form-control form-control-lg" name="Institutional_Email" /></span></td>
                            </tr>
                            <tr>
                                <td><span style="padding-left:25px" class="form-label">Personal Email</span></td>
                                <td><span class="style6"><input type="email" class="form-control form-control-lg" name="Personal_Email" /></span></td>
                            </tr>
                            <tr>
                                <td><span style="padding-left:25px" class="form-label">Mobile</span></td>
                                <td><span class="style6"><input type="text" style="margin-bottom:10px" class="form-control form-control-lg" name="Mobile" /></span></td>
                            </tr>
                            <tr>
                                <td colspan="2"><div align="center">
                                <input type="submit" value="Add Member" name="btnsubmit"/>
                                &nbsp;&nbsp;
                                <input type="reset" value="Reset" name="btnreset"/>
                                </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    </div>
               
            </tr>
        </table>

    </body>
</html>