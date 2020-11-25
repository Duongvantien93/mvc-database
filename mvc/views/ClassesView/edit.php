
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
    
    <div class="form-group">
         <label for="">ID : </label>
            <input type="number" name="id" class="form-control" value="<?php echo $row1['id']; ?>">
        </div>
        <div class="form-group">
         <label for="">Courses : </label>
         <select class="form-control" name="course_id">
            <?php
                while ($row=mysqli_fetch_array($data['courses']))
                    echo "<option value=".$row['id'].">".$row['title']."</option>";
                    
            ?>
            </select>  
        </div>
        <div class="form-group">
         <label for="">Learning Shifts : </label>
         <select class="form-control" name="learning_shift_id">
            <?php
                while ($row=mysqli_fetch_array($data['learningshifts']))
                    echo "<option value=".$row['id'].">".$row['title']."</option>";
                    
            ?>
            </select>  
        </div>
        <div class="form-group">
         <label for="">Classroom: </label>
         <select class="form-control" name="classroom_id">
            <?php
                while ($row=mysqli_fetch_array($data['classrooms']))
                    echo "<option value=".$row['id'].">".$row['title']."</option>";
                    
            ?>
            </select>  
        </div>
        <div class="form-group">
         <label for="">Users : </label>
         <select class="form-control" name="user_id">
            <?php
                while ($row=mysqli_fetch_array($data['users']))
                    echo "<option value=".$row['id'].">".$row['name']."</option>";
                    
            ?>
            </select>  
        </div>
        <div class="form-group">
            <label for="">Title : </label>
                <input type="text" name="title" class="form-control" value="<?php echo $row1['title']; ?>">
        </div>
        <div class="form-group">
            <label for="">Status : </label>
            <input type="number" name="status" class="form-control" value="<?php echo $row1['status']; ?>">
        </div>
        <div class="form-group">
            <label for="">Description : </label>
            <input type="text" name="description" class="form-control" value="<?php echo $row1['description']; ?>">
        </div>


        <div class="form-group">
            <label for="">Start learning date : </label>
            <input type="date" name="start_learning_date" class="form-control" value="<?php echo $row1['start_learning_date']; ?>">
        </div>
        <div class="form-group">
            <label for="">End learning date : </label>
            <input type="date" name="end_learning_date" class="form-control" value="<?php echo $row1['end_learning_date']; ?>">
        </div>
        <div class="form-group">
            <label for="">Day : </label>
            <input type="text" name="day" class="form-control" value="<?php echo $row1['day']; ?>">
        </div>
        <div class=form-group>
        <label for=""> Created_at : </label>
            <input type="datetime-local" name="created_at" class="form-control" value="<?php echo $row1['created_at']; ?>">
        </div>
        <div class="form-group">
            <label for="">Updated_at : </label>
            <input type="datetime-local" name="updated_at" class="form-control" value="<?php echo $row1['updated_at']; ?>">
        </div>
        <div class="form-group">
            <button style="" name="update" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>




</form>


