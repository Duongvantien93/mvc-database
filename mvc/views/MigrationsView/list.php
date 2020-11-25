
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>migration</th>
                <th>batch</th>
                <th>tool</th>
            </tr>
    </thead>
    <tbody>
    
    <?php
while ($row=mysqli_fetch_array($data['listdata']))
echo "<tr>
           <td>".$row['id']."</td>
             <td>".$row['migration']."</td>
           <td>".$row['batch']."</td>
           <td><a href='MigrationsController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='MigrationsController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="MigrationsController/create">Create</a></button