<?php
class ContactsModel extends databases
{
    public function list() {
        $sql="SELECT * FROM contacts ORDER BY id";
        return $result= mysqli_query($this->connection,$sql);
    }

    public function delete($id){
        $sql="DELETE FROM contacts WHERE id='" . $id . "'";
         $result= mysqli_query($this->connection,$sql);
    }

    public function add($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $full_name=mysqli_real_escape_string($this->connection,$post['full_name']);
        $email=mysqli_real_escape_string($this->connection,$post['email']);
        $address =mysqli_real_escape_string($this->connection,$post['address']);
        $title=mysqli_real_escape_string($this->connection,$post['title']);
        $message=mysqli_real_escape_string($this->connection,$post['message']);
        $phone=mysqli_real_escape_string($this->connection,$post['phone']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
         $sql = "INSERT INTO contacts(id,full_name, email,address,title,message, phone,status ,created_at, updated_at) VALUES( '".$id."', '".$full_name."', '".$email."', '".$address ."','".$title."', '".$message."', '".$phone."', '".$status ."', '".$created_at."', '".$updated_at."')";
        $result = mysqli_query($this->connection, $sql); 

    }

    public function update($post){
        $id=mysqli_real_escape_string($this->connection,$post['id']);
        $full_name=mysqli_real_escape_string($this->connection,$post['full_name']);
        $email=mysqli_real_escape_string($this->connection,$post['email']);
        $address =mysqli_real_escape_string($this->connection,$post['address']);
        $title=mysqli_real_escape_string($this->connection,$post['title']);
        $message=mysqli_real_escape_string($this->connection,$post['message']);
        $phone=mysqli_real_escape_string($this->connection,$post['phone']);
        $status=mysqli_real_escape_string($this->connection,$post['status']);
        $created_at=mysqli_real_escape_string($this->connection,$post['created_at']);
        $updated_at=mysqli_real_escape_string($this->connection,$post['updated_at']);
        $sql="UPDATE contacts SET `id`='" . $id. "',`full_name`='" . $full_name . "', `email`='" . $email. "',`address`='" . $address . "',`title`='" . $title. "',`message`='" . $message . "', `phone`='" . $phone. "',`status`='" . $status . "',`updated_at`='" . $updated_at . "', `created_at`='" . $created_at. "' WHERE id='".$id."'";
        $result = mysqli_query($this->connection, $sql);
    }

    public function detail($id) {
        
		$query = "SELECT * FROM contacts WHERE id='".$id."'";
        return $results = $this->connection->query($query);
    
    }


 
    
}
?>