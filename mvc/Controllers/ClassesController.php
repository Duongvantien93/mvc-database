<?php
class ClassesController extends Controller 
{
    function list(){
       $list = $this->model("ClassesModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "ClassesView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("ClassesModel");
            $addpost->add($_POST);
            return header('Location:/ClassesController');
        }
        
    }      
    function create(){
        $courses=$this->Model("CoursesModel");
        $users=$this->Model("UsersModel");
        $classrooms=$this->Model("ClassroomsModel");
        $learningshifts=$this->Model("LearningShiftsModel");
        $this->view("layout",
        ["pages"=>"create",
        "courses"=>$courses->list(),
        "users"=>$users->list(),
        "classrooms"=>$classrooms->list(),
        "learningshifts"=>$learningshifts ->list()
    ],
        "ClassesView");
    }
    function edit($id){
        $courses=$this->Model("CoursesModel");
        $users=$this->Model("UsersModel");
        $classrooms=$this->Model("ClassroomsModel");
        $learningshifts=$this->Model("LearningShiftsModel");
        $detail=$this->model("ClassesModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "courses"=>$courses->list(),
                    "users"=>$users->list(),
                    "classrooms"=>$classrooms->list(),
                    "learningshifts"=>$learningshifts ->list(),
                    "detail"=>$result],
                    "ClassesView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("ClassesModel");
            $addpost->update($_POST);
            return header('Location:/ClassesController');

        }
    }
    function delete($id){
        $delete=$this->model("ClassesModel");
        $delete->delete($id);
        header('Location:../../ClassesController');
    }
}



?>