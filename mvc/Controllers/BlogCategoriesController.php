<?php
class BlogCategoriesController extends Controller 
{
    function list(){
       $list = $this->model("BlogCategoriesModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "BlogCategoriesView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("BlogCategoriesModel");
            $addpost->add($_POST);
            return header('Location:/BlogCategoriesController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "BlogCategoriesView");
    }
    function edit($id){
        $detail=$this->model("BlogCategoriesModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "BlogCategoriesView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("BlogCategoriesModel");
            $addpost->update($_POST);
            return header('Location:/BlogCategoriesController');

        }
    }
    function delete($id){
        $delete=$this->model("BlogCategoriesModel");
        $delete->delete($id);
        header('Location:../../BlogCategoriesController');
    }
}



?>