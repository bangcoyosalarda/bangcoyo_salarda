<?php session_start();
include ("config.php");



$id = $_POST['id'];
$student_id= $_POST['student_id'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$birthday = $_POST['birthday'];
$address = $_POST['address'];



$query = "DELETE FROM student_information WHERE `id`='$id'"; 
$result = mysqli_query( $con, $query);

if($result){
    $_SESSION['status'] = "Successfully Deleted";
    $_SESSION['status_code'] = "success";
    header("Location: index.php? msg=Successfully Deleted");

}else{
echo "Error";
}

?>