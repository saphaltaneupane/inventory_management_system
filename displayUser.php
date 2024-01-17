<?php 
include "menu.php";
if($_SESSION['username']!="admin"){
    die("only admin can access this page");
}
include "dbConnection.php";
$q= "select id,username,status from user";
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
                <th>Username</th>
                <th>Status</th>
                
                <th colspan="2">Action</th>
            </tr>
            <?php
            while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
                $id=$row[0];
                $status=$row[2];
                echo "<tr>";
                foreach($row as $v){
                    if($status=='active'){
                        echo "<td style='color:green'> $v </td>";

                    }
                    elseif($status=='suspend'){
                        echo "<td style='color:red'> $v </td>";
                    }
                    else{
                       echo "<td style='color:blue'> $v </td>";
                    }
                }
                    
                
               
                echo "<td><a class='btn delete' href='suspendUser.php?id=$id' onclick='return confirm(\"Are you sure to suspend?\");'>Suspend</a></td>";
                echo "<td><a class='btn success' href='activateUser.php?id=$id' onclick='return confirm(\"Are you sure to activate?\");'>Activate</a></td>";
                echo "</tr>";
            }
            ?>
            </table>
        </div>
        </div>

            

        