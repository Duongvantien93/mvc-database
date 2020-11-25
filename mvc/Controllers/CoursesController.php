<?php
class CoursesController extends Controller 
{
    function list(){
       $list = $this->model("CoursesModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "CoursesView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("CoursesModel");
            $addpost->add($_POST);
            return header('Location:/CoursesController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "CoursesView");
    }
    function edit($id){
        $detail=$this->model("CoursesModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "CoursesView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("CoursesModel");
            $addpost->update($_POST);
            return header('Location:/CoursesController');

        }
    }
    function delete($id){
        $delete=$this->model("CoursesModel");
        $delete->delete($id);
        header('Location:../../CoursesController');
    }
}



?>