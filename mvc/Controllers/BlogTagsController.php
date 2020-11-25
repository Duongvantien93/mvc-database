<?php
class BlogTagsController extends Controller 
{
    function list(){
       $list = $this->model("BlogTagsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "BlogTagsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("BlogTagsModel");
            $addpost->add($_POST);
            return header('Location:/BlogTagsController');
        }
        
    }      
    function create(){
        $listblogs=$this->Model("BlogsModel");
        $this->view("layout",
        ["pages"=>"create",
        "list"=>$listblogs->list()],
        "BlogTagsView");
    }
    function edit($id){
        $listblogs=$this->Model("BlogsModel");
        $detail=$this->model("BlogTagsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result,
                    "list"=>$listblogs->list()],
                    "BlogTagsView");
    }
    function update(){
        if (isset($_POST['update'])){
            $addpost=$this->model("BlogTagsModel");
            $addpost->update($_POST);
            return header('Location:/BlogTagsController');

        }
    }
    function delete($id){
        $delete=$this->model("BlogTagsModel");
        $delete->delete($id);
        header('Location:../../BlogTagsController');
    }
}



?>