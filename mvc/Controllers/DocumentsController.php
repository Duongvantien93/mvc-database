<?php
class DocumentsController extends Controller 
{
    function list(){
       $list = $this->model("DocumentsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "DocumentsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("DocumentsModel");
            $addpost->add($_POST);
            return header('Location:/DocumentsController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "DocumentsView");
    }
    function edit($id){
        $detail=$this->model("DocumentsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "DocumentsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("DocumentsModel");
            $addpost->update($_POST);
            return header('Location:/DocumentsController');

        }
    }
    function delete($id){
        $delete=$this->model("DocumentsModel");
        $delete->delete($id);
        header('Location:../../DocumentsController');
    }
}



?>