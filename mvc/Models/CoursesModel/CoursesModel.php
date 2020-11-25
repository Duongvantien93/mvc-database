<?php
class CoursesModel extends databases
{
    public function list() {
        $sql="SELECT * FROM courses ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM courses WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $title=mysqli_real_escape_string($this->connection,$post['title']);
        $feature_image=mysqli_real_escape_string($this->connection,$post['feature_image']);
        $description =mysqli_real_escape_string($this->connection,$post['description']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $price=mysqli_real_escape_string($this->connection,$post['price']);
        $promotion_price=mysqli_real_escape_string($this->connection,$post['promotion_price']);
        $detail =mysqli_real_escape_string($this->connection,$post['detail']);
        $is_free=mysqli_real_escape_string($this->connection,$post['is_free']);
        $number_sessions=mysqli_real_escape_string($this->connection,$post['number_sessions']);
        $total_day =mysqli_real_escape_string($this->connection,$post['total_day']);
        $day_per_week=mysqli_real_escape_string($this->connection,$post['day_per_week']);
        $min_student=mysqli_real_escape_string($this->connection,$post['min_student']);
        $max_student=mysqli_real_escape_string($this->connection,$post['max_student']);
        $participants =mysqli_real_escape_string($this->connection,$post['participants']);
        $results=mysqli_real_escape_string($this->connection,$post['results']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO courses(id,title, feature_image,description,status,price,promotion_price,detail,is_free,number_sessions,total_day, day_per_week,min_student,max_student,participants,results ,created_at, updated_at) 
         VALUES( '".$id."', '".$title."', '".$feature_image."','".$description ."', '".$status ."','".$price."','".$promotion_price."', '".$detail."', '".$is_free ."','".$number_sessions."', '".$total_day."', '".$day_per_week."','".$min_student ."', '".$max_student ."','".$participants."','".$results."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 

    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $title=mysqli_real_escape_string($this->connection,$post['title']);
        $feature_image=mysqli_real_escape_string($this->connection,$post['feature_image']);
        $description =mysqli_real_escape_string($this->connection,$post['description']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $price=mysqli_real_escape_string($this->connection,$post['price']);
        $promotion_price=mysqli_real_escape_string($this->connection,$post['promotion_price']);
        $detail =mysqli_real_escape_string($this->connection,$post['detail']);
        $is_free=mysqli_real_escape_string($this->connection,$post['is_free']);
        $number_sessions=mysqli_real_escape_string($this->connection,$post['number_sessions']);
        $total_day =mysqli_real_escape_string($this->connection,$post['total_day']);
        $day_per_week=mysqli_real_escape_string($this->connection,$post['day_per_week']);
        $min_student=mysqli_real_escape_string($this->connection,$post['min_student']);
        $max_student=mysqli_real_escape_string($this->connection,$post['max_student']);
        $participants =mysqli_real_escape_string($this->connection,$post['participants']);
        $results=mysqli_real_escape_string($this->connection,$post['results']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE courses SET `id`='" . $id. "',`title`='" . $title . "', `feature_image`='" . $feature_image. "',`description`='" . $description . "',`status`='" . $status. "',`price`='" . $price. "',`promotion_price`='" . $promotion_price. "',`detail`='" . $detail. "',`is_free`='" . $is_free. "',`number_sessions`='" . $number_sessions. "',`total_day`='" . $total_day. "',`day_per_week`='" . $day_per_week. "',`min_student`='" . $min_student. "',`max_student`='" . $max_student. "',`participants`='" . $participants. "', `results`='" . $results. "',`updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);
    }

    public function detail($id) {
        
		$query = "SELECT * FROM courses WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>