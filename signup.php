<?php
include "menu.php";
?>
<div class="main-content">
    <div class="title">
        Signup User
    </div>
    <div class="content" id='content'>
        <form action="sth.php" method="POST" id="myform">
        <label>Username</label>
        <input type="text" name="username">
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit" value="signup" class="btn success" id="submitbtn" name="">
        <input type="reset" class="btn delete" name="">

        </form> 
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $("#submitbtn").click(function(e){
            e.preventDefault();
           
            var data=$("#myform").serializeArray();
            console.log(data);
            $.ajax({
                url:"insertUser.php",
                method:"post",
                data:data,
                beforeSend:function(){
                    $("#content").empty();
                    $("#content").html('<div class="loader"></div>');
                },
                success:function(response){
                    $("#content").empty();
                    $("#content").html(response);
                },
                error:function(error){
                    alert("error");
                }
            
            });
        });
    });
    
    </script>