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
    <div class='flex justify-end w-94'>
        <button class='AddButtonStudent Button-AddCourse'>Add Student +</button>
    </div>
    <div class='Students flex flex-col gap-16px w-94'>
        <div class='CourseContainer flex justify-between p-2 text-[1.2vw]'>
            <p>Name</p>
            <p>Email</p>
            <p>Actions</p>
        </div>
        <?php foreach($Students as $students): ?>
            <div class='CourseContainer flex justify-between p-3 text-[1.2vw]'>
                <p><?= $students['Name'] ?></p>
                <p><?= $students['Email'] ?></p>
                <div class='flex gap-15px'>
                    <button 
                        class='DeleteStudents<?= $students['id']; ?>' 
                        onclick='DeleteButton<?= $students['id']; ?>(<?= $students['id']; ?>)'>
                        <?php echo $Icon_Delete ?>
                    </button>
                    <button 
                        class='EditStudents<?= $students['id']; ?>' 
                        onclick='EditButton<?= $students['id']; ?>(<?= $students['id']; ?>)'>
                        <?php echo $Icon_Edit ?>
                    </button>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>

<!-------------------- Add Student Div -------------------->
<div class='CoursesChange StudentsNew flex items-center justify-center absolute w-100 h-100'>
    <div class="Wrapper">
        <div class='flex w-100 justify-end'>
                <button class='CloseButtonNewStudents'><?php echo $Icon_Close; ?></button>
        </div>
        <form method="POST">
            <div class='flex flex-row'>
                <div>
                    <label for="newsname">Name</label>
                    <input type="text" id="newsname" name="newsname" required placeholder='Name'>
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
                    <label for="newnumber">Phone Number</label>
                    <input type="text" id="newnumber" name="newnumber" required placeholder='10 digits'>
                </div>
                <div>
                    <label for="newaddress">Address</label>
                    <input type="text" id="newaddress" name="newaddress" required placeholder='Address'>
                </div>
                <div>
                    <label for="newcollege">College</label>
                    <input type="text" id="newcollege" name="newcollege" required placeholder='College'>
                </div>
            </div>
            <div class='flex flex-row'>
                <div>
                    <label for="newpassword">Password</label>
                    <input type="password" id="newpassword" name="newpassword" required placeholder='Min 8 characters'>
                </div>
            </div>
            <div class='items-center'>
                <button class='submitButton' type="submit" onclick='AddStudent()'>Submit</button>
            </div>
        </form>
    </div>
</div>

<!-------------------- Edit Student Div -------------------->
<div class='CoursesChange StudentsChange flex items-center justify-center absolute w-100 h-100'>
    <div class="Wrapper">
        <div class='flex w-100 justify-end'>
                <button class='CloseButtonStudents'><?php echo $Icon_Close; ?></button>
        </div>
        <form method="POST">
            <div class='flex flex-row'>
                <div>
                    <label for="editsname">Name</label>
                    <input type="text" id="editsname" name="editsname" placeholder='Name'>
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
                    <label for="editnumberStudents">Phone Number</label>
                    <input type="text" id="editnumberStudents" name="editnumberStudents" placeholder='10 digits'>
                </div>
                <div>
                    <label for="editaddress">Address</label>
                    <input type="text" id="editaddress" name="editaddress" placeholder='Address'>
                </div>
                <div>
                    <label for="editcollege">College</label>
                    <input type="text" id="editcollege" name="editcollege" placeholder='College'>
                </div>
            </div>
            <div class='flex flex-row'>
                <div>
                    <label for="editpasswordStudents">Password</label>
                    <input type="password" id="editpasswordStudents" name="editpasswordStudents" placeholder='Min 8 characters'>
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
        <form method="POST">
            <label for="delete">Are you want to delete.</label>
            <div class='items-center'>
                <button class='submitButton' type="submit" onclick='DeleteStudent()'>Delete</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Remove non-digits & limit to 10
    document.getElementById("newnumber").addEventListener("input", function (e) {
        this.value = this.value.replace(/\D/g, "").slice(0, 10);
    });

    // Remove non-digits & limit to 10
    document.querySelector("#editnumberStudents").addEventListener("input", function (e) {
        this.value = this.value.replace(/\D/g, "").slice(0, 10);
    });

    // Add Button of Adding New Student Container
    const AddButtonStudent = document.querySelector('.AddButtonStudent');

    // Close Button of Adding New Student Container
    const CloseButtonNewStudents = document.querySelector('.CloseButtonNewStudents');

    // Edit Buttons of Students
    <?php foreach($Students as $students): ?>
        const EditStudents<?= $students['id']; ?> = document.querySelector('.EditStudents<?= $students['id']; ?>');
    <?php endforeach; ?>

    // Delete Buttons of Students
    <?php foreach($Students as $students): ?>
        const DeleteStudents<?= $students['id']; ?> = document.querySelector('.DeleteStudents<?= $students['id']; ?>');
    <?php endforeach; ?>

    // Students Add Container
    const StudentsNew = document.querySelector('.StudentsNew');

    // Students Editing Container
    const StudentsChange = document.querySelector('.StudentsChange');

    // Close Button of Students Editing Container
    const CloseButtonStudents = document.querySelector('.CloseButtonStudents');

    // Close Button of Students Delete Container
    const CloseButtonStudentsDelete = document.querySelector('.CloseButtonStudentsDelete');

    // Delete Students Container
    const DeleteChangeStudents = document.querySelector('.DeleteChangeStudents');

    // Add Button of Adding New Student Container
    AddButtonStudent.addEventListener('click', ()=> {
        StudentsNew.classList.add('Active');
    });

    // Close Button of Adding New Student Container
    CloseButtonNewStudents.addEventListener('click', ()=> {
        StudentsNew.classList.remove('Active');
    });

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


        // ----------------------- Delete Student -----------------------
        <?php foreach($Students as $students): ?>
        function DeleteButton<?= $students['id']; ?>(id) {
            globalDeleteId = id;
        }
        <?php endforeach; ?>

        function DeleteStudent() {
                event.preventDefault();

                $.ajax({
                    url: 'src/components/Admin/Functions/DeleteStudent.php',
                    type: 'POST',
                    data: {'id': globalDeleteId},
                    success: function(response) {
                        alert(response);
                    }
                });
            }

    // ----------------------- New Student -----------------------
    function AddStudent() {
        event.preventDefault();

        var newsname = $('#newsname').val();
        var newprofileurl = $('#newprofileurl').val();
        var newemail = $('#newemail').val();
        var newnumber = $('#newnumber').val();
        var newaddress = $('#newaddress').val();
        var newcollege = $('#newcollege').val();
        var newpassword = $('#newpassword').val();
        
        if (newnumber !== "" && newnumber.length < 10) {
            alert("Number must contains 10 digits");
        }

        else if (newpassword !== "" && newpassword.length < 8) {
            alert("Password must contains atleast 8 characters");
        }

        else {
            $.ajax({
                url: 'src/components/Admin/Functions/AddStudent.php',
                type: 'POST',
                data: {'newsname': newsname, 'newprofileurl': newprofileurl, 'newemail': newemail, 'newnumber': newnumber, 'newaddress': newaddress, 'newcollege': newcollege, 'newpassword': newpassword},
                success: function(response) {
                    alert(response);
                }
            });
        }
    }

    // ----------------------- Edit Student -----------------------
    <?php foreach($Students as $students): ?>
        function EditButton<?= $students['id']; ?>(id) {
            globalEditId = id;
        }
    <?php endforeach; ?>

    function EditStudent() {
        event.preventDefault();

        var editsname = $('#editsname').val();
        var editprofileurl = $('#editprofileurl').val();
        var editemail = $('#editemail').val();
        var editnumberStudents = $('#editnumberStudents').val();
        var editaddress = $('#editaddress').val();
        var editcollege = $('#editcollege').val();
        var editpasswordStudents = $('#editpasswordStudents').val();

        if (editnumberStudents !== "" && editnumberStudents.length < 10) {
            alert("Number must contains 10 digits");
        }

        else if (editpasswordStudents !== "" && editpasswordStudents.length < 8) {
            alert("Password must contains atleast 8 characters");
        }

        else {
            $.ajax({
                url: 'src/components/Admin/Functions/UpdateStudent.php',
                type: 'POST',
                data: {'id': globalEditId, 'editsname': editsname, 'editprofileurl': editprofileurl, 'editemail': editemail, 'editnumber': editnumberStudents, 'editaddress': editaddress, 'editcollege': editcollege, 'editpassword': editpasswordStudents},
                success: function(response) {
                    alert(response);
                }
            });
        }
    }
</script>