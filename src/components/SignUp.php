<?php
    if (isset($_POST["submit"])) {
        $Name = $_POST["name"];
        $Email = $_POST["email"];
        $Password = $_POST["password"];
        $re_Password = $_POST["re_password"];

        $errors = array();

        if(empty($Name) OR empty($Email) OR empty($Password) OR empty($re_Password)) {
            array_push($errors, "All fields must be filled.");
        }

        if(!filter_var($Email, FILTER_VALIDATE)) {
            array_push($errors, "Email is not valid.");
        }

        if(strlen($Password)<8) {
            array_push($errors, "Password must contain atleast 8 characters.");
        }

        if($Password != $re_Password) {
            array_push($errors, "Password does not match.");
        }

        if(count($errors>0)) {
            foreach($errors as $error) {
                echo "<div class='ErrorDiv'>$error</div>";
            }
        }

        else {
            ;
        }
    }
?>

<div class='SignUp'>
    <h1 class='Heading'>Welcome</h1>
    <form action="SignUp.php" method="post">
        <?php
            
        ?>
        <div class='flex w-100 flex-col relative items-center justify-center'>
            <label for="name">Name</label>
            <input type="text" name="name" required>
        </div>
        <div class='flex w-100 flex-col relative items-center justify-center'>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div class='flex w-100 flex-col relative items-center justify-center'>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <div class='flex w-100 flex-col relative items-center justify-center'>
            <label for="re_password">Confirm Password</label>
            <input type="password" name="re_password" required>
        </div>
        <a href="/Elearning/login.php">Already Have An Account?</a>
        <div class='flex justify-between h-fit w-100 items-baseline flex-wrap'>
            <button class='FormButton' type="submit">Login</button>
            <a href="/Elearning/adminlogin">Admin Login</a>
        </div>
    </form>
</div>