<?php
$Login_file = 'C:\xampp\htdocs\ELearning\LoginID.php';
$DB_file = 'C:\xampp\htdocs\ELearning\src\components\dBconnection.php';

require $Login_file;
require $DB_file;

$Message = "Failed To Update Your Profile";

if(isset($_POST['editprofilelink']) && !empty($_POST['editprofilelink'])) {
    
    $editprofilelink = $_POST['editprofilelink'];
    
    $sql = "UPDATE students SET profileurl = '$editprofilelink' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = "Your Profile Updated Successfully";
    }
}

if(isset($_POST['editname']) && !empty($_POST['editname'])) {
    
    $editname = $_POST['editname'];
    
    $sql = "UPDATE students SET sname = '$editname' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = "Your Profile Updated Successfully";
    }
}

if(isset($_POST['editemail']) && !empty($_POST['editemail'])) {
    
    $editemail = $_POST['editemail'];
    
    $sql = "UPDATE students SET email = '$editemail' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = "Your Profile Updated Successfully";
    }
}

if(isset($_POST['editnumber']) && !empty($_POST['editnumber'])) {
    
    $editnumber = $_POST['editnumber'];
    
    $sql = "UPDATE students SET number = '$editnumber' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = "Your Profile Updated Successfully";
    }
}

if(isset($_POST['editlocation']) && !empty($_POST['editlocation'])) {
    
    $editlocation = $_POST['editlocation'];
    
    $sql = "UPDATE students SET address = '$editlocation' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = "Your Profile Updated Successfully";
    }
}

if(isset($_POST['editcollege']) && !empty($_POST['editcollege'])) {
    
    $editcollege = $_POST['editcollege'];
    
    $sql = "UPDATE students SET college = '$editcollege' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = "Your Profile Updated Successfully";
    }
}

if(isset($_POST['editpassword']) && !empty($_POST['editpassword'])) {
    
    $editpassword = $_POST['editpassword'];
    
    $sql = "UPDATE students SET password = '$editpassword' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        $Message = "Your Profile Updated Successfully";
    }
}

echo $Message;
?> 