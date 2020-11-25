<?php
class LearningFacilitiesController extends Controller 
{
    function list(){
       $list = $this->model("LearningFacilitiesModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "LearningFacilitiesView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("LearningFacilitiesModel");
            $addpost->add($_POST);

            return header('Location:/LearningFacilitiesController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "LearningFacilitiesView");
    }
    function edit($id){
        $detail=$this->model("LearningFacilitiesModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "LearningFacilitiesView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("LearningFacilitiesModel");
            $addpost->update($_POST);
            return header('Location:/LearningFacilitiesController');

        }
    }
    function delete($id){
        $delete=$this->model("LearningFacilitiesModel");
        $delete->delete($id);
        header('Location:../../LearningFacilitiesController');
    }
}



?>