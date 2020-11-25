<?php
class UsersController extends Controller 
{
    function list(){
       $list = $this->model("UsersModel");
       $this->view("layout",
                    ["pages"=>"list",
                    "listdata"=>$list->list()],
                    "UsersView");
    }
    public function add() {
        if (isset($_POST['addpost'])){
            $addpost=$this->model("UsersModel");
            $addpost->add($_POST);
            return header('Location:/UsersController');
        }
        
    }      
    function create(){
        $courses=$this->Model("PriceModel");
        $register_courses=$this->Model("RegisterCoursesModel");
        $class=$this->Model("ClassesModel");
        $this->view("layout",
        ["pages"=>"create",
        "price"=>$courses->list(),
        "register_courses"=>$register_courses->list(),
        "class"=>$class ->list()
    ],
        "UsersView");
    }
    function edit($id){
        $courses=$this->Model("PriceModel");
        $register_courses=$this->Model("RegisterCoursesModel");
        $class=$this->Model("ClassesModel");
        $detail=$this->model("UsersModel");
        $result=$detail->detail($id);;
        $this->view("layout",
                    ["pages"=>"edit",
                    "price"=>$courses->list(),
                    "register_courses"=>$register_courses->list(),
                    "class"=>$class ->list(),
                    "detail"=>$result],
                    "UsersView");
    }
    function update(){

        if (isset($_POST['update'])){
            $addpost=$this->model("UsersModel");
            $addpost->update($_POST);
            return header('Location:/UsersController');

        }
    }
    function delete($id){
        $delete=$this->model("UsersModel");
        $delete->delete($id);
        header('Location:../../UsersController');
    }
}



?>