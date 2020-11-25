
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>title</th>
                <th>feature_image</th>
                <th>description</th>
                <th>status</th>
                <th>price</th>
                <th>promotion_price</th>
                <th>detail</th>
                <th>is_free</th>
                <th>number_sessions</th>
                <th>total_day</th>
                <th>day_per_week</th>
                <th>min_student</th>
                <th>max_student</th>
                <th>participants</th>
                <th>results</th>
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
           <td>".$row['feature_image']."</td>
           <td>".$row['description']."</td>
           <td>".$row['status']."</td>
           <td>".$row['price']."</td>
           <td>".$row['promotion_price']."</td>
            <td>".$row['detail']."</td>
           <td>".$row['is_free']."</td>
           <td>".$row['number_sessions']."</td>
           <td>".$row['total_day']."</td>
           <td>".$row['day_per_week']."</td>
           <td>".$row['min_student']."</td>
           <td>".$row['max_student']."</td>
            <td>".$row['participants']."</td>
           <td>".$row['results']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='CoursesController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='CoursesController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="CoursesController/create">Create</a></button