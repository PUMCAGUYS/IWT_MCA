<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">

		<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

		<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>
    </head>
    <body>
        

        <form action="getmarks.php" method="post">
        <a style="float:right" href="index.php" class="nav-item nav-link">Back</a>
            <h3 class="text-center">Record Marks</h3>
            <table width=100% class="table table-primary table-striped" align="left" style="margin-left:20px;padding-right:20px;border:1px solid black" style="border-collapse:collapse;"> 
            
               
                    
                <tr>
                    <td colspan=2 style="padding-left:30px"> Select course:
                    <?php

                    
                    $courses = array("INTERNET AND WEB TECHNOLOGIES", "SOFTWARE ENGINEERING", "INTERNET AND WEB TECHNOLOGIES LAB", "DATABASE FOR BIG DATA", "MANAGEMENT AND CONCEPT STRATEGIES", "MINI PROJECT");
                    echo "<select name='course'>";
                    foreach($courses as $corse){

                        echo '<option value="' . $corse . '">' . $corse . '</option>';

                        }

                        echo'</select>'
                    ?>
                    </td>

                    <td colspan=2> Select faculty:
                    <?php

                    
                    $faculties = array("DR. SUKHVINDER SINGH", "Mr.R.P.SEENIVASAN", "DR.R.SUNITHA", "DR.SURESH JOSEPH");
                    echo "<select name='faculty'>";
                    foreach($faculties as $fac){

                        echo '<option value="' . $fac . '">' . $fac . '</option>';

                        }

                        echo'</select>'
                    ?>
                    </td>
                </tr>

                <tr style="padding-left:20px;padding-right:30px">
                    <th>Registration Number</th>
                    <th>Name</th>
                    <th>Marks</th>
            
                </tr>
                <?php
                include "z_db.php";
                extract($_POST);
                $query = "select *from `member` order by `member_id`";
                $s = 0;
                $result = mysqli_query($con,$query)or die("select error");
                while($rec = mysqli_fetch_array($result))
                {
                    $s = $s + 1;
                    echo ' <tr>
                                <td width="200">'.$rec["reg_no"].'</td>
                                <td width="250">'.$rec["name"].'</td>
                                <td width="300">
                                    <input type=number name="mark"/>
                                        
                                </td>
                                
                            </tr>';
                }
                ?>
                <tr>
                <td colspan=6>
                    <div align="center">
                    <input type="submit" value="RECORD" name="btnrecord"/>
                    </div>
                </td>
                </tr>			
            
            </table>
        </form>
    </body>
</html>
