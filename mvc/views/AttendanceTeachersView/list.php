
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>Class Id</th>
                <th>Teacher Id</th>
                <th>Time</th>
                <th>Number</th>
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
            <td>".$row['class_id']."</td>
           <td>".$row['teacher_id']."</td>
           <td>".$row['time']."</td>
           <td>".$row['number']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='AttendanceTeachersController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='AttendanceTeachersController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="AttendanceTeachersController/create">Create</a></button