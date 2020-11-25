<?php
class AdminRolePermissionsController extends Controller 
{
    function list(){
       $list = $this->model("AdminRolePermissionsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "AdminRolePermissionsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("AdminRolePermissionsModel");
            $addpost->add($_POST);
            return header('Location:/AdminRolePermissionsController');
        }
        
    }      
    function create(){
        $listAdmin_menu = $this->model("AdminPermissionsModel");
        $listAdmin_roles = $this->model("AdminRolesModel");
        $this->view("layout",
        ["pages"=>"create",
         "admin_permissions"=> $listAdmin_menu->list(),
        "admin_roles"=>$listAdmin_roles->list()],
        "AdminRolePermissionsView");
    }
    function edit($id){
        $listAdmin_menu = $this->model("AdminPermissionsModel");
        $listAdmin_roles = $this->model("AdminRolesModel");
        $detail=$this->model("AdminRolePermissionsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result,
                    "admin_permissions"=> $listAdmin_menu->list(),
                    "admin_roles"=>$listAdmin_roles->list()],
                    "AdminRolePermissionsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("AdminRolePermissionsModel");
            $addpost->update($_POST);
            return header('Location:/AdminRolePermissionsController');

        }
    }
    function delete($id){
        $delete=$this->model("AdminRolePermissionsModel");
        $delete->delete($id);
        header('Location:../../AdminRolePermissionsController');
    }
}



?>