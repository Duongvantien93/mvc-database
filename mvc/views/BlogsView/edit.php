
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
            <input type="number" name="id" class="form-control"  value="<?php echo $row1['id']?>">
        </div>
        <div class="form-group">
       <select class="form-control" name="ct">
        <?php
            while ($row=mysqli_fetch_array($data['list']))
                echo "<option value=".$row['id'].">".$row['name']."</option>";
                
        ?>
        </select>  
        </div>
        <div class="form-group">
            <input type="text" name="title" class="form-control"  value="<?php echo $row1['title']; ?>">
        </div>
        <div class=form-group>
            <input type="text" name="alias" class="form-control"  value="<?php echo $row1['alias']?>">
        </div>
        <div class=form-group>
            <input type="text" name="type" class="form-control"  value="<?php echo $row1['type']?>">
        </div>
        <div class="form-group">
            <input type="text" name="images" class="form-control"  value="<?php echo $row1['images']; ?>">
        </div>
        <div class=form-group>
            <input type="text" name="description" class="form-control"  value="<?php echo $row1['description']?>">
        </div>
        <div class=form-group>
            <input type="text" name="detail" class="form-control"  value="<?php echo $row1['detail']?>">
        </div>  
        <div class=form-group>
            <input type="text" name="meta_description" class="form-control"  value="<?php echo $row1['meta_description']?>">
        </div>
        <div class=form-group>
            <input type="text" name="meta_keyword" class="form-control"  value="<?php echo $row1['meta_keyword']?>">
        </div>
        <div class="form-group">
            <input type="text" name="source" class="form-control"  value="<?php echo $row1['source']; ?>">
        </div>
        <div class=form-group>
            <input type="number" name="status" class="form-control"  value="<?php echo $row1['status']?>">
        </div>
        <div class=form-group>
            <input type="datetime-local" name="published_at" class="form-control"  value="<?php echo $row1['published_at']?>">
        </div>
        <div class="form-group">
            <input type="datetime-local" name="updated_at" class="form-control"  value="<?php echo $row1['updated_at']; ?>">
        </div> <div class=form-group>
            <input type="datetime-local" name="created_at" class="form-control"  value="<?php echo $row1['created_at']?>">
        </div>
        <div class="form-group">
            <input type="datetime-local" name="deleted_at" class="form-control"  value="<?php echo $row1['deleted_at']; ?>">
        </div>
        <div class="form-group">
            <button style="" name="update" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>




</form>


