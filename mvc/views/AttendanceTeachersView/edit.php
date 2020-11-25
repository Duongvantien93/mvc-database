
    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form HTML</title>
    <style>
    .permission {
        float:left;
        width:100%;
        height:200px;
    }
    input {
        margin-bottom:5px;
        height:25px;
        width:50%
    }
    
    </style>
</head>
<body>
<?php
$row1=mysqli_fetch_array($data['detail']);
?>
<h2>Thêm Mới Dữ Liệu</h2>
    <form method="POST" action="../update">
    
    <div class="form-group">
         <label for="">ID : </label>
            <input type="number" name="id" class="form-control"   value="<?php echo $row1['id']?>">
        </div>
        <div class="form-group">
         <label for="">Class : </label>
         <select class="form-control" name="class_id">
            <?php
                while ($row=mysqli_fetch_array($data['classes']))
                    echo "<option value=".$row['id'].">".$row['title']."</option>";
                    
            ?>
            </select>  
        </div>
        <div class="form-group">
         <label for="">Teachers: </label>
         <select class="form-control" name="teacher_id">
            <?php
                while ($row=mysqli_fetch_array($data['teachers']))
                    echo "<option value=".$row['id'].">".$row['full_name']."</option>";
                    
            ?>
            </select>  
        </div>

        <div class="form-group">
            <label for="">Time : </label>
                <input type="number" name="time" class="form-control"   value="<?php echo $row1['time']?>" >
        </div>
        <div class="form-group">
            <label for="">Number : </label>
            <input type="number" name="number" class="form-control"   value="<?php echo $row1['number']?>">
        </div>
        <div class=form-group>
        <label for=""> Created_at : </label>
            <input type="datetime-local" name="created_at" class="form-control"  value="<?php echo $row1['created_at']?>">
        </div>
        <div class="form-group">
            <label for="">Updated_at : </label>
            <input type="datetime-local" name="updated_at" class="form-control"  value="<?php echo $row1['updated_at']?>" >
        </div>
        <div class="form-group">
            <button style="" name="update" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>




</form>


