<?php
$id = $_GET['id'];
include('db.php');
$result = mysqli_query($conn, "delete from user where id = $id");
if($result) {
    header('location: http://localhost/library management/index.php');
} else {
    echo "Something went wrong";
}
?>