<?php
// include 'src/components/dBconnection.php';
// include 'src/components/Icons.php';

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
                    <button 
                        class='DeleteButtonCourses<?= $courses['id']; ?>' 
                        onclick='DeleteButton<?= $courses['id']; ?>(<?= $courses['id']; ?>)'>
                        <?php echo $Icon_Delete ?>
                    </button>
                    <button 
                        class='EditButtonCourses<?= $courses['id']; ?>' 
                        onclick='EditButton<?= $courses['id']; ?>(<?= $courses['id']; ?>)'>
                        <?php echo $Icon_Edit ?>
                    </button>
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
        <form method="POST">
            <div class='flex flex-row'>
                <div>
                    <label for="newcourse">Course Name</label>
                    <input type="text" id="newcourse" name="newcourse" required>
                </div>
                <div>
                    <label for="newImg">Picture url</label>
                    <input type="text" id="newImg" name="newImg" required>
                </div>
                <div>
                    <label for="newvideo">Video url</label>
                    <input type="text" id="newvideo" name="newvideo" required>
                </div>
            </div>
            <div class='flex flex-row'>
                <div>
                    <label for="newdetails">Course Description</label>
                    <input type="text" id="newdetails" name="newdetails" required>
                </div>
                <div>
                    <label for="newprize">Prize</label>
                    <input type="number" id="newprize" name="newprize" required>
                </div>
                <div>
                    <label for="newdiscount">Discount</label>
                    <input type="number" id="newdiscount" name="newdiscount" required>
                </div>
            </div>
            <div class='items-center'>
                <button class='submitButton' type="submit" onclick="addCourse()">Submit</button>
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
        <form method="POST">
            <div class='flex flex-row'>
                <div>
                    <label for="editcourse">Course Name</label>
                    <input type="text" id='editcourse' name="editcourse">
                </div>
                <div>
                    <label for="editImg">Picture url</label>
                    <input type="text" id='editImg' name="editImg">
                </div>
                <div>
                    <label for="editvideo">Video url</label>
                    <input type="text" id='editvideo' name="editvideo">
                </div>
            </div>
            <div class='flex flex-row'>
                <div>
                    <label for="editdetails">Course Description</label>
                    <input type="text" id='editdetails' name="editdetails">
                </div>
                <div>
                    <label for="editprize">Prize</label>
                    <input type="number" id='editprize' name="editprize">
                </div>
                <div>
                    <label for="editdiscount">Discount</label>
                    <input type="number" id='editdiscount' name="editdiscount">
                </div>
            </div>
            <div class='items-center'>
                <button class='submitButton' type="submit" onclick='EditCourse()'>Submit</button>
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
        <form method="POST">
                <label for="coursesdelete">Are you want to delete.</label>
            <div class='items-center'>
                <button class='submitButton' type="submit" onclick='DeleteCourse()'>Delete</button>
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

            // ----------------------- Add New Course -----------------------
            function addCourse() {
            event.preventDefault();

            var newcourse = $('#newcourse').val();
            var newImg = $('#newImg').val();
            var newvideo = $('#newvideo').val();
            var newdetails = $('#newdetails').val();
            var newprize = $('#newprize').val();
            var newdiscount = $('#newdiscount').val();

            $.ajax({
                url: 'src/components/Admin/Functions/AddCourse.php',
                type: 'POST',
                data: {'newcourse': newcourse, 'newImg': newImg, 'newvideo': newvideo, 'newdetails': newdetails, 'newprize': newprize, 'newdiscount': newdiscount},
                success: function(response) {
                    alert(response);
                }
            });
        }

        // ----------------------- Delete Course -----------------------
        <?php foreach($Courses as $courses): ?>
        function DeleteButton<?= $courses['id']; ?>(id) {
            globalDeleteId = id;
        }
        <?php endforeach; ?>

        function DeleteCourse() {
                event.preventDefault();

                $.ajax({
                    url: 'src/components/Admin/Functions/DeleteCourse.php',
                    type: 'POST',
                    data: {'id': globalDeleteId},
                    success: function(response) {
                        alert(response);
                    }
                });
            }

        // ----------------------- Edit Course -----------------------
        <?php foreach($Courses as $courses): ?>
        function EditButton<?= $courses['id']; ?>(id) {
            globalEditId = id;
        }
        <?php endforeach; ?>

        function EditCourse() {
                event.preventDefault();

                var editcourse = $('#editcourse').val();
                var editImg = $('#editImg').val();
                var editvideo = $('#editvideo').val();
                var editdetails = $('#editdetails').val();
                var editprize = $('#editprize').val();
                var editdiscount = $('#editdiscount').val();

                $.ajax({
                    url: 'src/components/Admin/Functions/UpdateCourse.php',
                    type: 'POST',
                    data: {'id': globalEditId, 'editcourse': editcourse, 'editImg': editImg, 'editvideo': editvideo, 'editdetails': editdetails, 'editprize': editprize, 'editdiscount': editdiscount},
                    success: function(response) {
                        alert(response);
                    }
                });
            }
</script>