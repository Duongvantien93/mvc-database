
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Alias</th>
                <th>Blog_id</th>
                <th>deleted_at</th>
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
           <td>".$row['alias']."</td>
           <td>".$row['blog_id']."</td>
           <td>".$row['deleted_at']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='BlogTagsController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='BlogTagsController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="BlogTagsController/create">Create</a></button