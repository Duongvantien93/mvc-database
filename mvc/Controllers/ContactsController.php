<?php
class ContactsController extends Controller 
{
    function list(){
       $list = $this->model("ContactsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "ContactsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("ContactsModel");
            $addpost->add($_POST);
            return header('Location:/ContactsController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "ContactsView");
    }
    function edit($id){
        $detail=$this->model("ContactsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "ContactsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("ContactsModel");
            $addpost->update($_POST);
            return header('Location:/ContactsController');

        }
    }
    function delete($id){
        $delete=$this->model("ContactsModel");
        $delete->delete($id);
        header('Location:../../ContactsController');
    }
}



?>