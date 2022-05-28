<?php
include 'includes/dbh_inc.php';
include 'includes/auth_inc.php';
//include 'includes/share_var_inc.php';

$conn = get_con();
$chk = login($conn);
if($chk == 1) 
    echo json_encode(array("statusCode"=>200));
else if($chk == 2) 
    echo json_encode(array("statusCode"=>201));
//close_con($conn);