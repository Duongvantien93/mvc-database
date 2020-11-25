<?php
class AttendancesController extends Controller 
{
    function list(){
       $list = $this->model("AttendancesModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "AttendancesView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("AttendancesModel");
            $addpost->add($_POST);
            return header('Location:/AttendancesController');
        }
        
    }      
    function create(){
        $users = $this->model("UsersModel");
        $classes = $this->model("ClassesModel");
        $this->view("layout",
        ["pages"=>"create",
        "classes"=> $classes->list(),
        "users"=> $users->list()],
        "AttendancesView");
    }
    function edit($id){
        $detail=$this->model("AttendancesModel");
        $classes = $this->model("ClassesModel");
        $result=$detail->detail($id);
        $users = $this->model("UsersModel");
        $this->view("layout",
                    ["pages"=>"edit",
                    "classes"=> $classes->list(),
                    "detail"=>$result,
                    "users"=> $users->list()],
                    "AttendancesView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("AttendancesModel");
            $addpost->update($_POST);
            return header('Location:/AttendancesController');

        }
    }
    function delete($id){
        $delete=$this->model("AttendancesModel");
        $delete->delete($id);
        header('Location:../../AttendancesController');
    }
}



?>