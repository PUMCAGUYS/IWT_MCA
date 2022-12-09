<?php
include_once 'z_db.php';
$sql = "DELETE  FROM `member` WHERE member_id='" . $_GET["member_id"] . "'";
if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>