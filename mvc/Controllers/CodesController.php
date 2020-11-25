<?php
class CodesController extends Controller 
{
    function list(){
       $list = $this->model("CodesModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "CodesView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("CodesModel");
            $addpost->add($_POST);
            return header('Location:/CodesController');
        }
        
    }      
    function create(){
        $listblogs=$this->Model("CodesModel");
        $this->view("layout",
        ["pages"=>"create",
        "list"=>$listblogs->list()],
        "CodesView");
    }
    function edit($id){
        $listblogs=$this->Model("BlogsModel");
        $detail=$this->model("CodesModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result,
                    "list"=>$listblogs->list()],
                    "CodesView");
    }
    function update(){
        if (isset($_POST['update'])){
            $addpost=$this->model("CodesModel");
            $addpost->update($_POST);
            return header('Location:/CodesController');

        }
    }
    function delete($id){
        $delete=$this->model("CodesModel");
        $delete->delete($id);
        header('Location:../../CodesController');
    }
}



?>