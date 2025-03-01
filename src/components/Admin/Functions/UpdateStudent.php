<?php
$DB_file = 'C:\xampp\htdocs\ELearning\src\components\dBconnection.php';

require $DB_file;

$id = $_POST['id'];
$Message = "Failed To Edit Student";

if(isset($_POST['editsname']) && !empty($_POST['editsname'])) {
    
    $editsname = $_POST['editsname'];

    $sql = "UPDATE students SET sname = '$editsname' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = "Student Edited Successfully";
    }
}

if(isset($_POST['editprofileurl']) && !empty($_POST['editprofileurl'])) {
    
    $editprofileurl = $_POST['editprofileurl'];

    $sql = "UPDATE students SET profileurl = '$editprofileurl' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = "Student Edited Successfully";
    }
}

if(isset($_POST['editemail']) && !empty($_POST['editemail'])) {
    
    $editemail = $_POST['editemail'];

    $sql = "UPDATE students SET email = '$editemail' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = "Student Edited Successfully";
    }
}

if(isset($_POST['editnumber']) && !empty($_POST['editnumber'])) {
    
    $editnumber = $_POST['editnumber'];

    $sql = "UPDATE students SET number = '$editnumber' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = "Student Edited Successfully";
    }
}

if(isset($_POST['editaddress']) && !empty($_POST['editaddress'])) {
    
    $editaddress = $_POST['editaddress'];

    $sql = "UPDATE students SET address = '$editaddress' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = "Student Edited Successfully";
    }
}

if(isset($_POST['editcollege']) && !empty($_POST['editcollege'])) {
    
    $editcollege = $_POST['editcollege'];

    $sql = "UPDATE students SET college = '$editcollege' WHERE id = '$id'";
    
    if($conn->query($sql) == true) {
        $Message = "Student Edited Successfully";
    }
}

echo $Message;
?>