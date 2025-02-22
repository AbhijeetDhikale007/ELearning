<?php
$Login_file = 'C:\x' . "ampp\htdocs\ELearning\LoginID.php";
$DB_file = 'C:\x' . "ampp\htdocs\ELearning\src\components\dBconnection.php";

require $Login_file;
require $DB_file;

if(isset($_POST['editprofilelink']) && isset($_POST['editname']) && isset($_POST['editemail']) && isset($_POST['editnumber']) && isset($_POST['editlocation']) && isset($_POST['editcollege'])) {
    
    $editprofilelink = $_POST['editprofilelink'];
    $editname = $_POST['editname'];
    $editemail = $_POST['editemail'];
    $editnumber = $_POST['editnumber'];
    $editlocation = $_POST['editlocation'];
    $editcollege = $_POST['editcollege'];
    
    $sql = "UPDATE students SET profileurl = '$editprofilelink', sname = '$editname', email = '$editemail', number = '$editnumber', address = '$editlocation', college = '$editcollege' WHERE id = '$Login_id'";
    
    if($conn->query($sql) == true) {
        echo "Your Profile Updated Successfully";
    } else {
        echo "Failed To Update Your Profile";
    }
}
?> 