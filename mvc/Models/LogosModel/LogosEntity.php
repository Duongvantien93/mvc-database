<?php

class LogosEntity
{
	public $id;
	public $user_id;
	public $path;
    public $method;
    public $ip;
    public $input;
    public $created_at;
    public $updated_at;
	
	public function __construct($_id, $_user_id, $_path, $_method,$_ip, $_input, $_created_at, $_updated_at)
	{
		$this->id = $_id;
		$this->user_id = $_user_id;
		$this->path = $_path;
        $this->method = $_method;
        $this->ip = $_ip;
        $this->input = $_input;
        $this->created_at = $_created_at;
        $this->updated_at = $_updated_at;
	}
}
