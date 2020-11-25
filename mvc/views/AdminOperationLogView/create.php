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
    <form method="POST" action="../AdminOperationLogController/add">
        <div>
            <input type="number" name="id" placeholder="Nhập id" required="true">
        </div>
        <div>
            <input type="number" name="user_id" placeholder="Nhập user_id" required="true">
        </div>
        <div>
            <input type="text" name="path" placeholder="Nhập path" required="true">
        </div>
        <div>
            <input type="text" name="method" placeholder="Nhập method" required="true">
        </div>
        <div>
            <input name="ip" placeholder="Nhập ip" required="true">
        </div>
        <div>
            <input type="number" name="created_at" placeholder="Nhập created_at">
        </div>
        <div>
            <input type="number" name="updated_at" placeholder="Nhập updated_at" >
        </div>
        
        <div >
            <textarea name="input" placeholder="Nhập input" class="permission"></textarea>
        </div>
        <div>
            <button style="" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>