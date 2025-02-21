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
            'id' => $row['id'],
            'Name' => $row['cname'],
            // 'img' => $row['pictureurl'],
            // 'video' => $row['videourl'],
            // 'Info' => $row['cinfo'],
            // 'Prize' => $row['prize'],
            // 'Discount' => $row['discount']
        ];
    }
}

// -------------------------- Inserting New Course --------------------------
if(isset($_POST['newcourse']) && isset($_POST['newImg']) && isset($_POST['newvideo']) && isset($_POST['newdetails']) && isset($_POST['newprize']) && isset($_POST['newdiscount']) && !empty($_POST['newcourse']) && !empty($_POST['newImg']) && !empty($_POST['newvideo']) && !empty($_POST['newdetails']) && !empty($_POST['newprize']) && !empty($_POST['newdiscount'])) {
    $newcourse = $_POST['newcourse'];
    $newImg = $_POST['newImg'];
    $newvideo = $_POST['newvideo'];
    $newdetails = $_POST['newdetails'];
    $newprize = $_POST['newprize'];
    $newdiscount = $_POST['newdiscount'];

    $sql = "INSERT INTO courses (cname, pictureurl, videourl, cinfo, prize, discount) VALUES ('$newcourse', '$newImg', '$newvideo', '$newdetails', '$newprize', '$newdiscount')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New course created successfully")</script>';
    } else {
        echo '<script>alert("Error: " . $sql . "<br>" . $conn->error)</script>';
    }
    $conn->close();
}

// -------------------------- Editing Course --------------------------
if(isset($_POST['editcourse']) && isset($_POST['editImg']) && isset($_POST['editvideo']) && isset($_POST['editdetails']) && isset($_POST['editprize']) && isset($_POST['editdiscount']) && !empty($_POST['editcourse']) && !empty($_POST['editImg']) && !empty($_POST['editvideo']) && !empty($_POST['editdetails']) && !empty($_POST['editprize']) && !empty($_POST['editdiscount'])) {
    // Assign ID From the button
    $newcourse = $_POST['editcourse'];
    $newImg = $_POST['editImg'];
    $newvideo = $_POST['editvideo'];
    $newdetails = $_POST['editdetails'];
    $newprize = $_POST['editprize'];
    $newdiscount = $_POST['editdiscount'];

    $sql = "UPDATE table courses SET cname= '$editcourse', pictureurl= '$editImg', videourl= '$editvideo', cinfo= '$editdetails', prize= '$editprize', discount= 'editdiscount' WHERE id='$id' ";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New course created successfully")</script>';
    } else {
        echo '<script>alert("Error: " . $sql . "<br>" . $conn->error)</script>';
    }
    $conn->close();
}

// -------------------------- Deleting Course --------------------------
if(isset($_POST['coursesdelete'])) {
    // Assign ID From the button

    $sql = "DELETE FROM courses WHERE id='$Deleteid' ";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New course created successfully")</script>';
    } else {
        echo '<script>alert("Error: " . $sql . "<br>" . $conn->error)</script>';
    }
    $conn->close();
}
?>

<!------------- Courses Content ------------->

<div class='DashContent w-100% relative'>
    <h1 class='josefin-sans'>Courses</h1>
    <div class='flex justify-end w-94'>
        <button class='AddButtonCourses Button-AddCourse'>Add Course +</button>
    </div>
    <div class='Courses flex flex-col gap-16px w-94'>
        <?php foreach($Courses as $courses): ?>
            <div class='CourseContainer flex justify-between p-3'>
                <p class='text-[1.2vw]'><?= $courses['Name'] ?></p>
                <div class='flex gap-15px'>
                    <button class='DeleteButtonCourses<?= $courses['id']; ?>'><?php echo $Icon_Delete ?></button>
                    <button class='EditButtonCourses<?= $courses['id']; ?>'><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<!-------------------- Add Courses Div -------------------->

<div class='CoursesChange flex items-center justify-center fixed top-0 w-100 h-100'>
    <div class='Wrapper'>
        <div class='flex w-100 justify-end'>
                <button class='CloseButtonCourses'><?php echo $Icon_Close; ?></button>
        </div>
        <form action="adminDash.php" method="POST">
            <div class='flex flex-row'>
                <div>
                    <label for="newcourse">Course Name</label>
                    <input type="text" name="newcourse" required>
                </div>
                <div>
                    <label for="newImg">Picture url</label>
                    <input type="text" name="newImg" required>
                </div>
                <div>
                    <label for="newvideo">Video url</label>
                    <input type="text" name="newvideo" required>
                </div>
            </div>
            <div class='flex flex-row'>
                <div>
                    <label for="newdetails">Course Description</label>
                    <input type="text" name="newdetails" required>
                </div>
                <div>
                    <label for="newprize">Prize</label>
                    <input type="number" name="newprize" required>
                </div>
                <div>
                    <label for="newdiscount">Discount</label>
                    <input type="number" name="newdiscount" required>
                </div>
            </div>
            <div class='items-center'>
                <button class='submitButton' type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<!-------------------- Courses Editing Div -------------------->

<div class='CoursesChange CoursesEdit flex items-center justify-center fixed top-0 w-100 h-100'>
    <div class="Wrapper">
        <div class='flex w-100 justify-end'>
                <button class='CloseButtonCoursesEdit'><?php echo $Icon_Close; ?></button>
        </div>
        <form action="adminDash.php" method="post">
            <div class='flex flex-row'>
                <div>
                    <label for="editcourse">Course Name</label>
                    <input type="text" name="editcourse" required>
                </div>
                <div>
                    <label for="editImg">Picture url</label>
                    <input type="text" name="editImg" required>
                </div>
                <div>
                    <label for="editvideo">Video url</label>
                    <input type="text" name="editvideo" required>
                </div>
            </div>
            <div class='flex flex-row'>
                <div>
                    <label for="editdetails">Course Description</label>
                    <input type="text" name="editdetails" required>
                </div>
                <div>
                    <label for="editprize">Prize</label>
                    <input type="number" name="editprize" required>
                </div>
                <div>
                    <label for="editdiscount">Discount</label>
                    <input type="number" name="editdiscount" required>
                </div>
            </div>
            <div class='items-center'>
                <button class='submitButton' type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>

<!-------------------- Courses Delete Div -------------------->

<div class='DeleteChange flex items-center justify-center absolute w-100 h-100'>
    <div class='Wrapper'>
        <div class='flex w-100 justify-end'>
                <button class='CloseButtonCoursesDelete'><?php echo $Icon_Close; ?></button>
        </div>
        <form action="adminDash.php" method="post">
                <label for="coursesdelete">Are you want to delete.</label>
            <div class='items-center'>
                <button class='submitButton' type="submit">Delete</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Add Button of Adding New Course Container
    const AddButtonCourses = document.querySelector('.AddButtonCourses');

    // Close Button of Adding New Course Container
    const CloseButtonCourses = document.querySelector('.CloseButtonCourses');

    // Close Button In Courses Edit Container
    const CloseButtonCoursesEdit = document.querySelector('.CloseButtonCoursesEdit');

    // Close Button In Course Delete
    const CloseButtonCoursesDelete = document.querySelector('.CloseButtonCoursesDelete');

    // Edit Buttons of Courses
    <?php foreach($Courses as $courses): ?>
    const EditButtonCourses<?= $courses['id']; ?> = document.querySelector('.EditButtonCourses<?= $courses['id']; ?>');
    <?php endforeach; ?>

    // Delete Buttons of Courses
    <?php foreach($Courses as $courses): ?>
    const DeleteButtonCourses<?= $courses['id']; ?> = document.querySelector('.DeleteButtonCourses<?= $courses['id']; ?>');
    <?php endforeach; ?>

    // New Course Container
    const Courses = document.querySelector('.CoursesChange');

    // Courses Edit Container
    const CoursesEdit = document.querySelector('.CoursesEdit');

    // Courses Delete Container
    const Delete = document.querySelector('.DeleteChange');

    // Add Button of Adding New Course Container
    AddButtonCourses.addEventListener('click', ()=> {
        Courses.classList.add('Active');
    });

    // Close Button of Adding New Course Container
    CloseButtonCourses.addEventListener('click', ()=> {
        Courses.classList.remove('Active');
    });

    // Close Button In Courses Edit Container
    CloseButtonCoursesEdit.addEventListener('click', ()=> {
        CoursesEdit.classList.remove('Active');
    });

    // Edit Buttons of Courses
    <?php foreach($Courses as $courses): ?>
        EditButtonCourses<?= $courses['id']; ?>.addEventListener('click', ()=> {
            CoursesEdit.classList.add('Active');
        });
    <?php endforeach; ?>

    // Delete Buttons of Courses
    <?php foreach($Courses as $courses): ?>
        DeleteButtonCourses<?= $courses['id']; ?>.addEventListener('click', ()=> {
            Delete.classList.add('Active');
        });
    <?php endforeach; ?>

    // Close Button In Course Delete
    CloseButtonCoursesDelete.addEventListener('click', ()=> {
        Delete.classList.remove('Active');
    });
</script>