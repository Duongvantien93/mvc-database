<?php
class CourseSubjectTempController extends Controller 
{
    function list(){
       $list = $this->model("CourseSubjectTempModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "CourseSubjectTempView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("CourseSubjectTempModel");
            $addpost->add($_POST);
            return header('Location:/CourseSubjectTempController');
        }
        
    }      
    function create(){
        $courses=$this->Model("CoursesModel");
        $subjects=$this->Model("SubjectsModel");
        $this->view("layout",
        ["pages"=>"create",
        "courses"=>$courses->list(),
        "subjects"=>$subjects ->list()
    ],
        "CourseSubjectTempView");
    }
    function edit($id){
        $courses=$this->Model("CoursesModel");
        $subjects=$this->Model("SubjectsModel");
        $detail=$this->model("CourseSubjectTempModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "courses"=>$courses->list(),
                    "subjects"=>$subjects ->list(),
                    "detail"=>$result],
                    "CourseSubjectTempView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("CourseSubjectTempModel");
            $addpost->update($_POST);
            return header('Location:/CourseSubjectTempController');

        }
    }
    function delete($id){
        $delete=$this->model("CourseSubjectTempModel");
        $delete->delete($id);
        header('Location:../../CourseSubjectTempController');
    }
}



?>