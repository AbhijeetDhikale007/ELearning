<?php
$DB_file = 'C:\x' . "ampp\htdocs\ELearning\src\components\dBconnection.php";

require $DB_file;

if(isset($_POST['id']) && isset($_POST['editcourse']) && isset($_POST['editImg']) && isset($_POST['editvideo']) && isset($_POST['editdetails']) && isset($_POST['editprize']) && isset($_POST['editdiscount'])) {
    
    $id = $_POST['id'];
    $editcourse = $_POST['editcourse'];
    $editImg = $_POST['editImg'];
    $editvideo = $_POST['editvideo'];
    $editdetails = $_POST['editdetails'];
    $editprize = $_POST['editprize'];
    $editdiscount = $_POST['editdiscount'];

    $sql = "UPDATE courses SET cname = '$editcourse', pictureurl = '$editImg', videourl = '$editvideo', cinfo = '$editdetails', prize = '$editprize', discount = '$editdiscount' WHERE id = '$id";
    
    if($conn->query($sql) == true) {
        echo "Course Edited Successfully";
    } else {
        echo "Failed To Edit Course";
    }
}
?>