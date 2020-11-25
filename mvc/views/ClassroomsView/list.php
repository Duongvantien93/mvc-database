
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>learning_facility_id</th>
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
            <td>".$row['title']."</td>
           <td>".$row['description']."</td>
           <td>".$row['learning_facility_id']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='ClassroomsController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='ClassroomsController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="ClassroomsController/create">Create</a></button