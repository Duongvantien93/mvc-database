<?php
class AdminMenuController extends Controller 
    {
    function list(){
       $namesv = $this->model("AdminMenuModel");
       $this->view("layout",
                    ["pages"=>"list","listdata"=>$namesv->list()],
                    "AdminMenuView");
       }
        // view
        // $teo=$x->sinhvien();
        // $this->view("aodep", ["0"=>$tong,
        // "pages"=>"contact",
        // // "sv"=>$teo=sinhvien()
        // "sv"=>$x->sinhvien()
        
        // ]);
        // trong ngoặc vuông ở trên thể hiện kiểu mảng mà kiểu mảng thì có key và value 
        // key=(index) mình có thể hiểu là tên biến mình tự đặt hoặc số thứ tự trong mảng còn giá value là gía trị của mảng 
        public function add() {
            $title=$_POST['title'];
            $permission=$_POST['permission'];
            $order=$_POST['order'];
            $icon=$_POST['icon'];
            $uri=$_POST['uri'];
            $parent_id=$_POST['parent_id'];
            $post=['title'=>$title,
                    'permission'=>$permission,
                    'order'=>$order,
                    'icon'=>$icon,
                    'uri'=>$uri,
                    'parent_id'=>$parent_id
                    ];
            $addpost=$this->model("AdminMenuModel");
            $addpost->add($post);
            return header('Location:../../');
        }      
        function create(){
            $this->view("layout", 
                        ["pages"=>"create"],
                        "AdminMenuView");
        }
        function edit($id){
            $detail=$this->model("AdminMenuModel");
            $result=$detail->detail($id);
            $this->view("layout",
                        ["pages"=>"edit",
                        "detail"=>$result],
                        "AdminMenuView");
        }
        function update(){
            $title=$_POST['title'];
            $permission=$_POST['permission'];
            $order=$_POST['order'];
            $icon=$_POST['icon'];
            $uri=$_POST['uri'];
            $parent_id=$_POST['parent_id'];
            $id=$_POST['id'];
            $post =[
                'title'=>$title,
                    'permission'=>$permission,
                    'order'=>$order,
                    'icon'=>$icon,
                    'uri'=>$uri,
                    'parent_id'=>$parent_id,
                    'id'=>$id
                    ];
            $addpost=$this->model("AdminMenuModel");
            $addpost->update($post);
            header('Location:../../');         
        }    
        function delete($id){
            $delete=$this->model("AdminMenuModel");
            $delete->delete($id);
            header('Location:../../');
        }
}



?>