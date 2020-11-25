
 <table>
    <thead>
            <tr>
                <th>stt</th>
                <th>tiêu đề</th>
                <th>icon</th>
                <th>parent_id</th>
                <th>permission</th>
                <th>tool</th>
            </tr>
    </thead>
    <tbody>
    <?php
while ($row=mysqli_fetch_array($data['listdata']))
echo "<tr>
           <td>".$row['id']."</td>
           <td>".$row['title']."</td>
           <td>".$row['icon']."</td>
           <td>".$row['parent_id']."</td>
           <td>".$row['permission']."</td>
           <td><a href='AdminMenuController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='AdminMenuController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="AdminMenuController/create">Create</a></button