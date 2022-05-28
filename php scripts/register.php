<?php
include 'includes/dbh_inc.php';
include 'includes/auth_inc.php';


// database connectivity
$conn = get_con();
$chk = register($conn);

if($chk == 1) 
    echo json_encode(array("statusCode"=>200));
else if($chk == 2) 
    echo json_encode(array("statusCode"=>201));
else if($chk == 5)
    echo json_encode(array("statusCode"=>205));

//close_con($conn);
