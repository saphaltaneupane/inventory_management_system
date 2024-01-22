<?php


include "menu.php";
include "dbConnection.php";
$q = "SELECT * FROM itemdata";
$result=mysqli_query($con,$q);
?>

<div class="main-content">
    <div class="title">item entry form</div>
    <div class="content">
        <form action="check.php" method="POST" id="myform">
    <label>Item Name</label>
        <select name ="itemname" id="itemname">;
        <?php
        while($row=mysqli_fetch_array($result,MYSQLI_NUM))
        {
            $id=$row[0]
            $data=$row[1]
            echo "<option value ='$data'>$data</option>";
        }
        ?>
  </select>
  <select name="id" id="id" style="display:none">;
  <?php
      $result=mysqli_query($con,$q);
      while($row=mysqli_fetch_array($result,MYSQLI_NUM))
      {
        $id=$row[0]
        $data=$row[0]
        echo "<option value ='$data'>$data</option>";
      }
    
?>
</select>

<select name="price" id="price" style="display:none">;
  <?php
      $result=mysqli_query($con,$q);
      while($row=mysqli_fetch_array($result,MYSQLI_NUM))
      {
        $id=$row[0]
        $data=$row[2]
        echo "<option value ='$data'>$data</option>";
      }
      ?>
      </select>

      <label>quantity</label>
      <input type="text"  name="quantity">;
      <input type="submit" class="btn success" value="add to bill" id="btnsubmit">
</form>
</div>
<div id='table'></div>
</div>


<script type="text/javascript">
    var data=[];
    $(document).ready(function(){

        $("#itemname").change(function()
        {
            $("#id").prop("selectIndex", this.selectIndex);
            $("#price").prop("selectIndex", this.selectIndex);
        });


        $("#btnsubmit").click(function(event){
            event.preventdefault();
            var formData=$("myform").serializearray();
            data.push(formData);
            appenDataInTable();

        });

    })
    function appenDataInTable()
    {
var table='<table class="display_table"><tr><th>SN</th><th>Itemname</th><th>price</th><th>qunatity</th><th>Total</th></tr>';
var count=1;
data.forEach(function(d)
{
table+="<tr>";
table+="<td>"
table+=count++;
tabel+="</tr>"
})
$("#table").empty();
$("#table").html(table);

    }
    </script>


