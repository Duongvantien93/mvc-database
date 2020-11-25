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
    <form method="POST" action="../AdminUsersController/add">
        <div class="form-group">
            <input type="number" name="id" class="form-control" placeholder="Nhập id">
        </div>
        <div class=form-group>
            <input type="text" name="username" class="form-control" placeholder="Nhập username">
        </div>
        <div class=form-group>
            <input type="password" name="password" class="form-control" placeholder="Nhập password">
        </div>
        <div class=form-group>
            <input type="text" name="name" class="form-control" placeholder="Nhập name">
        </div>
        <div class=form-group>
            <input type="text" name="avatar" class="form-control" placeholder="Nhập avatar">
        </div>
        <div class=form-group>
            <input type="text" name="remember_token" class="form-control" placeholder="Nhập remember-token">
        </div>
        <div class="form-group">
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