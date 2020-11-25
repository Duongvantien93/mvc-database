
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>course_id</th>
                <th>status</th>
                <th>description</th>
                <th>classroom_id</th>
                <th>learning_shift_id</th>
                <th>start_learning_date</th>
                <th>end_learning_date</th>
                <th>day</th>
                <th>user_id</th>
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
           <td>".$row['course_id']."</td>
           <td>".$row['status']."</td>
           <td>".$row['description']."</td>
            <td>".$row['classroom_id']."</td>
           <td>".$row['learning_shift_id']."</td>
           <td>".$row['start_learning_date']."</td>
           <td>".$row['end_learning_date']."</td>
           <td>".$row['day']."</td>
           <td>".$row['user_id']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='ClassesController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='ClassesController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="ClassesController/create">Create</a></button