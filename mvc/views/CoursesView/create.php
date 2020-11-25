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
    <form method="POST" action="../CoursesController/add">
        <div class="form-group">
        <label for="">ID : </label>
            <input type="number" name="id" class="form-control" placeholder="Nhập id">
        </div>
        <div class=form-group>
        <label for="">Title : </label>
            <input type="text" name="title" class="form-control" placeholder="Nhập title">
        </div>
        <div class="form-group">
        <label for="">feature_image : </label>
            <input type="text" name="feature_image" class="form-control" placeholder="Nhập feature_image" >
        </div>
        <div class="form-group">
        <label for="">Description : </label>
            <input type="text" name="description" class="form-control" placeholder="Nhập description">
        </div>
        <div class=form-group>
        <label for="">Status : </label>
            <input type="text" name="status" class="form-control" placeholder="Nhập status">
        </div>
        <div class="form-group">
        <label for="">Price : </label>
            <input type="number" name="price" class="form-control" placeholder="Nhập Price" >
        </div>
        <div class="form-group">
        <label for="">Promotion_price : </label>
            <input type="number" name="promotion_price" class="form-control" placeholder="Nhập promotion_price">
        </div>
    
        <div class="form-group">
        <label for="">Detail : </label>
            <input type="text" name="detail" class="form-control" placeholder="Nhập detail">
        </div> 
        <div class="form-group">
        <label for="">Is_free : </label>
            <input type="number" name="is_free" class="form-control" placeholder="Nhập is_free">
        </div> 
        <div class="form-group">
        <label for="">Number_sessions : </label>
            <input type="number" name="number_sessions" class="form-control" placeholder="Nhập number_sessions">
        </div> 
        <div class="form-group">
        <label for="">Total_day : </label>
            <input type="number" name="total_day" class="form-control" placeholder="Nhập total_day">
        </div> 
        <div class="form-group">
        <label for="">Day_per_week : </label>
            <input type="number" name="day_per_week" class="form-control" placeholder="Nhập day_per_week">
        </div> 
        <div class="form-group">
        <label for="">min_student : </label>
            <input type="number" name="min_student" class="form-control" placeholder="Nhập min_student">
        </div> 
        <div class=form-group>
        <label for="">max_student : </label>
            <input type="number" name="max_student" class="form-control" placeholder="Nhập max_student">
        </div> 
        <div class="form-group">
        <label for="">participants : </label>
            <input type="text" name="participants" class="form-control" placeholder="Nhập participants">
        </div> 
        <div class="form-group">
        <label for="">results : </label>
            <input type="text" name="results" class="form-control" placeholder="Nhập results">
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