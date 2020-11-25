<?php
class AdminUsersController extends Controller 
{
    function list(){
       $list = $this->model("AdminUsersModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "AdminUsersView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("AdminUsersModel");
            $addpost->add($_POST);
            return header('Location:/AdminUsersController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "AdminUsersView");
    }
    function edit($id){
        $detail=$this->model("AdminUsersModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "AdminUsersView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("AdminUsersModel");
            $addpost->update($_POST);
            return header('Location:/AdminUsersController');

        }
    }
    function delete($id){
        $delete=$this->model("AdminUsersModel");
        $delete->delete($id);
        header('Location:../../AdminUsersController');
    }
}



?>