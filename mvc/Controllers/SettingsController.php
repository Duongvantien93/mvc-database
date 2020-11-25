<?php
class SettingsController extends Controller 
{
    function list(){
       $list = $this->model("SettingsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "SettingsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("SettingsModel");
            $addpost->add($_POST);
            return header('Location:/SettingsController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "SettingsView");
    }
    function edit($id){
        $detail=$this->model("SettingsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "SettingsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("SettingsModel");
            $addpost->update($_POST);
            return header('Location:/SettingsController');

        }
    }
    function delete($id){
        $delete=$this->model("SettingsModel");
        $delete->delete($id);
        header('Location:../../SettingsController');
    }
}



?>