<?php
include "includes/dbh_inc.php";
$con = get_con();
session_start();

$email = $_SESSION['email'];

//$cmd = "SELECT image_name FROM users WHERE email = '$email'";
$cmd = "SELECT * FROM users WHERE email = '$email'";
$res = mysqli_query($con, $cmd);
$data = mysqli_fetch_array($res);
$img = $data['image_name'];
//$field = mysqli_fetch_field($res);
// $field = get_result()->fetch_object()->image_name;
// $data = array("src" => $field->image_name);
echo json_encode(array("img" => $img));

