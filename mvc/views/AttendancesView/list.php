
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>Class Id</th>
                <th>User Id</th>
                <th>Attendance info</th>
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
           <td>".$row['user_id']."</td>
           <td>".$row['attendance_info']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='AttendancesController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='AttendancesController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="AttendancesController/create">Create</a></button