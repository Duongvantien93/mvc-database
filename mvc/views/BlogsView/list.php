
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>category_id</th>
                <th>title</th>
                <th>alias</th>
                <th>type</th>
                <th>images</th>
                <th>description</th>
                <th>detail</th>
                <th>meta_description</th>
                <th>meta_keyword</th>
                <th>source</th>
                <th>status</th>
                <th>published_at</th>
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
            <td>".$row['category_id']."</td>
           <td>".$row['title']."</td>
           <td>".$row['alias']."</td>
           <td>".$row['type']."</td>
            <td>".$row['images']."</td>
           <td>".$row['description']."</td>
           <td>".$row['detail']."</td>
           <td>".$row['meta_description']."</td>
           <td>".$row['meta_keyword']."</td>
           <td>".$row['source']."</td>
            <td>".$row['status']."</td>
           <td>".$row['published_at']."</td>
           <td>".$row['deleted_at']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='BlogsController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='BlogsController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="BlogsController/create">Create</a></button