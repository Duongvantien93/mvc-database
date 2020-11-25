
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
echo $row1['created_at'];
?>
<h2>Thêm Mới Dữ Liệu</h2>
    <?php echo $row1['created_at']; ?>
    <form method="POST" action="../update">
        <div class="form-group">
            <select  type="hiden" class="form-control" name="role_id">
                <?php
                    while ($row=mysqli_fetch_array($data['admin_roles']))
                        echo "<option value=".$row['id'].">".$row['name']."</option>";
            ?>
            </select>  
        </div>
        <div class=form-group>
            <select type="hiden" class="form-control" name="menu_id" >
            <?php
                while ($row=mysqli_fetch_array($data['admin_menu']))
                echo "<option value=".$row['id'].">".$row['title']."</option>";
            ?>
            </select>
        </div>
        <div class="form-group">
            <input type="datetime-local" name="created_at" class="form-control"  value="<?php echo $row1['created_at']; ?>">
        </div>
        <div class="form-group">
            <input type="datetime-local" name="updated_at" class="form-control"  value="<?php echo $row['updated_at'];echo $row1['role_id']?>">
        </div>
        <div class="form-group">
            <button style="" name="update" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>




</form>


