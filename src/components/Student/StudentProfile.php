<?php
include 'src/components/dBconnection.php';
include 'src/components/Icons.php';

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if(!$result) {
    die("Query Failed: ". $conn->error);
}

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

// -------------------------- Editing Profile --------------------------
if(isset($_POST['editprofilelink']) && isset($_POST['editname']) && isset($_POST['editemail']) && isset($_POST['editnumber']) && isset($_POST['editlocation']) && isset($_POST['editcollege']) && !empty($_POST['editprofilelink']) && !empty($_POST['editname']) && !empty($_POST['editemail']) && !empty($_POST['editnumber']) && !empty($_POST['editlocation']) && !empty($_POST['editcollege'])) {
    // Assign ID Here
    $editprofilelink = $_POST['editprofilelink'];
    $editname = $_POST['editname'];
    $editnumber = $_POST['editnumber'];
    $editlocation = $_POST['editlocation'];
    $editcollege = $_POST['editcollege'];

    $sql = "UPDATE table courses SET profileurl= '$editprofilelink', sname= '$editname', email= '$editemail', number= '$editnumber', address= '$editlocation', college= 'editcollege' WHERE id='$id' ";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Your profile edited successfully")</script>';
    } else {
        echo '<script>alert("Error: " . $sql . "<br>" . $conn->error)</script>';
    }
    $conn->close();
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
    <form action="StudentProfile.php" method="post">
        <div class='flex w-100 items-end'>
                <button class='CloseButton'><?php echo $Icon_Close; ?></button>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="editprofilelink">Profile url</label>
                <input type="text" name="editprofilelink" required>
            </div>
            <div>
                <label for="editname">Your Name</label>
                <input type="text" name="editname" required>
            </div>
            <div>
                <label for="editemail">Email</label>
                <input type="email" name="editemail" required>
            </div>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="editnumber">Number</label>
                <input type="number" name="editnumber" required>
            </div>
            <div>
                <label for="editlocation">Location</label>
                <input type="text" name="editlocation" required>
            </div>
            <div>
                <label for="editcollege">College</label>
                <input type="text" name="editcollege" required>
            </div>
        </div>
        <div>
            <label for="editpassword">Password</label>
            <input type="password" name="editpassword" required>
        </div>
        <div class='items-center'>
            <button class='submitButton' type="submit">Submit</button>
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
</script>