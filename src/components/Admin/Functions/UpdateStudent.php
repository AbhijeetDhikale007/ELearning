<?php
$DB_file = 'C:\x' . "ampp\htdocs\ELearning\src\components\dBconnection.php";

require $DB_file;

if(isset($_POST['id']) && isset($_POST['']) && isset($_POST['']) && isset($_POST['']) && isset($_POST['']) && isset($_POST['']) && isset($_POST[''])) {
    
    $id = $_POST['id'];
    $ = $_POST[''];
    $ = $_POST[''];
    $ = $_POST[''];
    $ = $_POST[''];
    $ = $_POST[''];
    $ = $_POST[''];

    $sql = "UPDATE students SET sname = '$', profileurl = '$', email = '$', number = '$', address = '$', college = '$' WHERE id = '$id";
    
    if($conn->query($sql) == true) {
        echo "Student Edited Successfully";
    } else {
        echo "Failed To Edit Student";
    }
}
?>