
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>alias</th>
                <th>parent_id</th>
                <th>image</th>
                <th>meta_description</th>
                <th>meta_keyword</th>
                <th>status</th>
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
           <td>".$row['parent_id']."</td>
           <td>".$row['image']."</td>
           <td>".$row['meta_description']."</td>
           <td>".$row['meta_keyword']."</td>
            <td>".$row['status']."</td>
           <td>".$row['deleted_at']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='BlogCategoriesController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='BlogCategoriesController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="BlogCategoriesController/create">Create</a></button