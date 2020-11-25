
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>full name</th>
                <th>phone</th>
                <th>email</th>
                <th>course_id</th>
                <th>birthday</th>
                <th>address</th>
                <th>job</th>
                <th>note</th>
                <th>status name</th>
                <th>linkfb</th>
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
            <td>".$row['full_name']."</td>
           <td>".$row['phone']."</td>
           <td>".$row['email']."</td>
           <td>".$row['course_id']."</td>
            <td>".$row['birthday']."</td>
           <td>".$row['address']."</td>
           <td>".$row['job']."</td>
           <td>".$row['note']."</td>
            <td>".$row['status']."</td>
           <td>".$row['linkfb']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='RegisterCoursesController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='RegisterCoursesController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="RegisterCoursesController/create">Create</a></button