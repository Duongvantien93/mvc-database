<?php
class LogosController extends Controller 
{
    function list(){
       $list = $this->model("LogosModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "LogosView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("LogosModel");
            $addpost->add($_POST);

            return header('Location:/LogosController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "LogosView");
    }
    function edit($id){
        $detail=$this->model("LogosModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "LogosView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("LogosModel");
            $addpost->update($_POST);
            return header('Location:/LogosController');

        }
    }
    function delete($id){
        $delete=$this->model("LogosModel");
        $delete->delete($id);
        header('Location:../../LogosController');
    }
}



?>