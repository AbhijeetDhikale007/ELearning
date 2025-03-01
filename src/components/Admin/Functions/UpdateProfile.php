<?php
$Login_file = 'C:\xampp\htdocs\ELearning\LoginID.php';
$DB_file = 'C:\xampp\htdocs\ELearning\src\components\dBconnection.php';

require $Login_file;
require $DB_file;

$Message = "Failed To Update Your Profile";

if(isset($_POST['editprofilelink']) && !empty($_POST['editprofilelink'])) {

    $editprofilelink = $_POST['editprofilelink'];
    
    $sql = "UPDATE admin SET profilelink = '$editprofilelink' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = "Your Profile Updated Successfully";
    }
}

if(isset($_POST['editname']) && !empty($_POST['editname'])) {

    $editname = $_POST['editname'];
    
    $sql = "UPDATE admin SET name = '$editname' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = "Your Profile Updated Successfully";
    }
}

if(isset($_POST['editusername']) && !empty($_POST['editusername'])) {

    $editusername = $_POST['editusername'];
    
    $sql = "UPDATE admin SET username = '$editusername' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = "Your Profile Updated Successfully";
    }
}

echo $Message;
?> 