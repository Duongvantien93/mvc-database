<?php
class PriceController extends Controller 
{
    function list(){
       $list = $this->model("PriceModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "PriceView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("PriceModel");
            $addpost->add($_POST);
            return header('Location:/PriceController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "PriceView");
    }
    function edit($id){
        $detail=$this->model("PriceModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "PriceView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("PriceModel");
            $addpost->update($_POST);
            return header('Location:/PriceController');

        }
    }
    function delete($id){
        $delete=$this->model("PriceModel");
        $delete->delete($id);
        header('Location:../../PriceController');
    }
}



?>