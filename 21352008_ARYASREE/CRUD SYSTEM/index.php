<!doctype html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

    
    <head>
<body>
<script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
            <div class="navbar">
        <a href="attendance.php" class="btn btn-success"><i class="fa fa-plus"></i> Attendance</a>
        <a href="create.php" class="btn btn-success"><i class="fa fa-plus"></i> Add New Student</a>
        </div>
            <center>
        <h2 style="font-family:Times New Roman">DEPARTMENT OF COMPUTER SCIENCE</h2>
        <H1 style="font-family: fantasy">MCA</h1>
        <form method="POST">
            <div>
                <label for='reg'>Register No:</label>
                <input type='text' id="myInput"  onkeyup="myFunction()" name='regno' maxlength="8" required/>
            </div>
            <br>
            
            <input class="btn btn-success" type="reset" value="Reset">
        </form> <br>
        <?php
                    
                    require_once "config.php";
                    
                    $sql = "SELECT * FROM students";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped" id="myTable"> ';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Register no</th>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Institutional Email</th>";
                                        echo "<th>Personal Email</th>";
                                        echo "<th>Mobile</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['regno'] . "</td>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['iemail'] . "</td>";
                                        echo "<td>" . $row['pemail'] . "</td>";
                                        echo "<td>" . $row['mobile'] . "</td>";
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View " data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update " data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    
                    mysqli_close($link);
                    ?>
                </div>
            
                <script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }       
        }
        }
</script>
</body>
</html>