<?php
// include 'src/components/dBconnection.php';
// include 'src/components/Icons.php';

$sql = "SELECT * FROM teachers where id= '$Login_id'";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

    $row = $result->fetch_assoc();

    // Assign values to variables
    $Name = $row['tname'];
    $Img = $row['profile_pic'];
    $Email = $row['email'];
    $Profession = $row['profession'];

$Teachers = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $Teachers[] = [
            'id' => $row['id'],
            'Name' => $row['tname'],
            'Img' => $row['profile_pic'],
            'Email' => $row['email'],
            'Profession' => $row['profession']
        ];
    }
}
?>

<!------------- Profile Content ------------->

<div class='DashContent w-100%'>
    <h1 class='josefin-sans'>Profile</h1>
    <div>
        <div class='Profile'>
            <img src=<?php echo $Img; ?> alt="Profile">
            <div class='h-100 flex flex-col gap-16px'>
                <p><?php echo $Name; ?></p>
                <p class='text-[1.2vw]'><?php echo $Profession; ?></p>
                <p class='text-[1.2vw]'><?php echo $Email; ?></p>
                <div class='flex justify-end items-end'>
                    <button class='EditButton'><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!------------- Profile Edit Container ------------->

<div class='ProfileChange flex items-center justify-center absolute w-100 h-100'>
    <form method="POST">
        <div class='flex w-100 items-end'>
                <button class='CloseButton'><?php echo $Icon_Close; ?></button>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="editprofileurl">Profile url</label>
                <input type="text" id="editprofileurl" name="editprofileurl" required placeholder='Profile Link'>
            </div>
            <div>
                <label for="edittname">Your Name</label>
                <input type="text" id="edittname" name="edittname" required placeholder='Name'>
            </div>
            <div>
                <label for="editemail">Email</label>
                <input type="email" id="editemail" name="editemail" required placeholder='Email'>
            </div>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="editprofession">Profession</label>
                <input type="text" id="editprofession" name="editprofession" required placeholder='Profession'>
            </div>
            <div>
                <label for="editpassword">Password</label>
                <input type="password" id="editpassword" name="editpassword" required placeholder='Password'>
            </div>
        </div>
        <div class='items-center'>
            <button class='submitButton' type="submit" onclick="updateProfile()">Submit</button>
        </div>
    </form>
</div>

<script>
    // Profile Edit Button
    const EditButton = document.querySelector('.EditButton');

    // Profile Edit Button and Container
    const CloseButton = document.querySelector('.CloseButton');
    const Profile = document.querySelector('.ProfileChange');

    // Profile Edit Button
    EditButton.addEventListener('click', ()=> {
        Profile.classList.add('Active');
    });

    // Profile Close Button of Editing Container
    CloseButton.addEventListener('click', ()=> {
        Profile.classList.remove('Active');
    });

        // Update Profile
        function updateProfile() {
            event.preventDefault();

            var editprofileurl = $('#editprofileurl').val();
            var edittname = $('#edittname').val();
            var editemail = $('#editemail').val();
            var editprofession = $('#editprofession').val();
            var editpassword = $('#editpassword').val();

            $.ajax({
                url: 'src/components/Instructor/Functions/UpdateTeacher.php',
                type: 'POST',
                data: {'editprofileurl': editprofileurl, 'edittname': edittname, 'editemail': editemail, 'editprofession': editprofession, 'editpassword': editpassword},
                success: function(response) {
                    alert(response);
                }
            });
        }
</script>