<?php
class TeachersController extends Controller 
{
    function list(){
       $list = $this->model("TeachersModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "TeachersView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("TeachersModel");
            $addpost->add($_POST);
            return header('Location:/TeachersController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "TeachersView");
    }
    function edit($id){
        $detail=$this->model("TeachersModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "TeachersView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("TeachersModel");
            $addpost->update($_POST);
            return header('Location:/TeachersController');

        }
    }
    function delete($id){
        $delete=$this->model("TeachersModel");
        $delete->delete($id);
        header('Location:../../TeachersController');
    }
}



?>