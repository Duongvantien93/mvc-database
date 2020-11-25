<?php
 class App {
    protected $controller="AdminMenuController";
    protected $action="list";
    protected $param=[];
     function __construct() {
         $arr = $this->urlprocess();
        //  xử lí controllers
        if (isset($arr[0])){
            if (file_exists("./mvc/Controllers/".$arr[0].".php")){
                $this->controller=$arr[0];
                unset($arr[0]);
            }
        }
        require_once "./mvc/Controllers/".$this->controller.".php";
        $this->controller=new $this->controller;
        // xử lý action
        // check xem có ton tai giá trị tại vị trí 1 k(ý là trên thanh địa chỉ có /action k)
        if(isset($arr[1])){
            // nếu có giá trị $arr[1] thì check xem trong controller mình đang đứng có lớp đó k và có function arr[1] k
            if (method_exists($this->controller, $arr[1])){
                $this->action = $arr[1];
                
            }
            unset ($arr[1]);

        }
        
        // xử lý param
        $this->param=$arr?array_values($arr) : [];
        // dùng hàm dưới đây để gọi lên màn hình muốn hiển thị
        // hàm sau truyền vào 3 tham số.thứ1 là lớp muốn chạy,thứ 2 là function muốn chạy,t3 là tham số truyên vào cho function đó(chính là param)
        // ý nghĩa hàm này là tạo ra 1 object của class controller và chạy hàm action với tham sso truyện vào là param
        call_user_func_array([$this->controller,$this->action], $this->param);
 }
    // cắt chuỗi để chia url
    function urlprocess(){
        if(isset($_GET["url"])) {
            return explode("/" , filter_var(trim($_GET["url"], "/")));
        }
        
    }
 }

?>