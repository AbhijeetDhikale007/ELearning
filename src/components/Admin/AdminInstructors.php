<?php
// include 'src/components/dBconnection.php';
// include 'src/components/Icons.php';

$sql = "SELECT * FROM instructor";
$result = $conn->query($sql);

if(!$result) {
    die("Query Failed: ". $conn->error);
}

$Instructor = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $Instructor[] = [
            'id' => $row['id'],
            'Name' => $row['tname'],
            'Img' => $row['profile_pic'],
            'Email' => $row['email'],
            'Profession' => $row['profession']
        ];
    }
}
?>

<!-------------------- Instructor Div -------------------->

<div class='DashContent w-100% relative'>
    <h1 class='josefin-sans'>Instructors</h1>
    <div class='flex justify-end w-94'>
        <button class='Button-AddCourse' id='AddButtonInstructor'>Add Instructor +</button>
    </div>
    <div class='Students flex flex-col gap-16px w-94'>
        <div class='CourseContainer flex justify-between p-2 text-[1.2vw]'>
            <p>Name</p>
            <p>Email</p>
            <p>Actions</p>
        </div>
        <?php foreach($Instructor as $instructor): ?>
            <div class='CourseContainer flex justify-between p-3 text-[1.2vw]'>
                <p><?= $instructor['Name'] ?></p>
                <p><?= $instructor['Email'] ?></p>
                <div class='flex gap-15px'>
                    <button 
                        class='DeleteInstructors<?= $instructor['id']; ?>' 
                        onclick='DeleteButton<?= $instructor['id']; ?>(<?= $instructor['id']; ?>)'>
                        <?php echo $Icon_Delete ?>
                    </button>
                    <button 
                        class='EditInstructors<?= $instructor['id']; ?>' 
                        onclick='EditButton<?= $instructor['id']; ?>(<?= $instructor['id']; ?>)'>
                        <?php echo $Icon_Edit ?>
                    </button>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<!-------------------- Add Instructor Div -------------------->
<div class='CoursesChange InstructorsNew flex items-center justify-center absolute w-100 h-100'>
    <div class="Wrapper">
        <div class='flex w-100 justify-end'>
                <button class='CloseButtonNewInstructors'><?php echo $Icon_Close; ?></button>
        </div>
        <form method="POST">
            <div class='flex flex-row'>
                <div>
                    <label for="newtname">Name</label>
                    <input type="text" id="newtname" name="newtname" required placeholder='Name'>
                </div>
                <div>
                    <label for="newprofileurl">Profile Link</label>
                    <input type="text" id="newprofileurl" name="newprofileurl" required placeholder='Profile Link'>
                </div>
                <div>
                    <label for="newemail">Email</label>
                    <input type="email" id="newemail" name="newemail" required placeholder='Email'>
                </div>
            </div>
            <div class='flex flex-row'>
                <div>
                    <label for="newprofession">Profession</label>
                    <input type="text" id="newprofession" name="newprofession" required placeholder='Profession'>
                </div>
                <div>
                    <label for="newpassword">Password</label>
                    <input type="password" id="newpassword" name="newpassword" required placeholder='Min 8 characters'>
                </div>
            </div>
            <div class='items-center'>
                <button class='submitButton' type="submit" onclick='AddInstructor()'>Submit</button>
            </div>
        </form>
    </div>
</div>

<!-------------------- Edit Instructor Div -------------------->
<div class='CoursesChange InstructorsChange flex items-center justify-center absolute w-100 h-100'>
    <div class="Wrapper">
        <div class='flex w-100 justify-end'>
                <button class='CloseButtonInstructors'><?php echo $Icon_Close; ?></button>
        </div>
        <form method="POST">
            <div class='flex flex-row'>
                <div>
                    <label for="edittname">Name</label>
                    <input type="text" id="edittname" name="edittname" placeholder='Name'>
                </div>
                <div>
                    <label for="editprofileurl">Profile Link</label>
                    <input type="text" id="editprofileurl" name="editprofileurl" placeholder='Profile Link'>
                </div>
                <div>
                    <label for="editemail">Email</label>
                    <input type="email" id="editemail" name="editemail" placeholder='Email'>
                </div>
            </div>
            <div class='flex flex-row'>
                <div>
                    <label for="editprofession">Profession</label>
                    <input type="text" id="editprofession" name="editprofession" placeholder='Profession'>
                </div>
                <div>
                    <label for="editpasswordInstructor">Password</label>
                     <input type="password" id="editpasswordInstructor" name="editpasswordInstructor" placeholder='Min 8 characters'>
                </div>
            </div>
            <div class='items-center'>
                <button class='submitButton' type="submit" onclick='EditInstructor()'>Submit</button>
            </div>
        </form>
    </div>
</div>

<!-------------------- Instructor Delete Div -------------------->
<div class='DeleteChange DeleteChangeInstructors flex items-center justify-center absolute w-100 h-100'>
    <div class='Wrapper'>
        <div class='flex w-100 justify-end'>
                <button class='CloseButtonInstructorsDelete'><?php echo $Icon_Close; ?></button>
        </div>
        <form method="POST">
            <label for="delete">Are you want to delete.</label>
            <div class='items-center'>
                <button class='submitButton' type="submit" onclick='DeleteInstructor()'>Delete</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Add Button of Adding New Instructor Container
    const AddButtonInstructor = document.querySelector('#AddButtonInstructor');

    // Close Button of Adding New Student Container
    const CloseButtonNewInstructors = document.querySelector('.CloseButtonNewInstructors');

    // Edit Buttons of Students
    <?php foreach($Teachers as $teachers): ?>
        const EditInstructors<?= $teachers['id']; ?> = document.querySelector('.EditInstructors<?= $teachers['id']; ?>');
    <?php endforeach; ?>

    // Delete Buttons of Students
    <?php foreach($Teachers as $teachers): ?>
        const DeleteInstructors<?= $teachers['id']; ?> = document.querySelector('.DeleteInstructors<?= $teachers['id']; ?>');
    <?php endforeach; ?>

    // Instructors Add Container
    const InstructorsNew = document.querySelector('.InstructorsNew');

    // Instructors Editing Container
    const InstructorsChange = document.querySelector('.InstructorsChange');

    // Close Button of Instructors Editing Container
    const CloseButtonInstructors = document.querySelector('.CloseButtonInstructors');

    // Close Button of Instructor Delete Container
    const CloseButtonInstructorsDelete = document.querySelector('.CloseButtonInstructorsDelete');

    // Delete Instructor Container
    const DeleteChangeInstructors = document.querySelector('.DeleteChangeInstructors');

    // Add Button of Adding New Instructor Container
    AddButtonInstructor.addEventListener('click', ()=> {
        InstructorsNew.classList.add('Active');
    });

    // Close Button of Adding New Instructor Container
    CloseButtonNewInstructors.addEventListener('click', ()=> {
        InstructorsNew.classList.remove('Active');
    });

    // Edit Buttons of Instructor
    <?php foreach($Instructor as $instructor): ?>
        EditInstructors<?= $instructor['id']; ?>.addEventListener('click', ()=> {
            InstructorsChange.classList.add('Active');
        });
    <?php endforeach; ?>

    // Close Button of Instructor Editing Container
    CloseButtonInstructors.addEventListener('click', ()=> {
        InstructorsChange.classList.remove('Active');
    });

    // Delete Buttons of Instructors
    <?php foreach($Instructor as $instructor): ?>
        DeleteInstructors<?= $instructor['id']; ?>.addEventListener('click', ()=> {
            DeleteChangeInstructors.classList.add('Active');
        });
    <?php endforeach; ?>

    // Close Button of Instructors Delete Container
    CloseButtonInstructorsDelete.addEventListener('click', ()=> {
        DeleteChangeInstructors.classList.remove('Active');
    });


        // ----------------------- Delete Instructor -----------------------
        <?php foreach($Instructor as $instructor): ?>
        function DeleteButton<?= $instructor['id']; ?>(id) {
            globalDeleteId = id;
        }
        <?php endforeach; ?>

        function DeleteInstructor() {
                event.preventDefault();

                $.ajax({
                    url: 'src/components/Admin/Functions/DeleteInstructor.php',
                    type: 'POST',
                    data: {'id': globalDeleteId},
                    success: function(response) {
                        alert(response);
                    }
                });
            }

    // ----------------------- New Instructor -----------------------
    function AddInstructor() {
        event.preventDefault();

        var newtname = $('#newtname').val();
        var newprofileurl = $('#newprofileurl').val();
        var newemail = $('#newemail').val();
        var newprofession = $('#newprofession').val();
        var newpassword = $('#newpassword').val();

        if (newpassword !== "" && newpassword.length < 8) {
            alert("Password must contains atleast 8 characters");
        }

        else {
            $.ajax({
                url: 'src/components/Admin/Functions/AddInstructor.php',
                type: 'POST',
                data: {'newtname': newtname, 'newprofileurl': newprofileurl, 'newemail': newemail, 'newprofession': newprofession, 'newpassword': newpassword},
                success: function(response) {
                    alert(response);
                }
            });
        }
    }

    // ----------------------- Edit Instructor -----------------------
    <?php foreach($Instructor as $instructor): ?>
        function EditButton<?= $instructor['id']; ?>(id) {
            globalEditId = id;
        }
    <?php endforeach; ?>

    function EditInstructor() {
        event.preventDefault();

        var edittname = $('#edittname').val();
        var editprofileurl = $('#editprofileurl').val();
        var editemail = $('#editemail').val();
        var editprofession = $('#editprofession').val();
        var editpasswordInstructor = $('#editpasswordInstructor').val();

        if (editpasswordInstructor !== "" && editpasswordInstructor.length < 8) {
            alert("Password must contains atleast 8 characters");
        }

        else {
            $.ajax({
                url: 'src/components/Admin/Functions/UpdateInstructor.php',
                type: 'POST',
                data: {'id': globalEditId, 'edittname': edittname, 'editprofileurl': editprofileurl, 'editemail': editemail, 'editprofession': editprofession, 'editpassword': editpasswordInstructor},
                success: function(response) {
                    alert(response);
                }
            });
        }
    }
</script>