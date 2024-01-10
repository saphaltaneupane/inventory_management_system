<?php
include "menu.php";
include "dbConnection.php";
?>
<div class="signup-container">
    <div class="signup-box">
      <h1>Signup</h1>
      <form>
    
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>

        
        <button type="submit">Signup</button>
      </form>
    </div>
  </div>
