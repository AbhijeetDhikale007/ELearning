<?php
include 'src/components/dBconnection.php';
include 'src/components/Icons.php';

$sql = "SELECT * FROM courses";
$result = $conn->query($sql);

if(!$result) {
    die("Query Failed: ". $conn->error);
}

$Courses = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $Courses[] = [
            // 'id' => $row['id'],
            'Name' => $row['cname'],
            // 'img' => $row['pictureurl'],
            // 'video' => $row['videourl'],
            // 'Info' => $row['cinfo'],
            // 'Prize' => $row['prize'],
            // 'Discount' => $row['discount']
        ];
    }
}
?>

<div class='DashContent w-100% relative'>
    <h1 class='arsenal-sc'>Courses</h1>
    <div class='flex justify-end w-94'>
        <button class='EditButtonCourses Button-AddCourse'>Add Course +</button>
    </div>
    <div class='flex flex-col gap-16px w-94'>
        <?php foreach($Courses as $courses): ?>
            <div class='CourseContainer flex justify-between p-3'>
                <p><?= $courses['Name'] ?></p>
                <div class='flex gap-15px'>
                    <button class='DeleteButtonCourses'><?php echo $Icon_Delete ?></button>
                    <button><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<div class='CoursesChange flex items-center justify-center absolute w-100 h-100'>
    <form action="adminDash.php" method="post">
        <div class='flex w-100 items-end'>
                <button class='CloseButtonCourses'><?php echo $Icon_Close; ?></button>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="course">Course Name</label>
                <input type="text" name="course" required>
            </div>
            <div>
                <label for="Img">Picture url</label>
                <input type="text" name="Img" required>
            </div>
            <div>
                <label for="video">Video url</label>
                <input type="text" name="video" required>
            </div>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="details">Course Description</label>
                <input type="text" name="details" required>
            </div>
            <div>
                <label for="prize">Prize</label>
                <input type="number" name="prize" required>
            </div>
            <div>
                <label for="discount">Discount</label>
                <input type="number" name="discount" required>
            </div>
        </div>
        <div class='items-center'>
            <button class='submitButton' type="submit">Submit</button>
        </div>
    </form>
</div>

<div class='DeleteChange flex items-center justify-center absolute w-100 h-100'>
    <form action="adminDash.php" method="post">
        <div class='flex w-100 items-end'>
                <button class='CloseButtonCourses'><?php echo $Icon_Close; ?></button>
        </div>
        <div>
            <label for="delete">Type 'delete' to delete.</label>
            <input type="text" name="delete" required>
        </div>
        <div class='items-center'>
            <button class='submitButton' type="submit">Delete</button>
        </div>
    </form>
</div>

<script>
    const EditButtonCourses = document.querySelector('.EditButtonCourses');
    const CloseButtonCourses = document.querySelector('.CloseButtonCourses');
    const DeleteButtonCourses = document.querySelector('.DeleteButtonCourses');
    const Courses = document.querySelector('.CoursesChange');
    const Delete = document.querySelector('.DeleteChange');

    EditButtonCourses.addEventListener('click', ()=> {
        Courses.classList.add('Active');
    });

    CloseButtonCourses.addEventListener('click', ()=> {
        Courses.classList.remove('Active');
    });

    DeleteButtonCourses.addEventListener('click', ()=> {
        Delete.classList.add('Active');
    });

    CloseButtonCourses.addEventListener('click', ()=> {
        Delete.classList.remove('Active');
    });
</script>