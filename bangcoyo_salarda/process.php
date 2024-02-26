<?php
session_start();    
include("config.php");


if(isset($_POST["insertButton"])){

    $studentId = $_POST['studentId'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];

    $insert_query = "INSERT INTO `student_information`(`student_id`, `fname`, `mname`, `lname`, `address`, `birthday`) VALUES ('$studentId','$fname','$mname','$lname','$address','$birthday')";
    $insert_result = mysqli_query($con, $insert_query);

    if($insert_result){
        $_SESSION['status'] = "Successfully Submitted!";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
    }else{
        echo "Error";
    }
};





if(isset($_POST["updateButton"])){

    $id= $_POST["id"];
    $studentId = $_POST['studentId'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $birthday = $_POST['birthday'];
    $address = $_POST['address'];

    $update_query = "UPDATE `student_information` SET `student_id`='$studentId',`fname`='$fname',`mname`='$mname',`lname`='$lname',`address`='$address',`birthday`='$birthday' WHERE `id` = '$id'";
    $update_result = mysqli_query($con, $update_query);

    if($update_result){
        $_SESSION['status'] = "Update Successfully!";
        $_SESSION['status_code'] = "success";
        header("Location: index.php");
    }else{
        echo "Error";
    }
}
?>