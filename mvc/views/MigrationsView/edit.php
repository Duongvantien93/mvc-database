
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
var_dump($row1);
?>
<h2>Thêm Mới Dữ Liệu</h2>
    <form method="POST" action="../update">
    
        <div class=form-group>
            <input type="number" name="id" class="form-control"  value="<?php echo $row1['id']?>">
        </div>
        <div class=form-group>
            <input type="text" name="migration" class="form-control"  value="<?php echo $row1['migration']?>">
        </div>
        <div class="form-group">
            <input type="number" name="batch" class="form-control"  value="<?php echo $row1['batch']; ?>">
        </div>
        <div class="form-group">
            <button style="" name="update" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>




</form>


