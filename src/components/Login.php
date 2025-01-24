<?php

?>

<div class='Login'>
    <h1 class='Heading'>Welcome Back</h1>
    <form action="" method="get">
        <div class='flex w-100 flex-col relative items-center justify-center'>
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>
        <div class='flex w-100 flex-col relative items-center justify-center'>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>
        <a href="">Forgot Your Password?</a>
        <div class='flex flex-row justify-between w-100 items-baseline flex-wrap'>
            <button class='FormButton' type="submit">Login</button>
            <a href="/adminlogin">Admin Login</a>
        </div>
    </form>
</div>