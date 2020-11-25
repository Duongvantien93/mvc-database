<?php
class CourseDetailsController extends Controller 
{
    function list(){
       $list = $this->model("CourseDetailsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "CourseDetailsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("CourseDetailsModel");
            $addpost->add($_POST);
            return header('Location:/CourseDetailsController');
        }
        
    }      
    function create(){
        $list=$this->Model("CoursesModel");
        $this->view("layout",
        ["pages"=>"create",
        "list"=>$list->list()],
        "CourseDetailsView");
    }
    function edit($id){
        $list=$this->Model("CoursesModel");
        $detail=$this->model("CourseDetailsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "list"=>$list->list(),
                    "detail"=>$result],
                    "CourseDetailsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("CourseDetailsModel");
            $addpost->update($_POST);
            return header('Location:/CourseDetailsController');

        }
    }
    function delete($id){
        $delete=$this->model("CourseDetailsModel");
        $delete->delete($id);
        header('Location:../../CourseDetailsController');
    }
}



?>