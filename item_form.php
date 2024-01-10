<?php
include "menu.php";
?>
<div class="main-content">
    <div class="title">
        Item Entry Form
    </div>
    <div class="content">
        <form action="insertItem.php" method="POST">
        <label>Item Name</label>
        <input type="text" name="itemName">
        <label>Price</label>
        <input type="text" name="price">
        <label>Photo</label>
        <input type="file" name="photo">
        <label>Remarks</label>
        <textarea name="remarks" cols="50" rows="10"></textarea>
        <input type="submit" class="btn success" name="">
        <input type="reset" class="btn delete" name="">

        </form> 
    </div>
</div>