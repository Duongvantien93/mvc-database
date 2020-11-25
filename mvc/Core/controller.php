<?php
 class Controller {
        public function model($model){
            require_once "./mvc/Models/".$model."/".$model.".php";
            return new $model;
            // dòng này tương đương với return $a= new $model(mà khi nhúng file $model kia vào là bên $model.php có class $model
            // rồi nên ở đây mình trả về giá trị là khởi tạo luôn 1 object mới luôn.mà ở ví dụ này ta nhập tham số $model là sinhvienmodel nên sẽ requruire đến 
            // file đó luôn và khỏi tạo luôn object sinhvienmodel trong file sinhvienmodel.php
        }
        public function view($view,$data=[],$folder){
            require_once "./mvc/views/".$view.".php";
        }
 }




?>