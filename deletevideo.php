<?php

include('db/dbconnection.php');
$id = $_GET['a'];
$sqll = mysqli_query($con, "DELETE FROM video WHERE id='$id'");
if ($sqll) {
    echo "<script>alert('Successful');</script>";
    header('location:crudvideo.php');
} else {
    echo "<script>alert('Invalid Details');</script>";
    header('location:crudvideo.php');
}
?>

