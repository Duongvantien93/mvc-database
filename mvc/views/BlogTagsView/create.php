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
    <form class="form-horizontal" method="POST" action="../BlogTagsController/add">
        <div class="form-group">
        <label >id: </label>
            <input type="number" name="id" class="form-control" placeholder="Nhập id">
        </div>
        <div class="form-group">
            <label for="">blog_id : </label>
             <select class="form-control" name="blog_id">
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
        <label for="">Alias : </label>
            <input type="text" name="alias" class="form-control" placeholder="Nhập alias">
        </div>
        <div class=form-group>
            <label for="">Created_at : </label>
            <input type="datetime-local" name="created_at" class="form-control" placeholder="Nhập created_at">
        </div>
        <div class="form-group">
         <label for="">Updated_at : </label>
            <input type="datetime-local" name="updated_at" class="form-control" placeholder="Nhập updated_at" >
        </div>
        <div class=form-group>
        <label for="">Deleted_at : </label>
            <input type="datetime-local" name="deleted_at" class="form-control" placeholder="Nhập deleted_at">
        </div>
        <div class="form-group">
            <button style="" name="addpost" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>