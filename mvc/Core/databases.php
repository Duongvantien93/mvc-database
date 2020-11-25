<?php
 class databases {
     public $connection;
     protected $severname='127.0.0.1';
     protected $username="root";
     protected $password="";
     protected $databases_name="academy";
     public function __construct(){
         $this->connection=mysqli_connect($this->severname,$this->username,$this->password);
        //  dòng trên để kết nối vào database
        mysqli_select_db($this->connection,$this->databases_name);
        // dòng trên là để chọn databáe mình cần
        mysqli_query($this->connection, "SET NAMES 'utf8'");
        // dòng trên là để có thể cho ra tiếng việt
        if (!$this->connection) {
            echo "loi ket noi".mysqli_connect_error();
            exit;
        };  
    
    
    }
     

     
 }


?>