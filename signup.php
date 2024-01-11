<?php
include "menu.php";
include "dbConnection.php";
?>
<div class="main-content">
    <div class="title">
        Signup-Form
    </div>
    <div class="content">
        <form action="insertItem.php" method="POST">
        <label>Username</label>
        <input type="text" name="username">
        <label>Password</label>
        <input type="password" name="password">
        
        <input type="signup" class="btn success" name="">
        <input type="reset" class="btn delete" name="">

        </form> 
    </div>
</div>