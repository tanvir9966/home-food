<?php
include '../includes/connect.php';
$status = $_POST['status'];
$id = $_POST['id'];

$sql = "UPDATE orders SET status='$status' WHERE id=$id;";
$con->query($sql);

if (isset($_SESSION['admin_sid']))
    header("location: ../all-orders.php");
else
    header("location: ../del-man-page.php");

?>
