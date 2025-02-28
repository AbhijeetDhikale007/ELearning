<?php
$DB_file = 'C:\xampp\htdocs\ELearning\src\components\dBconnection.php';

require $DB_file;

if(isset($_POST['newcourse']) && isset($_POST['newImg']) && isset($_POST['newvideo']) && isset($_POST['newdetails']) && isset($_POST['newprize']) && isset($_POST['newdiscount'])) {
    
    $newcourse = $_POST['newcourse'];
    $newImg = $_POST['newImg'];
    $newvideo = $_POST['newvideo'];
    $newdetails = $_POST['newdetails'];
    $newprize = $_POST['newprize'];
    $newdiscount = $_POST['newdiscount'];

    $sql = "INSERT INTO courses (cname, pictureurl, videourl, cinfo, prize, discount) VALUES ('$newcourse', '$newImg', '$newvideo', '$newdetails', '$newprize', '$newdiscount')";
    
    if($conn->query($sql) == true) {
        echo "New Course Added Successfully";
    } else {
        echo "Failed To Add New Course";
    }
}
?> 