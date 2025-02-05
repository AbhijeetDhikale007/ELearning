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
?>

<!------------- Profile Content ------------->

<div class='DashContent w-100%'>
    <h1 class='arsenal-sc'>Profile</h1>
    <div>
        <div class='Profile'>
            <img src=<?php echo $Img; ?> alt="Profile">
            <div class='h-100 flex flex-col gap-16px'>
                <p><?php echo $Name; ?></p>
                <p class='text-0-6'>Student</p>
                <p class='text-0-6'><?php echo $Email; ?></p>
                <p class='text-0-48'><?php echo $Num; ?></p>
                <p class='text-0-48'><?php echo $Address; ?></p>
                <p class='text-0-48'><?php echo $College; ?></p>
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
                <label for="profilelink">Profile url</label>
                <input type="text" name="profilelink" required>
            </div>
            <div>
                <label for="name">Your Name</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" required>
            </div>
        </div>
        <div class='flex flex-row'>
            <div>
                <label for="number">Number</label>
                <input type="number" name="number" required>
            </div>
            <div>
                <label for="location">Location</label>
                <input type="text" name="location" required>
            </div>
            <div>
                <label for="college">College</label>
                <input type="text" name="college" required>
            </div>
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