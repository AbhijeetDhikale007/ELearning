<?php
$DB_file = 'C:\xampp\htdocs\ELearning\src\components\dBconnection.php';

require $DB_file;

if(isset($_POST['id']) && isset($_POST['editname']) && isset($_POST['editprofileurl']) && isset($_POST['editemail']) && isset($_POST['number']) && isset($_POST['editaddress']) && isset($_POST['editcollege'])) {
    
    $id = $_POST['id'];
    $editname = $_POST['editname'];
    $editprofileurl = $_POST['editprofileurl'];
    $editemail = $_POST['editemail'];
    $number = $_POST['number'];
    $editaddress = $_POST['editaddress'];
    $editcollege = $_POST['editcollege'];

    $sql = "UPDATE students SET sname = '$editname', profileurl = '$editprofileurl', email = '$editemail', number = '$number', address = '$editaddress', college = '$editcollege' WHERE id = '$id";
    
    if($conn->query($sql) == true) {
        echo "Student Edited Successfully";
    } else {
        echo "Failed To Edit Student";
    }
}
?>