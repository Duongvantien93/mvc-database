
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>image</th>
                <th>url</th>
                <th>status</th>
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
            <td>".$row['image']."</td>
           <td>".$row['url']."</td>
           <td>".$row['status']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='LogosController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='LogosController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="LogosController/create">Create</a></button