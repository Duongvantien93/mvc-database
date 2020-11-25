
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>address</th>
                <th>hotline</th>
                <th>note</th>
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
           <td>".$row['address']."</td>
           <td>".$row['hotline']."</td>
           <td>".$row['note']."</td>
           <td>".$row['status']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='LearningFacilitiesController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='LearningFacilitiesController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="LearningFacilitiesController/create">Create</a></button