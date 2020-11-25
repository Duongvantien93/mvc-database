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
    <form method="POST" action="../SubjectsController/add">
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
            <label for="">Name : </label>
                <input type="text" name="name" class="form-control" placeholder="Nhập name" >
        </div>
        <div class="form-group">
            <label for="">image : </label>
            <input type="text" name="image" class="form-control" placeholder="Nhập image">
        </div>
        <div class="form-group">
            <label for="">Description : </label>
            <input type="text" name="description" class="form-control" placeholder="Nhập description">
        </div>


        <div class="form-group">
            <label for="">Number_session : </label>
            <input type="text" name="Number_session" class="form-control" placeholder="Nhập Number_session">
        </div>
        <div class="form-group">
            <label for="">Price : </label>
            <input type="text" name="price" class="form-control" placeholder="Nhập price">
        </div>
        <div class="form-group">
            <label for="">Promotion_price : </label>
            <input type="text" name="promotion_price" class="form-control" placeholder="Nhập promotion_price">
        </div>
        <div class="form-group">
            <label for="">Is Free : </label>
            <input type="text" name="is_free" class="form-control" placeholder="Nhập is free">
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