<?php
$DB_file = 'C:\xampp\htdocs\ELearning\src\components\dBconnection.php';

require $DB_file;

$id = $_POST['id'];
$Message = "Failed To Edit Course";

if(isset($_POST['editcourse']) && !empty($_POST['editcourse'])) {
    
    $editcourse = $_POST['editcourse'];

    $sql = "UPDATE courses SET cname = '$editcourse' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = "Course Edited Successfully";
    }
}

if(isset($_POST['editImg']) && !empty($_POST['editImg'])) {
    
    $editImg = $_POST['editImg'];

    $sql = "UPDATE courses SET pictureurl = '$editImg' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = "Course Edited Successfully";
    }
}

if(isset($_POST['editvideo']) && !empty($_POST['editvideo'])) {
    
    $editvideo = $_POST['editvideo'];

    $sql = "UPDATE courses SET videourl = '$editvideo' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = "Course Edited Successfully";
    }
}

if(isset($_POST['editdetails']) && !empty($_POST['editdetails'])) {
    
    $editdetails = $_POST['editdetails'];

    $sql = "UPDATE courses SET cinfo = '$editdetails' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = "Course Edited Successfully";
    }
}

if(isset($_POST['editprize']) && !empty($_POST['editprize'])) {
    
    $editprize = $_POST['editprize'];

    $sql = "UPDATE courses SET prize = '$editprize' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = "Course Edited Successfully";
    }
}

if(isset($_POST['editdiscount']) && !empty($_POST['editdiscount'])) {
    
    $editdiscount = $_POST['editdiscount'];

    $sql = "UPDATE courses SET discount = '$editdiscount' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = "Course Edited Successfully";
    }
}

echo $Message;
?>