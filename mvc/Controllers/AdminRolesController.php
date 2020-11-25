<?php
class AdminRolesController extends Controller 
{
    function list(){
       $list = $this->model("AdminRolesModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "AdminRolesView");
    }
    public function add() {
        $id=$_POST['id'];
        $name=$_POST['name'];
        $slug=$_POST['slug'];
        $created_at=$_POST['created_at'];
        $updated_at=$_POST['updated_at'];
        $post=['id'=>$id,
                'name'=>$name,
                'slug'=>$slug,
                'created_at'=>$created_at,
                'updated_at'=>$updated_at
                ];
        $addpost=$this->model("AdminRolesModel");
        $addpost->add($post);
        return header('Location:/AdminRolesController');
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "AdminRolesView");
    }
    function edit($id){
        $detail=$this->model("AdminRolesModel");
        $result=$detail->detail($id);
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "AdminRolesView");
    }
    function update(){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $slug=$_POST['slug'];
        $created_at=$_POST['created_at'];
        $updated_at=$_POST['updated_at'];
        $post=['id'=>$id,
                'name'=>$name,
                'slug'=>$slug,
                'created_at'=>$created_at,
                'updated_at'=>$updated_at
                ];
        $addpost=$this->model("AdminRolesModel");
        $addpost->update($post);
        header('Location:../../AdminRolesController');   
    }
    function delete($id){
        $delete=$this->model("AdminRolesModel");
        $delete->delete($id);
        header('Location:../../AdminRolesController');
    }
}



?>