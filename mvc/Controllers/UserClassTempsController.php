<?php
class UserClassTempsController extends Controller 
{
    function list(){
       $list = $this->model("UserClassTempsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "UserClassTempsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("UserClassTempsModel");
            $addpost->add($_POST);
            return header('Location:/UserClassTempsController');
        }
        
    }      
    function create(){
        $Users=$this->Model("UsersModel");
        $class=$this->Model("ClassesModel");
        $this->view("layout",
        ["pages"=>"create",
        "users"=>$Users->list(),
        "class"=>$class ->list()
    ],
        "UserClassTempsView");
    }
    function edit($id){
        $Users=$this->Model("UsersModel");
        $class=$this->Model("ClassesModel");
        $detail=$this->model("UserClassTempsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "users"=>$Users->list(),
                    "class"=>$class ->list(),
                    "detail"=>$result],
                    "UserClassTempsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("UserClassTempsModel");
            $addpost->update($_POST);
            return header('Location:/UserClassTempsController');

        }
    }
    function delete($id){
        $delete=$this->model("UserClassTempsModel");
        $delete->delete($id);
        header('Location:../../UserClassTempsController');
    }
}



?>