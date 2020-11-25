<?php
class BlogsController extends Controller 
{
    function list(){
       $list = $this->model("BlogsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "BlogsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("BlogsModel");
            $addpost->add($_POST);
            return header('Location:/BlogsController');
        }
        
    }      
    function create(){
        $listcategori=$this->Model("BlogCategoriesModel");
        $this->view("layout",
        ["pages"=>"create",
        "list"=>$listcategori->list()],
        "BlogsView");
    }
    function edit($id){
        $listcategori=$this->Model("BlogCategoriesModel");
        $detail=$this->model("BlogsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result,
                    "list"=>$listcategori->list()],
                    "BlogsView");
    }
    function update(){
        if (isset($_POST['update'])){
            $addpost=$this->model("BlogsModel");
            $addpost->update($_POST);
            return header('Location:/BlogsController');

        }
    }
    function delete($id){
        $delete=$this->model("BlogsModel");
        $delete->delete($id);
        header('Location:../../BlogsController');
    }
}



?>