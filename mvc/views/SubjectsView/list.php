
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>course_id</th>
                <th>Number session</th>
                <th>Price</th>
                <th>Promotion Price</th>
                <th>Is free</th>
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
            <td>".$row['name']."</td>
           <td>".$row['image']."</td>
           <td>".$row['description']."</td>
           <td>".$row['course_id']."</td>
            <td>".$row['number_session']."</td>
           <td>".$row['price']."</td>
           <td>".$row['promotion_price']."</td>
           <td>".$row['is_free']."</td>
            <td>".$row['status']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='SubjectsController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='SubjectsController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="SubjectsController/create">Create</a></button