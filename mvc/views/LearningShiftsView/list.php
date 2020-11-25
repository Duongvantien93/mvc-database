
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>description</th>
                <th>from_time</th>
                <th>to_time</th>
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
           <td>".$row['from_time']."</td>
           <td>".$row['to_time']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='LearningShiftsController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='LearningShiftsController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="LearningShiftsController/create">Create</a></button