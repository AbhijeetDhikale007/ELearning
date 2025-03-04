<?php
$DB_file = 'C:\xampp\htdocs\ELearning\src\components\dBconnection.php';

require $DB_file;

$id = $_POST['id'];
$Message = "Failed To Edit Instructor";
$Message_success = "Instructor Edited Successfully";

if(isset($_POST['edittname']) && !empty($_POST['edittname'])) {
    
    $edittname = $_POST['edittname'];

    $sql = "UPDATE instructor SET tname = '$edittname' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = $Message_success;
    }
}

if(isset($_POST['editprofileurl']) && !empty($_POST['editprofileurl'])) {
    
    $editprofileurl = $_POST['editprofileurl'];

    $sql = "UPDATE instructor SET profile_pic = '$editprofileurl' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = $Message_success;
    }
}

if(isset($_POST['editemail']) && !empty($_POST['editemail'])) {
    
    $editemail = $_POST['editemail'];

    $sql = "UPDATE instructor SET email = '$editemail' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = $Message_success;
    }
}

if(isset($_POST['editprofession']) && !empty($_POST['editprofession'])) {
    
    $editprofession = $_POST['editprofession'];

    $sql = "UPDATE instructor SET profession = '$editprofession' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = $Message_success;
    }
}

if(isset($_POST['editpassword']) && !empty($_POST['editpassword'])) {
    
    $editpassword = $_POST['editpassword'];

    $sql = "UPDATE instructor SET password = '$editpassword' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = $Message_success;
    }
}

echo $Message;
?>