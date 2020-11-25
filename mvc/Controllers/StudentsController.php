<?php
class StudentsController extends Controller 
{
    function list(){
       $list = $this->model("StudentsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "StudentsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("StudentsModel");
            $addpost->add($_POST);
            return header('Location:/StudentsController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "StudentsView");
    }
    function edit($id){
        $detail=$this->model("StudentsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "StudentsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("StudentsModel");
            $addpost->update($_POST);
            return header('Location:/StudentsController');

        }
    }
    function delete($id){
        $delete=$this->model("StudentsModel");
        $delete->delete($id);
        header('Location:../../StudentsController');
    }
}



?>