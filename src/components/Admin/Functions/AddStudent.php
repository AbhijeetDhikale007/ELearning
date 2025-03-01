<?php
$DB_file = 'C:\xampp\htdocs\ELearning\src\components\dBconnection.php';

require $DB_file;

if(isset($_POST['newsname']) && isset($_POST['newprofileurl']) && isset($_POST['newemail']) && isset($_POST['newnumber']) && isset($_POST['newaddress']) && isset($_POST['newcollege']) && isset($_POST['newpassword'])) {

    $newsname = $_POST['newsname'];
    $newprofileurl = $_POST['newprofileurl'];
    $newemail = $_POST['newemail'];
    $newnumber = $_POST['newnumber'];
    $newaddress = $_POST['newaddress'];
    $newcollege = $_POST['newcollege'];
    $newpassword = $_POST['newpassword'];

    $sql = "INSERT INTO students (sname, profileurl, email, number, address, college, password) VALUES ('$newsname', '$newprofileurl', '$newemail', '$newnumber', '$newaddress', '$newcollege', '$newpassword')";
    
    if($conn->query($sql) == true) {
        echo "New Student Added Successfully";
    } else {
        echo "Failed To Add New Student";
    }
}
?> 