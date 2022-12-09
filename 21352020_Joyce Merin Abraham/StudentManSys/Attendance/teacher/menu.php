<!-- <style type="text"/css>
    .menu{
        color: white;
        background-color: black;
        padding: 10px;
        font-size:1.3em;
        text-decoration:none;
    }
    .menu:hover{
        color:tomato;
        background-color: yellow;
        padding:10px;
        box-shadow:5px 4px 5px 1px;
    }
</style>

<ul style="list-style:none;display:inline-block">
	<li style="float:left">&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php" class="menu">Add Member</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
    <li style="float:left">&nbsp;&nbsp;&nbsp;&nbsp;<a href="getattendance.php" class="menu">Get Attendance</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
    <li style="float:left">&nbsp;&nbsp;&nbsp;&nbsp;<a href="viewmember.php" class="menu">View Member</a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
</ul> -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Static Navbar</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m-4">
    <nav width=100% class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
        <div class="container-fluid">
            <!-- <a href="#" class="navbar-brand">Brand</a> -->
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!-- <a href="#" class="nav-item nav-link active">Home</a> -->
                    <a href="student_list.php" class="nav-item nav-link">Add student</a>
                    <a href="getattendance.php" class="nav-item nav-link">Attendance</a>
                    
                    <!-- <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a> -->
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="index.php" class="nav-item nav-link">Back</a>
                </div>
            </div>
        </div>
    </nav>
</div>
</body>
</html>