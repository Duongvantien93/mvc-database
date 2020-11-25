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
    <form method="POST" action="../BlogsController/add">
        <div class="form-group">
            <input type="number" name="id" class="form-control" placeholder="Nhập id">
        </div>
        <div class="form-group">
             <select class="form-control" name="category_id">
                <?php
                    while ($row=mysqli_fetch_array($data['list']))
                        echo "<option value=".$row['id'].">".$row['name']."</option>";
                
                 ?>
            </select>  
        </div>
        <div class="form-group">
            <input type="text" name="title" class="form-control" placeholder="Nhập title" >
        </div>
        <div class="form-group">
            <input type="text" name="alias" class="form-control" placeholder="Nhập alias">
        </div>
        <div class=form-group>
            <input type="text" name="type" class="form-control" placeholder="Nhập type">
        </div>
        <div class="form-group">
            <input type="text" name="images" class="form-control" placeholder="Nhập images">
        </div>
        <div class=form-group>
            <input type="text" name="description" class="form-control" placeholder="Nhập description">
        </div>
        <div class=form-group>
            <input type="text" name="detail" class="form-control" placeholder="Nhập detail">
        </div>
        <div class="form-group">
            <input type="text" name="meta_description" class="form-control" placeholder="Nhập meta_description" >
        </div>
        <div class="form-group">
            <input type="text" name="meta_keyword" class="form-control" placeholder="Nhập meta_keyword">
        </div>
        <div class=form-group>
            <input type="text" name="source" class="form-control" placeholder="Nhập source">
        </div>
        <div class="form-group">
            <input type="text" name="status" class="form-control" placeholder="Nhập status">
        </div>
        <div class=form-group>
            <input type="datetime-local" name="published_at" class="form-control" placeholder="Nhập published_at">
        </div>
      
        <div class=form-group>
            <input type="datetime-local" name="created_at" class="form-control" placeholder="Nhập created_at">
        </div>
        <div class="form-group">
            <input type="datetime-local" name="updated_at" class="form-control" placeholder="Nhập updated_at" >
        </div>
        <div class=form-group>
            <input type="datetime-local" name="deleted_at" class="form-control" placeholder="Nhập deleted_at">
        </div>
        <div class="form-group">
            <button style="" name="addpost" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>