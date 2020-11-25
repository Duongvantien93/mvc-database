
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>email</th>
                <th>email_verified_at</th>
                <th>password</th>
                <th>remember_token</th>
                <th>class_id</th>
                <th>type</th>
                <th>phone</th>
                <th>status</th>
                <th>address</th>
                <th>facebook</th>
                <th>note</th>
                <th>register_course_id</th>
                <th>price_id</th>
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
           <td>".$row['email']."</td>
           <td>".$row['email_verified_at']."</td>
           <td>".$row['password']."</td>
            <td>".$row['remember_token']."</td>
           <td>".$row['class_id']."</td>
           <td>".$row['type']."</td>
           <td>".$row['phone']."</td>
           <td>".$row['status']."</td>
           <td>".$row['address']."</td>
            <td>".$row['facebook']."</td>
           <td>".$row['note']."</td>
           <td>".$row['register_course_id']."</td>
           <td>".$row['price_id']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='UsersController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='UsersController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="UsersController/create">Create</a></button