<?php
class RegisterCoursesController extends Controller 
{
    function list(){
       $list = $this->model("RegisterCoursesModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "RegisterCoursesView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("RegisterCoursesModel");
            $addpost->add($_POST);
            return header('Location:/RegisterCoursesController');
        }
        
    }      
    function create(){
        $list=$this->Model("CoursesModel");
        $this->view("layout",
        ["pages"=>"create",
        "list"=>$list->list()],
        "RegisterCoursesView");
    }
    function edit($id){
        $list=$this->Model("CoursesModel");
        $detail=$this->model("RegisterCoursesModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "list"=>$list->list(),
                    "detail"=>$result],
                    "RegisterCoursesView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("RegisterCoursesModel");
            $addpost->update($_POST);
            return header('Location:/RegisterCoursesController');

        }
    }
    function delete($id){
        $delete=$this->model("RegisterCoursesModel");
        $delete->delete($id);
        header('Location:../../RegisterCoursesController');
    }
}



?>