
 <table>
    <thead>
            <tr>
                <th>stt</th>
                <th>Name</th>
                <th>Slug</th>
                <th>http_method</th>
                <th>http_path</th>
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
           <td>".$row['name']."</td>
           <td>".$row['slug']."</td>
           <td>".$row['http_method']."</td>
           <td>".$row['http_path']."</td>
           <td>".$row['create_at']."</td>
           <td>".$row['updated_at']."</td>
           <td><a href='AdminPermissionsController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='AdminPermissionsController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="AdminPermissionsController/create">Create</a></button