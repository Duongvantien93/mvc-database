
 <h2>Danh Sách Dữ Liệu</h2>
 <table>
    <thead>
            <tr>
                <th>permission_id</th>
                <th>user_id</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>tool</th>
            </tr>
    </thead>
    <tbody>
    
    <?php
while ($row=mysqli_fetch_array($data['listdata']))
echo "<tr>
           <td>".$row['permission_id']."</td>
           <td>".$row['user_id']."</td>
           <td>".$row['created_at']."</td>
           <td>".$row['updated_at']."</td>
           <td><a href='AdminUserPermissionsController/edit/" . $row["user_id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='AdminUserPermissionsController/delete/" . $row["user_id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="AdminUserPermissionsController/create">Create</a></button