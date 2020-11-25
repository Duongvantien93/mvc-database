
 <table>
    <thead>
            <tr>
                <th>id</th>
                <th>Course_id</th>
                <th>Images</th>
                <th>Content</th>
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
            <td>".$row['course_id']."</td>
           <td>".$row['images']."</td>
           <td>".$row['content']."</td>
           <td>".$row['created_at']."</td>
          <td>".$row['updated_at']."</td>
           <td><a href='CourseDetailsController/edit/" . $row["id"] . "'>Edit</a>&nbsp;&nbsp;&nbsp;<a href='CourseDetailsController/delete/" . $row["id"] . "'>Delete</a></td>
          </tr>";
?>              
                        
    </tbody>
</table>
<button type="button" ><a href="CourseDetailsController/create">Create</a></button