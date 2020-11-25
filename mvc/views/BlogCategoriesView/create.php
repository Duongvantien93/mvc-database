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
    <form method="POST" action="../BlogCategoriesController/add">
        <div class="form-group">
            <input type="number" name="id" class="form-control" placeholder="Nhập id">
        </div>
        <div class=form-group>
            <input type="text" name="name" class="form-control" placeholder="Nhập name">
        </div>
        <div class="form-group">
            <input type="text" name="alias" class="form-control" placeholder="Nhập alias" >
        </div>
        <div class="form-group">
            <input type="number" name="parent_id" class="form-control" placeholder="Nhập parnt_id">
        </div>
        <div class=form-group>
            <input type="text" name="image" class="form-control" placeholder="Nhập image">
        </div>
        <div class="form-group">
            <input type="text" name="meta_description" class="form-control" placeholder="Nhập meta_description" >
        </div>
        <div class="form-group">
            <input type="text" name="meta_keyword" class="form-control" placeholder="Nhập meta_keyword">
        </div>
    
        <div class="form-group">
            <input type="text" name="status" class="form-control" placeholder="Nhập status">
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