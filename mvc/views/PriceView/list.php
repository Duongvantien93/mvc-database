
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>price</th>
                <th>note</th>
                <th>title</th>
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
           <td>".$row['price']."</td>
           <td>".$row['note']."</td>
           <td>".$row['title']."</td>
           <td>".$row['created_at']."</td>
           <td>".$row['updated_at']."</td>
           <td><a href='PriceController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='PriceController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="PriceController/create">Create</a></button