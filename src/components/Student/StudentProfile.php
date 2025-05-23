<?php
// include 'src/components/dBconnection.php';
// include 'src/components/Icons.php';

$sql = "SELECT * FROM students where id='$Login_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $Name = $row['sname'];
        $Email = $row['email'];
        $Img = $row['profileurl'];
        $Num = $row['number'];
        $Address = $row['address'];
        $College = $row['college'];
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
                <p class='text-[1.2vw]'>Student</p>
                <p class='text-[1.2vw]'><?php echo $Email; ?></p>
                <p class='text-[1.1vw]'><?php echo $Num; ?></p>
                <p class='text-[1.1vw]'><?php echo $Address; ?></p>
                <p class='text-[1.1vw]'><?php echo $College; ?></p>
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
                <label for="editprofilelink">Profile url</label>
                <input type="text" id="editprofilelink" name="editprofilelink" placeholder='Profile Link'>
            </div>
            <div>
                <label for="editname">Your Name</label>
                <input type="text" id="editname" name="editname" placeholder='Name'>
            </div>
            <div>
                <label for="editemail">Email</label>
                <input type="email" id="editemail" name="editemail" placeholder='Email'>
            </div>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="editnumber">Number</label>
                <input type="text" id="editnumber" name="editnumber" placeholder='Number'>
            </div>
            <div>
                <label for="editlocation">Address</label>
                <input type="text" id="editlocation" name="editlocation" placeholder='Address'>
            </div>
            <div>
                <label for="editcollege">College</label>
                <input type="text" id="editcollege" name="editcollege" placeholder='College'>
            </div>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="editpassword">Password</label>
                <input type="password" id="editpassword" name="editpassword" placeholder='Min 8 characters'>
            </div>
        </div>
        <div class='items-center'>
            <button class='submitButton' type="submit" onclick="updateProfile()">Submit</button>
        </div>
    </form>
</div>

<script>
    // Remove non-digits & limit to 10
    document.getElementById("editnumber").addEventListener("input", function (e) {
        this.value = this.value.replace(/\D/g, "").slice(0, 10);
    });

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

            var editprofilelink = $('#editprofilelink').val();
            var editname = $('#editname').val();
            var editemail = $('#editemail').val();
            var editnumber = $('#editnumber').val();
            var editlocation = $('#editlocation').val();
            var editcollege = $('#editcollege').val();
            var editpassword = $('#editpassword').val();

        if (editnumber !== "" && editnumber.length < 10) {
            alert("Number must contains 10 digits");
        }

        else if (editpassword !== "" && editpassword.length < 8) {
            alert("Password must contains atleast 8 characters");
        }

        else {
            $.ajax({
                url: 'src/components/Student/Functions/UpdateProfile.php',
                type: 'POST',
                data: {'editprofilelink': editprofilelink, 'editname': editname, 'editemail': editemail, 'editnumber': editnumber, 'editlocation': editlocation, 'editcollege': editcollege, 'editpassword': editpassword},
                success: function(response) {
                    alert(response);
                }
            });
        }
    }
</script>