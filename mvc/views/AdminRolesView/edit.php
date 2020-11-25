
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
$row=mysqli_fetch_array($data['detail']);
?>
<h2>Thêm Mới Dữ Liệu</h2>
    <form method="POST" action="../update">
        <div>
            <input type="hiden" name="id" placeholder="Nhập id" required="true" value="<?php echo $row['id']; ?>">
        </div>
        <div>
            <input type="text" name="name" placeholder="Nhập name" required="true" value="<?php echo $row['name']; ?>">
        </div>
        <div>
            <input type="text" name="slug" placeholder="Nhập slug" required="true" value="<?php echo $row['slug']; ?>">
        </div>
        <div>
            <input type="number" name="create_at" placeholder="Nhập created_at" value="<?php echo $row['created_at']; ?>">
        </div>
        <div>
            <input type="number" name="updated_at" placeholder="Nhập updated_at" value="<?php echo $row['updated_at']; ?>">
        </div>
        <div>
            <button style="" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>




</form>


