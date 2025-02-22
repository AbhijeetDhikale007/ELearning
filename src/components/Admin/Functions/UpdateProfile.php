<?php
$Login_file = 'C:\x' . "ampp\htdocs\ELearning\LoginID.php";
$DB_file = 'C:\x' . "ampp\htdocs\ELearning\src\components\dBconnection.php";

require $Login_file;
require $DB_file;

if(isset($_POST['editprofilelink']) && isset($_POST['editname']) && isset($_POST['editusername'])) {
    
    $editprofilelink = $_POST['editprofilelink'];
    $editname = $_POST['editname'];
    $editusername = $_POST['editusername'];
    
    $sql = "UPDATE admin SET profilelink = '$editprofilelink', name = '$editname', username = '$editusername' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        echo "Your Profile Updated Successfully";
    } else {
        echo "Failed To Update Your Profile";
    }
}
?> 