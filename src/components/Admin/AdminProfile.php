<?php
include 'src/components/dBconnection.php';
include 'src/components/Icons.php';

// SQL query to fetch data
$sql = "SELECT * FROM admin"; // Adjust table & columns as needed
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

    $row = $result->fetch_assoc();

    // // Assign values to variables
    $Name = $row['name'];
    $Username = $row['username'];
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
                <p class='text-[1.2vw]'>Instructor/Admin</p>
                <p class='text-[1.1vw]'><?php echo $Username; ?></p>
                <p class='text-[1vw]'><?php echo $Num; ?></p>
                <div class='flex justify-end items-end'>
                    <button class='EditButton'><?php echo $Icon_Edit ?></button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-------------------- Profile Edit Div -------------------->

<div class='ProfileChange flex items-center justify-center absolute w-100 h-100'>
        <form action="adminDash.php" method="post">
            <div class='flex w-100 items-end'>
                <button class='CloseButton'><?php echo $Icon_Close; ?></button>
            </div>
            <div>
                <label for="profilelink">Profile url</label>
                <input type="text" name="profilelink" required>
            </div>
            <div>
                <label for="name">Your Name</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label for="username">Username</label>
                <input type="text" name="username" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" required>
            </div>
            <div class='items-center'>
                <button class='submitButton' type="submit">Submit</button>
            </div>
        </form>
</div>

<script>
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
</script>