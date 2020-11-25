
 <table>
    <thead>
            <tr>
                <th>role_id</th>
                <th>menu_id</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>tool</th>
            </tr>
    </thead>
    <tbody>
    
    <?php
while ($row=mysqli_fetch_array($data['listdata']))
echo "<tr>
           <td>".$row['role_id']."</td>
           <td>".$row['menu_id']."</td>
           <td>".$row['created_at']."</td>
           <td>".$row['updated_at']."</td>
           <td><a href='AdminRoleMenuController/edit/" . $row["role_id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='AdminRoleMenuController/delete/" . $row["role_id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="AdminRoleMenuController/create">Create</a></button