<?php
$DB_file = 'C:\xampp\htdocs\ELearning\src\components\dBconnection.php';

require $DB_file;

if(isset($_POST['newtname']) && isset($_POST['newprofileurl']) && isset($_POST['newemail']) && isset($_POST['newprofession']) && isset($_POST['newpassword'])) {

    $newtname = $_POST['newtname'];
    $newprofileurl = $_POST['newprofileurl'];
    $newemail = $_POST['newemail'];
    $newprofession = $_POST['newprofession'];
    $newpassword = $_POST['newpassword'];

    $sql = "INSERT INTO instructor (tname, profile_pic, email, profession, password) VALUES ('$newtname', '$newprofileurl', '$newemail', '$newprofession', '$newpassword')";
    
    if($conn->query($sql) == true) {
        echo "New Instructor Added Successfully";
    } else {
        echo "Failed To Add New Instructor";
    }
}
?>