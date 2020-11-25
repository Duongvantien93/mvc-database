<?php
class ClassroomsController extends Controller 
{
    function list(){
       $list = $this->model("ClassroomsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "ClassroomsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("ClassroomsModel");
            $addpost->add($_POST);
            return header('Location:/ClassroomsController');
        }
        
    }      
    function create(){
        $listlf = $this->model("LearningFacilitiesModel");
        $this->view("layout",
        ["pages"=>"create",
        "listlf"=>$listlf->list()],
        "ClassroomsView");
    }
    function edit($id){
        $listlf = $this->model("LearningFacilitiesModel");
        $detail=$this->model("ClassroomsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "listlf"=>$listlf->list(),
                    "detail"=>$result],
                    "ClassroomsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("ClassroomsModel");
            $addpost->update($_POST);
            return header('Location:/ClassroomsController');

        }
    }
    function delete($id){
        $delete=$this->model("ClassroomsModel");
        $delete->delete($id);
        header('Location:../../ClassroomsController');
    }
}



?>