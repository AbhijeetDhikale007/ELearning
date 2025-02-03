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
            'id' => $row['id'],
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
                    <button class='DeleteStudents<?= $students['id']; ?>'><?php echo $Icon_Delete ?></button>
                    <button class='EditStudents<?= $students['id']; ?>'><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class='DeleteChange DeleteChangeStudents flex items-center justify-center absolute w-100 h-100'>
    <form action="adminDash.php" method="post">
        <div class='flex w-100 items-end'>
                <button class='CloseButtonCourses'><?php echo $Icon_Close; ?></button>
        </div>
        <div>
            <label for="delete">Type 'delete' to delete.</label>
            <input type="text" name="delete">
        </div>
        <div class='items-center'>
            <button class='submitButton' type="submit">Delete</button>
        </div>
    </form>
</div>

<script>
    // const EditButtonCourses = document.querySelector('.EditButtonCourses');
    // const CloseButtonCourses = document.querySelector('.CloseButtonCourses');

    <?php foreach($Students as $students): ?>
    const DeleteStudents<?= $students['id']; ?> = document.querySelector('.DeleteStudents<?= $students['id']; ?>');
    <?php endforeach; ?>

    // const Courses = document.querySelector('.CoursesChange');
    const DeleteChangeStudents = document.querySelector('.DeleteChangeStudents');

    // EditButtonCourses.addEventListener('click', ()=> {
    //     Courses.classList.add('Active');
    // });

    // CloseButtonCourses.addEventListener('click', ()=> {
    //     Courses.classList.remove('Active');
    // });

    <?php foreach($Students as $students): ?>
    DeleteStudents<?= $students['id']; ?>.addEventListener('click', ()=> {
        DeleteChangeStudents.classList.add('Active');
    });
    <?php endforeach; ?>

    // CloseButtonCourses.addEventListener('click', ()=> {
    //     Delete.classList.remove('Active');
    // });
</script>