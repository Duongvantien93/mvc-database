
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
        <div class=form-group>
        <label for="">Title : </label>
            <input type="text" name="title" class="form-control"  value="<?php echo $row1['title']?>">
        </div>
        <div class="form-group">
        <label for="">Feature_image : </label>
            <input type="text" name="feature_image" class="form-control"  value="<?php echo $row1['feature_image']; ?>">
        </div>
        <div class=form-group>
        <label for="">Description : </label>
            <input type="text" name="description" class="form-control"  value="<?php echo $row1['description']?>">
        </div>
        <div class=form-group>
        <label for="">status :</label>
            <input type="number" name="status" class="form-control"  value="<?php echo $row1['status']?>">
        </div>
        <div class=form-group>
        <label for="">Price :</label>
            <input type="number" name="price" class="form-control"  value="<?php echo $row1['price']?>">
        </div>
        <div class=form-group>
        <label for="">Promotion_price :</label>
            <input type="number" name="promotion_price" class="form-control"  value="<?php echo $row1['promotion_price']?>">
        </div>
        <div class=form-group>
        <label for="">Detail:</label>
            <input type="text" name="detail" class="form-control"  value="<?php echo $row1['detail']?>">
        </div>

        <div class="form-group">
        <label for="">Is-Free :</label>
            <input type="number" name="is_free" class="form-control"  value="<?php echo $row1['is_free']; ?>">
        </div>
        <div class=form-group>
        <label for="">Number-sessions :</label>
            <input type="number" name="number_sessions" class="form-control"  value="<?php echo $row1['number_sessions']?>">
        </div>
        <div class=form-group>
        <label for="">Total_day : </label>
            <input type="number" name="total_day" class="form-control"  value="<?php echo $row1['total_day']?>">
        </div>
        <div class=form-group>
        <label for="">Day_per_week : </label>
            <input type="number" name="day_per_week" class="form-control"  value="<?php echo $row1['day_per_week']?>">
        </div>
        <div class=form-group>
        <label for="">Min_student : </label>
            <input type="number" name="min_student" class="form-control"  value="<?php echo $row1['min_student']?>">
        </div>
        <div class=form-group>
         <label for="">Max_student : </label>
            <input type="number" name="max_student" class="form-control"  value="<?php echo $row1['max_student']?>">
        </div>
        <div class=form-group>
        <label for="">Participants</label>
            <input type="text" name="participants" class="form-control"  value="<?php echo $row1['participants']?>">
        </div>
        <div class=form-group>
        <label for="">Results</label>
            <input type="text" name="results" class="form-control"  value="<?php echo $row1['results']?>">
        </div>
        <div class="form-group">
        <label for="">Updated_at : </label>
            <input type="datetime-local" name="updated_at" class="form-control"  value="<?php echo $row1['updated_at']; ?>">
        </div>
         <div class=form-group>
         <label for="">Created_at : </label>
            <input type="datetime-local" name="created_at" class="form-control"  value="<?php echo $row1['created_at']?>">
        </div>
        <div class="form-group">
            <button style="" name="update" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>




</form>


