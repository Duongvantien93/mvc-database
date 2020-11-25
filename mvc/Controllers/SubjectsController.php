<?php
class SubjectsController extends Controller 
{
    function list(){
       $list = $this->model("SubjectsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "SubjectsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("SubjectsModel");
            $addpost->add($_POST);
            return header('Location:/SubjectsController');
        }
        
    }      
    function create(){
        $list=$this->Model("CoursesModel");
        $this->view("layout",
        ["pages"=>"create",
        "list"=>$list->list()],
        "SubjectsView");
    }
    function edit($id){
        $list=$this->Model("CoursesModel");
        $detail=$this->model("SubjectsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "list"=>$list->list(),
                    "detail"=>$result],
                    "SubjectsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("SubjectsModel");
            $addpost->update($_POST);
            return header('Location:/SubjectsController');

        }
    }
    function delete($id){
        $delete=$this->model("SubjectsModel");
        $delete->delete($id);
        header('Location:../../SubjectsController');
    }
}



?>