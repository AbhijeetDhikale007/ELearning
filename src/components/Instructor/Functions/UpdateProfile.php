<?php
$Login_file = 'C:\xampp\htdocs\ELearning\LoginID.php';
$DB_file = 'C:\xampp\htdocs\ELearning\src\components\dBconnection.php';

require $Login_file;
require $DB_file;

$Message = "Failed To Edit Instructor";
$Message_success = "Instructor Edited Successfully";

if(isset($_POST['edittname']) && !empty($_POST['edittname'])) {
    
    $edittname = $_POST['edittname'];

    $sql = "UPDATE teachers SET tname = '$edittname' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = $Message_success;
    }
}

if(isset($_POST['editprofileurl']) && !empty($_POST['editprofileurl'])) {
    
    $editprofileurl = $_POST['editprofileurl'];

    $sql = "UPDATE teachers SET profile_pic = '$editprofileurl' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = $Message_success;
    }
}

if(isset($_POST['editemail']) && !empty($_POST['editemail'])) {
    
    $editemail = $_POST['editemail'];

    $sql = "UPDATE teachers SET email = '$editemail' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = $Message_success;
    }
}

if(isset($_POST['editprofession']) && !empty($_POST['editprofession'])) {
    
    $editprofession = $_POST['editprofession'];

    $sql = "UPDATE teachers SET profession = '$editprofession' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = $Message_success;
    }
}

if(isset($_POST['editpassword']) && !empty($_POST['editpassword'])) {
    
    $editpassword = $_POST['editpassword'];

    $sql = "UPDATE teachers SET password = '$editpassword' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = $Message_success;
    }
}

echo $Message;
?>