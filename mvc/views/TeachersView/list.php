
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>Full Name</th>
                <th>avatar</th>
                <th>Job</th>
                <th>fb</th>
                <th>Twitter</th>
                <th>Note</th>
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
            <td>".$row['full_name']."</td>
           <td>".$row['avatar']."</td>
           <td>".$row['job']."</td>
           <td>".$row['fb']."</td>
            <td>".$row['twitter']."</td>
           <td>".$row['note']."</td>
            <td>".$row['status']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='TeachersController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='TeachersController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="TeachersController/create">Create</a></button