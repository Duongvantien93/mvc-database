
 <table>
    <thead>
            <tr>
                <th>stt</th>
                <th>user_id</th>
                <th>path</th>
                <th>method</th>
                <th>ip</th>
                <th>input</th>
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
           <td>".$row['user_id']."</td>
           <td>".$row['path']."</td>
           <td>".$row['method']."</td>
           <td>".$row['ip']."</td>
           <td>".$row['input']."</td>
           <td>".$row['created_at']."</td>
           <td>".$row['updated_at']."</td>

           <td><a href='AdminOperationLogController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='AdminOperationLogController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="AdminOperationLogController/create">Create</a></button