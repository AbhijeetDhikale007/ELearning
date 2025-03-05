<?php
// include 'src/components/dBconnection.php';
// include 'src/components/Icons.php';

// SQL query to fetch data
$sql = "SELECT * FROM admin where id= '$Login_id'";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

    $row = $result->fetch_assoc();

    // Assign values to variables
    $Name = $row['name'];
    $Email = $row['email'];
    $ImgLink = $row['profilelink'];
    $Num = $row['number'];
?>

<!-------------------- Profile Div -------------------->

<div class='DashContent w-100%'>
    <h1 class='josefin-sans'>Profile</h1>
    <div>
        <div class='Profile'>
            <img src=<?php echo $ImgLink; ?> alt="Profile">
            <div class='h-100 flex flex-col gap-20px'>
                <p><?php echo $Name; ?></p>
                <p class='text-[1.2vw]'>Admin</p>
                <p class='text-[1.1vw]'><?php echo $Email; ?></p>
                <p class='text-[1vw]'><?php echo $Num; ?></p>
                <div class='flex justify-end items-end'>
                    <button class='EditButton'><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-------------------- Profile Edit Div -------------------->

<div class='ProfileChange flex items-center justify-center fixed w-100 h-100'>
        <form method="POST">
            <div class='flex w-100 items-end'>
                <button class='CloseButton'><?php echo $Icon_Close; ?></button>
            </div>
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
                <input type="email" id="editemail" name="editemail" placeholder='Username'>
            </div>
            <div>
                <label for="editpassword">Password</label>
                <input type="password" id="editpassword" name="editpassword" placeholder='Min 8 characters'>
            </div>
            <div>
                <label for="editnumber">Number</label>
                <input type="text" id="editnumber" name="editnumber" placeholder='10 digits'>
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
  
    // Profile Edit Button and Content
    const EditButton = document.querySelector('.EditButton');
    const CloseButton = document.querySelector('.CloseButton');

    // Edit Profile Container
    const Profile = document.querySelector('.ProfileChange');

    // Edit Profile Button
    EditButton.addEventListener('click', ()=> {
        Profile.classList.add('Active');
    });

    // Close Button of Profile Edit Container
    CloseButton.addEventListener('click', ()=> {
        Profile.classList.remove('Active');
    });

    // Update Profile
    function updateProfile() {
        event.preventDefault();

            var editprofilelink = $('#editprofilelink').val();
            var editname = $('#editname').val();
            var editemail = $('#editemail').val();
            var editpassword = $('#editpassword').val();
            var editnumber = $('#editnumber').val();

        if (editpassword !== "" && editpassword.length < 8) {
            alert("Password must contains atleast 8 characters");
        }

        else if (editnumber !== "" && editnumber.length < 10) {
            alert("Number must contains 10 digits");
        }

        else {
            $.ajax({
                url: 'src/components/Admin/Functions/UpdateProfile.php',
                type: 'POST',
                data: {'editprofilelink': editprofilelink, 'editname': editname, 'editemail': editemail, 'editpassword': editpassword, 'editnumber': editnumber},
                success: function(response) {
                    alert(response);
                }
            });
        }
    }
</script>