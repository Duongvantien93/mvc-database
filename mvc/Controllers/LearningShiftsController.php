<?php
class LearningShiftsController extends Controller 
{
    function list(){
       $list = $this->model("LearningShiftsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "LearningShiftsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("LearningShiftsModel");
            $addpost->add($_POST);

            return header('Location:/LearningShiftsController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "LearningShiftsView");
    }
    function edit($id){
        $detail=$this->model("LearningShiftsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "LearningShiftsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("LearningShiftsModel");
            $addpost->update($_POST);
            return header('Location:/LearningShiftsController');

        }
    }
    function delete($id){
        $delete=$this->model("LearningShiftsModel");
        $delete->delete($id);
        header('Location:../../LearningShiftsController');
    }
}



?>