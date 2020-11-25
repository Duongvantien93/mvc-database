<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Form HTML</title>
    <style>
    .permission {
        float:left;
        width:100%;
        height:250px;
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
    <form method="POST" action="../AdminMenuController/add">
        <div>
            <input type="text" name="title" placeholder="Nhập tiêu đề" required="true">
        </div>
        <div>
            <input type="number" name="parent_id" placeholder="Nhập parent id" required="true">
        </div>
        <div>
            <input type="text" name="icon" placeholder="Nhập icon" required="true">
        </div>
        <div>
            <input type="text" name="uri" placeholder="Nhập uri" >
        </div>
        <div>
            <input type="number" name="order" placeholder="Nhập oder" required="true">
        </div>
        
        <div >
            <textarea name="permission" placeholder="Nhập nội dung" class="permission"></textarea>
        </div>
        <div>
            <button style="" type="submit">Lưu</button>
        </div>
    </form>
</body>
</html>