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
    <form class="form-horizontal" method="POST" action="../CodesController/add">
        <div class="form-group">
        <label >ID: </label>
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
        <label for="">Codes : </label>
            <input type="text" name="code" class="form-control" placeholder="Nhập code" >
        </div>
        <div class="form-group">
        <label for="">Status : </label>
            <input type="number" name="status" class="form-control" placeholder="Nhập status">
        </div>
        <div class=form-group>
            <label for="">Created_at : </label>
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