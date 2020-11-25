<?php

class AdminMenuEntity
{
	public $id;
	public $parentid;
	public $title;
    public $icon;
    public $uri;
    public $permission;
	public $order;
	
	public function __construct($_id, $_parent_id, $_title, $_icon,$_uri, $_permission, $_order)
	{
		$this->id = $_id;
		$this->parent_id = $_parent_id;
		$this->title = $_title;
        $this->icon = $_icon;
        $this->uri = $_uri;
        $this->permission = $_permission;
        $this->order = $_order;
	}
}
