<?php
class AdminUserPermissionsController extends Controller 
{
    function list(){
       $list = $this->model("AdminUserPermissionsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "AdminUserPermissionsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("AdminUserPermissionsModel");
            $addpost->add($_POST);
            return header('Location:/AdminUserPermissionsController');
        }
        
    }      
    function create(){
        $listAdmin_Users = $this->model("AdminUsersModel");
        $listAdmin_Permissions = $this->model("AdminPermissionsModel");
        $this->view("layout",
        ["pages"=>"create",
        "admin_users"=> $listAdmin_Users->list(),
        "admin_permissions"=>$listAdmin_Permissions->list()],
        "AdminUserPermissionsView");
    }
    function edit($id){
        $detail=$this->model("AdminUserPermissionsModel");
        $result=$detail->detail($id);
        $listAdmin_Users = $this->model("AdminUsersModel");
        $listAdmin_Permissions = $this->model("AdminPermissionsModel");
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result,
                    "admin_users"=> $listAdmin_Users->list(),
                    "admin_permissions"=>$listAdmin_Permissions->list()],
                    "AdminUserPermissionsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("AdminUserPermissionsModel");
            $addpost->update($_POST);
            return header('Location:/AdminUserPermissionsController');

        }
    }
    function delete($id){
        $delete=$this->model("AdminUserPermissionsModel");
        $delete->delete($id);
        header('Location:../../AdminUserPermissionsController');
    }
}



?>