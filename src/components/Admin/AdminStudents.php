<?php
// include 'src/components/dBconnection.php';
// include 'src/components/Icons.php';

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
            'Img' => $row['profileurl'],
            'Email' => $row['email'],
            'Number' => $row['number'],
            'Location' => $row['address'],
            'College' => $row['college']
        ];
    }
}
?>

<!-------------------- Students Div -------------------->

<div class='DashContent w-100% relative'>
    <h1 class='josefin-sans'>Students</h1>
    <!-- <div class='flex justify-end w-94'>
        <button class='Button-AddCourse'>Add Student +</button>
    </div> -->
    <div class='Students flex flex-col gap-16px w-94'>
        <div class='CourseContainer flex justify-between p-2 text-[1.2vw]'>
            <p>Username</p>
            <p>Email</p>
            <p>Actions</p>
        </div>
        <?php foreach($Students as $students): ?>
            <div class='CourseContainer flex justify-between p-3 text-[1.2vw]'>
                <p><?= $students['Name'] ?></p>
                <p><?= $students['Email'] ?></p>
                <div class='flex gap-15px'>
                    <button class='DeleteStudents<?= $students['id']; ?>'><?php echo $Icon_Delete ?></button>
                    <button class='EditStudents<?= $students['id']; ?>' onclick='EditButton<?= $students['id']; ?>(<?= $students['id']; ?>)' ><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<!-------------------- Edit Div -------------------->
<div class='CoursesChange StudentsChange flex items-center justify-center absolute w-100 h-100'>
    <div class="Wrapper">
        <div class='flex w-100 justify-end'>
                <button class='CloseButtonStudents'><?php echo $Icon_Close; ?></button>
        </div>
        <form method="POST">
            <div class='flex flex-row'>
                <div>
                    <label for="editname">Name</label>
                    <input type="text" id="editname" name="editname" required>
                </div>
                <div>
                    <label for="editprofileurl">Profile Link</label>
                    <input type="text" id="editprofileurl" name="editprofileurl" required>
                </div>
                <div>
                    <label for="editemail">Email</label>
                    <input type="email" id="editemail" name="editemail" required>
                </div>
            </div>
            <div class='flex flex-row'>
                <div>
                    <label for="editnumber">Phone Number</label>
                    <input type="number" id="editnumber" name="editnumber" required>
                </div>
                <div>
                    <label for="editaddress">Address</label>
                    <input type="text" id="editaddress" name="editaddress" required>
                </div>
                <div>
                    <label for="editcollege">College</label>
                    <input type="text" id="editcollege" name="editcollege" required>
                </div>
            </div>
            <div class='items-center'>
                <button class='submitButton' type="submit" onclick='EditStudent()'>Submit</button>
            </div>
        </form>
    </div>
</div>

<!-------------------- Students Delete Div -------------------->
<div class='DeleteChange DeleteChangeStudents flex items-center justify-center absolute w-100 h-100'>
    <div class='Wrapper'>
        <div class='flex w-100 justify-end'>
                <button class='CloseButtonStudentsDelete'><?php echo $Icon_Close; ?></button>
        </div>
        <form action="adminDash.php" method="post">
            <label for="delete">Are you want to delete.</label>
            <div class='items-center'>
                <button class='submitButton' type="submit">Delete</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Edit Buttons of Students
    <?php foreach($Students as $students): ?>
        const EditStudents<?= $students['id']; ?> = document.querySelector('.EditStudents<?= $students['id']; ?>');
    <?php endforeach; ?>

    // Delete Buttons of Students
    <?php foreach($Students as $students): ?>
        const DeleteStudents<?= $students['id']; ?> = document.querySelector('.DeleteStudents<?= $students['id']; ?>');
    <?php endforeach; ?>

    // Students Editing Container
    const StudentsChange = document.querySelector('.StudentsChange');

    // Close Button of Students Editing Container
    const CloseButtonStudents = document.querySelector('.CloseButtonStudents');

    // Close Button of Students Delete Container
    const CloseButtonStudentsDelete = document.querySelector('.CloseButtonStudentsDelete');

    // Delete Students Container
    const DeleteChangeStudents = document.querySelector('.DeleteChangeStudents');

    // Edit Buttons of Students
    <?php foreach($Students as $students): ?>
        EditStudents<?= $students['id']; ?>.addEventListener('click', ()=> {
            StudentsChange.classList.add('Active');
        });
    <?php endforeach; ?>

    // Close Button of Students Editing Container
    CloseButtonStudents.addEventListener('click', ()=> {
        StudentsChange.classList.remove('Active');
    });

    // Delete Buttons of Students
    <?php foreach($Students as $students): ?>
        DeleteStudents<?= $students['id']; ?>.addEventListener('click', ()=> {
            DeleteChangeStudents.classList.add('Active');
        });
    <?php endforeach; ?>

    // Close Button of Students Delete Container
    CloseButtonStudentsDelete.addEventListener('click', ()=> {
        DeleteChangeStudents.classList.remove('Active');
    });

        // Edit Student
        <?php foreach($Students as $students): ?>
            function EditButton<?= $students['id']; ?>(id) {
                globalEditId = id;
            }
        <?php endforeach; ?>

    function EditStudent() {
        event.preventDefault();

        var editname = $('#editname').val();
        var editprofileurl = $('#editprofileurl').val();
        var editemail = $('#editemail').val();
        var editnumber = $('#editnumber').val();
        var editaddress = $('#editaddress').val();
        var editcollege = $('#editcollege').val();

        $.ajax({
            url: 'src/components/Admin/Functions/UpdateStudent.php',
            type: 'POST',
            data: {'id': globalEditId, 'editname': editname, 'editprofileurl': editprofileurl, 'editemail': editemail, 'editnumber': editnumber, 'editaddress': editaddress, 'editcollege': editcollege},
            success: function(response) {
                alert(response);
            }
        });
    }
</script>