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
    <form method="POST" action="../UsersController/add">
        <div class="form-group">
         <label for="">ID : </label>
            <input type="number" name="id" class="form-control" placeholder="Nhập id">
        </div>
        <div class="form-group">
         <label for="">Class : </label>
         <select class="form-control" name="class_id">
            <?php
                while ($row=mysqli_fetch_array($data['class']))
                    echo "<option value=".$row['id'].">".$row['title']."</option>";
                    
            ?>
            </select>  
        </div>
        <div class="form-group">
         <label for="">Register: </label>
         <select class="form-control" name="register_course_id">
            <?php
                while ($row=mysqli_fetch_array($data['register_courses']))
                    echo "<option value=".$row['id'].">".$row['full_name']."</option>";
                    
            ?>
            </select>  
        </div>
        <div class="form-group">
         <label for="">Price: </label>
         <select class="form-control" name="price_id">
            <?php
                while ($row=mysqli_fetch_array($data['price']))
                    echo "<option value=".$row['id'].">".$row['title']."</option>";
                    
            ?>
            </select>  
        </div>
        <div class="form-group">
            <label for="">Name : </label>
                <input type="text" name="name" class="form-control" placeholder="Nhập name" >
        </div>
        <div class="form-group">
            <label for="">Email : </label>
            <input type="text" name="email" class="form-control" placeholder="Nhập email">
        </div>
        <div class="form-group">
            <label for="">Email_verified_at : </label>
            <input type="datetime-local" name="email_verified_at" class="form-control" placeholder="Nhập email_verified_at">
        </div>


        <div class="form-group">
            <label for="">Password : </label>
            <input type="text" name="password" class="form-control" placeholder="Nhập password">
        </div>
        <div class="form-group">
            <label for="">Remember_token : </label>
            <input type="text" name="remember_token" class="form-control" placeholder="Nhập remember_token">
        </div>
        <div class="form-group">
            <label for="">Type : </label>
            <input type="number" name="type" class="form-control" placeholder="Nhập type">
        </div>
        <div class="form-group">
            <label for="">Phone  : </label>
            <input type="text" name="phone" class="form-control" placeholder="Nhập phone">
        </div>
        <div class="form-group">
            <label for="">Status : </label>
            <input type="number" name="status" class="form-control" placeholder="Nhập status">
        </div>

        <div class="form-group">
            <label for="">Address  : </label>
            <input type="text" name="address" class="form-control" placeholder="Nhập address">
        </div>
        <div class="form-group">
            <label for="">Facebook  : </label>
            <input type="text" name="facebook" class="form-control" placeholder="Nhập facebook">
        </div>
        <div class="form-group">
            <label for="">Note  : </label>
            <input type="text" name="note" class="form-control" placeholder="Nhập note">
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