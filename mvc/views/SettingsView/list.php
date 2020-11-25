
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>status</th>
                <th>code</th>
                <th>content</th>
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
           <td>".$row['status']."</td>
           <td>".$row['code']."</td>
           <td>".$row['content']."</td>
           <td>".$row['created_at']."</td>
           <td>".$row['updated_at']."</td>
           <td><a href='SettingsController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='SettingsController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="SettingsController/create">Create</a></button