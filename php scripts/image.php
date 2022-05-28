<?php

if(isset($_FILES['my_img'])) {
   include "includes/dbh_inc.php";
    $img_name = $_FILES['my_img']['name'];
    $img_size= $_FILES['my_img']['size'];
    $tmp_name = $_FILES['my_img']['tmp_name'];
    $error = $_FILES['my_img']['error']; //tmp is keyword

    if($error === 0) {
        if($img_size > 5000000) {
            $err_msg = "ERR::Image Size should be less than <5MB";
            $error = array("error" => 1, "err_msg" => $err_msg);
            echo json_encode($error);
            exit();
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION); //get extension of the img
            $img_ex_lc = strtolower($img_ex);
            $valid_ex = array("jpeg", "jpg", "png", "webp");
            if(in_array($img_ex_lc, $valid_ex)) {
               $img_up_path = "../data/uploads/".$img_name;
               move_uploaded_file($tmp_name, $img_up_path);
               $con = get_con();
                session_start();
              $email = $_SESSION['email'];
               //$cmd = "INSERT INTO `kanban`.`users` (`image`) VALUES ('$img_name')";
             //$cmd = "UPDATE `kanban`.`users` SET `image`='$img_name' WHERE `email` = $email'";
             $cmd = "UPDATE users SET image_name ='$img_name' WHERE email='$email'";
               mysqli_query($con, $cmd);
               $res = array("error" => 0, "src" => $img_name);
               echo json_encode($res);
               exit();

            } else {
                $err_msg = "ERR::Invalid image format";
                $error = array("error" => 1, "err_msg" => $err_msg);
                echo json_encode($error);
                exit();
            }
        }

    } else {
        $err_msg = "ERR::Connection Error check your internet";
        $error = array("error" => 1, "err_msg" => $err_msg);
        echo json_encode($error);
        exit();
    }
}