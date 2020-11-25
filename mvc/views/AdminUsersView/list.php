
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
                <th>namespace</th>
                <th>avatar</th>
                <th>remember_token</th>
                <th>created_at</th>
                <th>updated_at</th>
                <th>tool</th>
            </tr>
    </thead>
    <tbody>
    
    <?php
while ($row=mysqli_fetch_array($data['listdata']))
echo "<tr>
           <td>".$row['id']."</td>
           <td>".$row['username']."</td>
           <td>".$row['password']."</td>
           <td>".$row['name']."</td>
           <td>".$row['avatar']."</td>
           <td>".$row['remember_token']."</td>
           <td>".$row['created_at']."</td>
           <td>".$row['updated_at']."</td>
           <td><a href='AdminUsersController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='AdminUsersController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="AdminUsersController/create">Create</a></button