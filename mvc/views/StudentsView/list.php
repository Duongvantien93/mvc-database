
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>status</th>
                <th>avatar</th>
                <th>full_name</th>
                <th>job</th>
                <th>note</th>
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
           <td>".$row['avatar']."</td>
           <td>".$row['job']."</td>
           <td>".$row['note']."</td>
           <td>".$row['status']."</td>
           <td>".$row['created_at']."</td>
           <td>".$row['updated_at']."</td>
           <td><a href='StudentsController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='StudentsController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="StudentsController/create">Create</a></button