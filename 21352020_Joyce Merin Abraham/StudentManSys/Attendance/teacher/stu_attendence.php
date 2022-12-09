<html>
    <head>
    <title>Attendance</title>
        <style type="text/css">
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
            font-weight: bold;
            font-family: "Roboto";
            font-size: 16px
            padding-top:30px;
        }
        -->
        </style>
    </head>

    <body>
        <table width="800" border="1" align="center">
            <tr>
                <td bordercolor="#330033" bgcolor="#CCCCFF">
                <h1 align="center"><strong><span class="style1">Attendance System</span></strong></h1>
                </td>
            </tr>
            <tr>
                <td bgcolor="pink">
                    <div align="center">
                    <?php 
                        include "menu.php";
                    ?> 
                    </div>       
                </td>
            </tr>
            <tr>
                <td>
                    <div align="center">
                    <form action="insertmember.php" method="post">
                        <table width="400" border="2" align="center" bordercolor="black" bgcolor="#CCCCFF" style="border-collapse:collapse" >
                            <tr>
                                <td colspan="2" bgcolor="#9999CC">
                                <div align="center"><span class="style2">Enter student information</span></div>
                                </td>
                            </tr>
                            <tr>
                                <td width="160"><span class="style6">Name</span></td>
                                <td width="222"><span class="style6"><input type="text" style="margin-bottom:10px"  name="Name" /></span></td>
                            </tr>
                            <tr>
                                <td><span class="style6">Register Number</span></td>
                                <td><span class="style6"><input type="text" style="margin-bottom:10px" name="Register_Number" /></span></td>
                            </tr>
                            <tr>
                                <td><span class="style6">Institutional Email</span></td>
                                <td><span class="style6"><input style="margin-bottom:10px" type="email" name="Institutional_Email" /></span></td>
                            </tr>
                            <tr>
                                <td><span class="style6">Personal Email</span></td>
                                <td><span class="style6"><input type="email" style="margin-bottom:10px" name="Personal_Email" /></span></td>
                            </tr>
                            <tr>
                                <td><span class="style6">Mobile</span></td>
                                <td><span class="style6"><input type="text" style="margin-bottom:10px" name="Mobile" /></span></td>
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
                </td>
            </tr>
        </table>
    </body>
</html>