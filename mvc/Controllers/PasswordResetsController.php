<?php
class PasswordResetsController extends Controller 
{
    function list(){
       $list = $this->model("PasswordResetsModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "PasswordResetsView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("PasswordResetsModel");
            $addpost->add($_POST);

            return header('Location:/PasswordResetsController');
        }
        
    }      
    function create(){
        $this->view("layout",
        ["pages"=>"create"],
        "PasswordResetsView");
    }
    function edit($id){
        $detail=$this->model("PasswordResetsModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "PasswordResetsView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("PasswordResetsModel");
            $addpost->update($_POST);
            return header('Location:/PasswordResetsController');

        }
    }
    function delete($email){
        $delete=$this->model("PasswordResetsModel");
        $delete->delete($email);
        header('Location:../../PasswordResetsController');
    }
}



?>