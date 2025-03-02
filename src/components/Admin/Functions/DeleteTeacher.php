<?php
$DB_file = 'C:\xampp\htdocs\ELearning\src\components\dBconnection.php';

require $DB_file;

if(isset($_POST['id'])) {
    
    $id = $_POST['id'];

    $sql = "DELETE FROM teachers WHERE id='$id'";
    
    if($conn->query($sql) == true) {
        echo "Instructor Deleted Successfully";
    } else {
        echo "Failed To Delete Instructor";
    }
}
?>