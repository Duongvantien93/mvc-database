<?php
class AdminRoleUsersController extends Controller 
{
    function list(){
       $list = $this->model("AdminRoleUsersModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "AdminRoleUsersView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("AdminRoleUsersModel");
            $addpost->add($_POST);
            return header('Location:/AdminRoleUsersController');
        }
        
    }      
    function create(){
        $listAdmin_Users = $this->model("AdminUsersModel");
        $listAdmin_roles = $this->model("AdminRolesModel");
        $this->view("layout",
        ["pages"=>"create",
        "admin_users"=> $listAdmin_Users->list(),
        "admin_roles"=>$listAdmin_roles->list()],
        "AdminRoleUsersView");
    }
    function edit($id){
        $detail=$this->model("AdminRoleUsersModel");
        $result=$detail->detail($id);
        $listAdmin_Users = $this->model("AdminUsersModel");
        $listAdmin_roles = $this->model("AdminRolesModel");
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result,
                    "admin_users"=> $listAdmin_Users->list(),
                    "admin_roles"=>$listAdmin_roles->list()],
                    "AdminRoleUsersView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("AdminRoleUsersModel");
            $addpost->update($_POST);
            return header('Location:/AdminRoleUsersController');

        }
    }
    function delete($id){
        $delete=$this->model("AdminRoleUsersModel");
        $delete->delete($id);
        header('Location:../../AdminRoleUsersController');
    }
}



?>