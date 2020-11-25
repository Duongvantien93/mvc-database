<?php
class AdminOperationLogController extends Controller 
{
    function list(){
       $list = $this->model("AdminOperationLogModel");

            $this->view("layout",
                        ["pages"=>"list",
                        "listdata"=>$list->list()],
                        "AdminOperationLogView");
                    
    }
    public function add() {
    
        $id=$_POST['id'];
        $user_id=$_POST['user_id'];
        $path=$_POST['path'];
        $method=$_POST['method'];
        $ip=$_POST['ip'];
        $input=$_POST['input'];
        $created_at=$_POST['created_at'];
        $updated_at=$_POST['updated_at'];
        $post=['id'=>$id,
                'user_id'=>$user_id,
                'path'=>$path,
                'method'=>$method,
                'ip'=>$ip,
                'input'=>$input,
                'created_at'=>$created_at,
                'updated_at'=>$updated_at
                ];
        $addpost=$this->model("AdminOperationLogModel");
        $addpost->add($post);
   
        return header('Location:/AdminOperationLogController');
    }      
    function create(){
        
        $this->view("layout",
                    ["pages"=>"create"],
                    "AdminOperationLogView");
    }
    function edit($id){
        $detail=$this->model("AdminOperationLogModel");
        $result=$detail->detail($id);
        $this->view("layout",
                    ["pages"=>"edit",
                    "detail"=>$result],
                    "AdminOperationLogView");
    }
    function update(){
        $id=$_POST['id'];
        $user_id=$_POST['user_id'];
        $path=$_POST['path'];
        $method=$_POST['method'];
        $ip=$_POST['ip'];
        $input=$_POST['input'];
        $created_at=$_POST['created_at'];
        $updated_at=$_POST['updated_at'];
        $post=['id'=>$id,
                'user_id'=>$user_id,
                'path'=>$path,
                'method'=>$method,
                'ip'=>$ip,
                'input'=>$input,
                'created_at'=>$created_at,
                'updated_at'=>$updated_at
                ];
        $addpost=$this->model("AdminOperationLogModel");
        $addpost->update($post);
        header('Location:../../AdminOperationLogController');   
    }
    function delete($id){
        $delete=$this->model("AdminOperationLogModel");
        $delete->delete($id);
        header('Location:../../AdminOperationLogController');
    }
}



?>