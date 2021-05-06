<?php
include '../includes/connect.php';
$success=false;

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Administrator' AND not deleted;");
$result2 = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Customer' AND not deleted;");
$result3 = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='Delivery-man' AND not deleted;");

$row= mysqli_num_rows($result);
$row2= mysqli_num_rows($result2);
$row3= mysqli_num_rows($result3);

$data= mysqli_fetch_assoc($result);
$data2= mysqli_fetch_assoc($result2);
$data3= mysqli_fetch_assoc($result3);

if ($row>0)
{
    $user_id = $data['id'];
    $name = $data['name'];
    $role= $data['role'];

    session_start();
    $_SESSION['admin_sid']=session_id();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['role'] = $role;
    $_SESSION['name'] = $name;

    header("location: ../admin-page.php");
}

elseif ($row2>0)
{
    $user_id = $data2['id'];
    $name = $data2['name'];
    $role= $data2['role'];

    session_start();
    $_SESSION['customer_sid']=session_id();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['role'] = $role;
    $_SESSION['name'] = $name;
    header("location: ../cus-page.php");
}

elseif ($row3>0)
{
    $user_id = $data3['id'];
    $name = $data3['name'];
    $role= $data3['role'];

    session_start();
    $_SESSION['del_man_sid']=session_id();
    $_SESSION['user_id'] = $user_id;
    $_SESSION['role'] = $role;
    $_SESSION['name'] = $name;
    header("location: ../del-man-page.php");
}


else
{

    header("location: ../login.php");
}

?>
