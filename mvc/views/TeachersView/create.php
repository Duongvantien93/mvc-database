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
    <form method="POST" action="../TeachersController/add">
        <div class="form-group">
         <label for="">ID : </label>
            <input type="number" name="id" class="form-control" placeholder="Nhập id">
        </div>
        <div class="form-group">
            <label for="">Full Name : </label>
                <input type="text" name="full_name" class="form-control" placeholder="Nhập full name" >
        </div>
        <div class="form-group">
            <label for="">Avatar : </label>
            <input type="text" name="avatar" class="form-control" placeholder="Nhập avatar">
        </div>
        <div class="form-group">
            <label for="">Job : </label>
            <input type="text" name="job" class="form-control" placeholder="Nhập job">
        </div>


        <div class="form-group">
            <label for="">Fb : </label>
            <input type="text" name="fb" class="form-control" placeholder="Nhập fb">
        </div>
        <div class="form-group">
            <label for="">Twitter : </label>
            <input type="text" name="twitter" class="form-control" placeholder="Nhập twitter">
        </div>
        <div class="form-group">
            <label for="">Note : </label>
            <input type="text" name="note" class="form-control" placeholder="Nhập note">
        </div>
        <div class="form-group">
            <label for="">Status : </label>
            <input type="number" name="status" class="form-control" placeholder="Nhập status">
        </div>
        <div class=form-group>
        <label for=""> Created_at : </label>
            <input type="datetime-local" name="created_at" class="form-control" placeholder="Nhập created_at">
        </div>
        <div class="form-group">
            <label for="">Updated_at : </label>
            <input type="datetime-local" name="updated_at" class="form-control" placeholder="Nhập updated_at" >
        </div>
        <div class="form-group">
            <button style="" name="addpost" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>