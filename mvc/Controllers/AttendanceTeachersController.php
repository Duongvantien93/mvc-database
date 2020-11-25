<?php
class AttendanceTeachersController extends Controller 
{
    function list(){
       $list = $this->model("AttendanceTeachersModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "AttendanceTeachersView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("AttendanceTeachersModel");
            $addpost->add($_POST);
            return header('Location:/AttendanceTeachersController');
        }
        
    }      
    function create(){
        $teachers=$this->Model("TeachersModel");
        $classes=$this->Model("ClassesModel");
        $this->view("layout",
        ["pages"=>"create",
        "teachers"=>$teachers->list(),
        "classes"=>$classes->list(),
    ],
        "AttendanceTeachersView");
    }
    function edit($id){
        $teachers=$this->Model("TeachersModel");
        $classes=$this->Model("ClassesModel");
        $detail=$this->model("AttendanceTeachersModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "teachers"=>$teachers->list(),
                    "classes"=>$classes->list(),
                    "detail"=>$result],
                    "AttendanceTeachersView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("AttendanceTeachersModel");
            $addpost->update($_POST);
            return header('Location:/AttendanceTeachersController');

        }
    }
    function delete($id){
        $delete=$this->model("AttendanceTeachersModel");
        $delete->delete($id);
        header('Location:../../AttendanceTeachersController');
    }
}



?>