<?php
include 'src/components/dBconnection.php';
include 'src/components/Icons.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if(!$result) {
    die("Query Failed: ". $conn->error);
}

$Students = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $Students[] = [
            // 'id' => $row['id'],
            'Name' => $row['sname'],
            // 'Img' => $row['profileurl'],
            'Email' => $row['email'],
            // 'Number' => $row['number'],
            // 'Location' => $row['location'],
            // 'College' => $row['college']
        ];
    }
}
?>

<div class='DashContent w-100% relative'>
    <h1 class='arsenal-sc'>Students</h1>
    <!-- <div class='flex justify-end w-94'>
        <button class='Button-AddCourse'>Add Student +</button>
    </div> -->
    <div class='flex flex-col gap-16px w-94'>
        <div class='CourseContainer flex justify-between p-2'>
            <p>Username</p>
            <p>Email</p>
            <p>Actions</p>
        </div>
        <?php foreach($Students as $students): ?>
            <div class='CourseContainer flex justify-between p-3'>
                <p><?= $students['Name'] ?></p>
                <p><?= $students['Email'] ?></p>
                <div class='flex gap-15px'>
                    <button><?php echo $Icon_Delete ?></button>
                    <button><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>