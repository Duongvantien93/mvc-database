<?php
class MigrationsController extends Controller 
{
    function list(){
       $list = $this->model("MigrationsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "MigrationsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("MigrationsModel");
            $addpost->add($_POST);

            return header('Location:/MigrationsController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "MigrationsView");
    }
    function edit($id){
        $detail=$this->model("MigrationsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "MigrationsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("MigrationsModel");
            $addpost->update($_POST);
            return header('Location:/MigrationsController');

        }
    }
    function delete($email){
        $delete=$this->model("MigrationsModel");
        $delete->delete($email);
        header('Location:../../MigrationsController');
    }
}



?>