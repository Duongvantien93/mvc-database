
 <table>
    <thead>
            <tr>
                <th>email</th>
                <th>token</th>
                <th>created_at</th>
                <th>tool</th>
            </tr>
    </thead>
    <tbody>
    
    <?php
while ($row=mysqli_fetch_array($data['listdata']))
echo "<tr>
           <td>".$row['email']."</td>
             <td>".$row['token']."</td>
           <td>".$row['created_at']."</td>
           <td><a href='PasswordResetsController/edit/" . $row["email"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='PasswordResetsController/delete/" . $row["email"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="PasswordResetsController/create">Create</a></button