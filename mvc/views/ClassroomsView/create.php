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
<h2>Thêm Mới Dữ Liệu</h2>
    <form method="POST" action="../ClassroomsController/add">
        <div class="form-group">
            <input type="number" name="id" class="form-control" placeholder="Nhập id">
        </div>
        <div class=form-group>
            <input type="text" name="title" class="form-control" placeholder="Nhập title">
        </div>
        <div class="form-group">
            <input type="text" name="description" class="form-control" placeholder="Nhập description" >
        </div>
        <div class="form-group">
       <select class="form-control" name="lf">
        <?php
            while ($row=mysqli_fetch_array($data['listlf']))
                echo "<option value=".$row['id'].">".$row['id']."</option>";
        
                
        ?>
        </select>  
        </div>
        <div class=form-group>
            <input type="datetime-local" name="created_at" class="form-control" placeholder="Nhập created_at">
        </div>
        <div class="form-group">
            <input type="datetime-local" name="updated_at" class="form-control" placeholder="Nhập updated_at" >
        </div>
        <div class="form-group">
            <button style="" name="addpost" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>