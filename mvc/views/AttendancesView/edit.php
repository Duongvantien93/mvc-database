
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
         <label for="">Users: </label>
         <select class="form-control" name="user_id">
            <?php
                while ($row=mysqli_fetch_array($data['users']))
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                    
            ?>
            </select>  
        </div>

        <div class="form-group">
            <label for="">Attendance_info : </label>
                <input type="text" name="attendance_info" class="form-control"   value="<?php echo $row1['attendance_info']?>" >
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

