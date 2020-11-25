
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
<?php
$row1=mysqli_fetch_array($data['detail']);
?>
<h2>Thêm Mới Dữ Liệu</h2>
    <form method="POST" action="../update">
    
        <div class=form-group>
        <label for="">ID : </label>
            <input type="number" name="id" class="form-control"  value="<?php echo $row1['id']?>">
        </div>
        <div class="form-group">
        <label for="">Blog_id : </label>
       <select class="form-control" name="blog_id">
        <?php
            while ($row=mysqli_fetch_array($data['list']))
                echo "<option value=".$row['id'].">".$row['name']."</option>";
                
        ?>
        </select>  
        </div>
        <div class="form-group">
        <label for="">Name : </label>
            <input type="text" name="name" class="form-control"  value="<?php echo $row1['name']; ?>">
        </div>
        <div class=form-group>
        <label for="">Alias : </label>
            <input type="text" name="alias" class="form-control"  value="<?php echo $row1['alias']?>">
        </div>
        <div class="form-group">
        <label for="">Update_at : </label>
            <input type="datetime-local" name="updated_at" class="form-control"  value="<?php echo $row1['updated_at']; ?>">
        </div> 
        <div class=form-group>
        <label for="">Created_at : </label>
            <input type="datetime-local" name="created_at" class="form-control"  value="<?php echo $row1['created_at']?>">
        </div>
        <div class="form-group">
        <label for="">Deleted_at : </label>
            <input type="datetime-local" name="deleted_at" class="form-control"  value="<?php echo $row1['deleted_at']; ?>">
        </div>
        <div class="form-group">
            <button style="" name="update" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>




</form>


