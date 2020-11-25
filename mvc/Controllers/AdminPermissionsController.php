<?php
class AdminPermissionsController extends Controller 
{
    function list(){
       $list = $this->model("AdminPermissionsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "AdminPermissionsView");
    }
    public function add() {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $slug=$_POST['slug'];
        $http_method=$_POST['http_method'];
        $http_path=$_POST['http_path'];
        $created_at=$_POST['created_at'];
        $updated_at=$_POST['updated_at'];
        $post=['id'=>$id,
                'name'=>$name,
                'slug'=>$slug,
                'http_method'=>$http_method,
                'http_path'=>$http_path,
                'created_at'=>$created_at,
                'updated_at'=>$updated_at
                ];
        $addpost=$this->model("AdminPermissionsModel");
        $addpost->add($post);
        return header('Location:/AdminPermissionsController');
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "AdminPermissionsView");
    }
    function edit($id){
        $detail=$this->model("AdminPermissionsModel");
        $result=$detail->detail($id);
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "AdminPermissionsView");
    }
    function update(){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $slug=$_POST['slug'];
        $http_method=$_POST['http_method'];
        $http_path=$_POST['http_method'];
        $created_at=$_POST['created_at'];
        $updated_at=$_POST['updated_at'];
        $post=['id'=>$id,
                'name'=>$name,
                'slug'=>$slug,
                'http_method'=>$http_method,
                'http_path'=>$http_path,
                'created_at'=>$created_at,
                'updated_at'=>$updated_at
                ];
        $addpost=$this->model("AdminPermissionsModel");
        $addpost->update($post);
        header('Location:../../AdminPermissionsController');   
    }
    function delete($id){
        $delete=$this->model("AdminPermissionsModel");
        $delete->delete($id);
        header('Location:../../AdminPermissionsController');
    }
}



?>