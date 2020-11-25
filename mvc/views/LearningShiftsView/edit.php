
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
    
        <div class=form-group>
            <input type="number" name="id" class="form-control"  value="<?php echo $row1['id']?>">
        </div>
        <div class=form-group>
            <input type="text" name="title" class="form-control"  value="<?php echo $row1['title']?>">
        </div>
        <div class="form-group">
            <input type="text" name="description" class="form-control"  value="<?php echo $row1['description']; ?>">
        </div>
        <div class=form-group>
            <input type="number" name="from_time" class="form-control"  value="<?php echo $row1['from_time']?>">
        </div>
        <div class="form-group">
            <input type="number" name="to_time" class="form-control"  value="<?php echo $row1['to_time']; ?>">
        </div>
        <div class=form-group>
            <input type="datetime-local" name="created_at" class="form-control"  value="<?php echo $row1['created_at']?>">
        </div>
        <div class="form-group">
            <input type="datetime-local" name="updated_at" class="form-control"  value="<?php echo $row1['updated_at']; ?>">
        </div>
        <div class="form-group">
            <button style="" name="update" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>




</form>


