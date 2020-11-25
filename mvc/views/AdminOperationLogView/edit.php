
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
<h2>Sửa Dữ Liệu</h2>
    <form method="POST" action="../update">
        <div>
            <input type="number" name="id" placeholder="Nhập id" required="true" value="<?php echo $row['id']; ?>">
        </div>
        <div>
            <input type="number" name="user_id" placeholder="Nhập user_id" required="true" value="<?php echo $row['user_id']; ?>">
        </div>
        <div>
            <input type="text" name="path" placeholder="Nhập path" required="true" value="<?php echo $row['path']; ?>">
        </div>
        <div>
            <input type="text" name="method" placeholder="Nhập method" required="true" value="<?php echo $row['method']; ?>">
        </div>
        <div>
            <input name="ip" placeholder="Nhập ip" required="true" value="<?php echo $row['ip']; ?>">
        </div>
        <div>
            <input type="number" name="created_at" placeholder="Nhập created_at" value="<?php echo $row['created_at']; ?>">
        </div>
        <div>
            <input type="number" name="updated_at" placeholder="Nhập updated_at" value="<?php echo $row['updated_at']; ?>">
        </div>
        
        <div >
            <textarea name="input" placeholder="Nhập input" class="permission" value="<?php echo $row['input']; ?>"></textarea>
        </div>
        <div>
            <button style="" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>




</form>


