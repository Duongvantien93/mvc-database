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
    <form method="POST" action="../RegisterCoursesController/add">
        <div class="form-group">
         <label for="">ID : </label>
            <input type="number" name="id" class="form-control" placeholder="Nhập id">
        </div>
        <div class="form-group">
         <label for="">Course_id : </label>
         <select class="form-control" name="course_id">
            <?php
                while ($row=mysqli_fetch_array($data['list']))
                    echo "<option value=".$row['id'].">".$row['title']."</option>";
                    
            ?>
            </select>  
        </div>
        <div class="form-group">
            <label for="">Full name : </label>
                <input type="text" name="full_name" class="form-control" placeholder="Nhập full name" >
        </div>
        <div class="form-group">
            <label for="">email : </label>
            <input type="text" name="email" class="form-control" placeholder="Nhập email">
        </div>
        <div class="form-group">
            <label for="">phone : </label>
            <input type="text" name="phone" class="form-control" placeholder="Nhập phone">
        </div>


        <div class="form-group">
            <label for="">Birthday : </label>
            <input type="date" name="birthday" class="form-control" placeholder="Nhập birthday">
        </div>
        <div class="form-group">
            <label for="">Address : </label>
            <input type="text" name="address" class="form-control" placeholder="Nhập address">
        </div>
        <div class="form-group">
            <label for="">Job : </label>
            <input type="text" name="job" class="form-control" placeholder="Nhập job">
        </div>
        <div class="form-group">
            <label for="">Note : </label>
            <input type="text" name="note" class="form-control" placeholder="Nhập note">
        </div>
        <div class="form-group">
            <label for="">Status : </label>
            <input type="number" name="status" class="form-control" placeholder="Nhập status">
        </div>
        <div class="form-group">
            <label for="">Linkfb : </label>
            <input type="text" name="linkfb" class="form-control" placeholder="Nhập linkfb">
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