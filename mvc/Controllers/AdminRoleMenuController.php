<?php
class AdminRoleMenuController extends Controller 
{
    function list(){
       $list = $this->model("AdminRoleMenuModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "AdminRoleMenuView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("AdminRoleMenuModel");
            $addpost->add($_POST);
            return header('Location:/AdminRoleMenuController');
        }
        
    }      
    function create(){
        $listAdmin_menu = $this->model("AdminMenuModel");
        $listAdmin_roles = $this->model("AdminRolesModel");
        $this->view("layout",
        ["pages"=>"create",
         "admin_menu"=> $listAdmin_menu->list(),
        "admin_roles"=>$listAdmin_roles->list()],
        "AdminRoleMenuView");
    }
    function edit($id){
        $listAdmin_menu = $this->model("AdminMenuModel");
        $listAdmin_roles = $this->model("AdminRolesModel");
        $detail=$this->model("AdminRoleMenuModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result,
                    "admin_menu"=> $listAdmin_menu->list(),
                    "admin_roles"=>$listAdmin_roles->list()],
                    "AdminRoleMenuView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("AdminRoleMenuModel");
            $addpost->update($_POST);
            return header('Location:/AdminRoleMenuController');

        }
    }
    function delete($id){
        $delete=$this->model("AdminRoleMenuModel");
        $delete->delete($id);
        header('Location:../../AdminRoleMenuController');
    }
}



?>