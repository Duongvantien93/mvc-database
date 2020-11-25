<?php
$row=mysqli_fetch_array($data['detail']);
?>
<h2>Sửa Dữ Liệu</h2>
    <form method="POST" action="../update">
        <div>
            <input type="text" name="title" placeholder="Nhập tiêu đề"  value="<?php echo $row['title'] ?>">
        </div>
        <div>
            <input type="number" name="parent_id" placeholder="Nhập parent id" required="true" value="<?php echo $row['parent_id']; ?>"/>
        </div>
        <div>
            <input type="text" name="icon" placeholder="Nhập icon" required="true" value="<?php echo $row['icon']; ?>"/>
        </div>
        <div>
            <input type="text" name="uri" placeholder="Nhập uri"  value="<?php echo $row['uri']; ?>">
        </div>
        <div>
            <input type="number" name="order" placeholder="Nhập order" required="true" value="<?php echo $row['order']; ?>">
        </div>
        
        <div >
            <textarea name="permission" placeholder="Nhập nội dung"  value="<?php echo $row['permission']; ?>"></textarea>
        </div>
       
        <input type="hiden" name="id" value="<?php echo $row['id']; ?>">
        <button type='submit'>Lưu</button>
    </form>





</form>


