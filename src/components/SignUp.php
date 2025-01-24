<?php

?>

<div class='SignUp'>
    <h1 class='Heading'>Welcome</h1>
    <form action="" method="get">
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
            <label for="password">Confirm Password</label>
            <input type="password" name="password" required>
        </div>
        <a href="/Elearning/login.php">Already Have An Account?</a>
        <div class='flex justify-between h-fit w-100 items-baseline flex-wrap'>
            <button class='FormButton' type="submit">Login</button>
            <a href="/adminlogin">Admin Login</a>
        </div>
    </form>
</div>