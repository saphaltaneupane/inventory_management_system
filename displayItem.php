<?php 
include "menu.php";
include "dbConnection.php";
$q= "select id, itemName,price,stock,remarks from item";
$result=mysqli_query($con,$q);
?>
<div class="main-content">
    <div class="title">
        Display Items
    </div>
    <div class="content">
        <table border=1 class="display_table">
            <tr>
                <th>id</th>
                <th>Item Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Remarks</th>
                <th>Action</th>
            </tr>
            <?php
            while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
                $id=$row[0];
                echo "<tr>";
                foreach($row as $v){
                    echo "<td> $v </td>";
                }
                echo "<td><a class='btn delete' href='deleteItem.php?id=$id' onclick='return confirm(\"Are you sure to delete?\");'>Delete</a></td>";
                echo "</tr>";
            }
            ?>
            </table>
        </div>
        </div>

            

        