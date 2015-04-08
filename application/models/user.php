<?php 
	class User extends CI_Model 
	{
		var $title = "";
		var $name = "";
		var $email = "";
		var $company = "";
		var $telephone = "";
		var $mobile = "";
		var $remark = "";

	    function __construct()
	    {
	        parent::__construct();
	    }

	    function insert($title, $name, $email, $company, $telephone, $mobile, $remark)
	    {
	    	$this -> title   = $title; 
        	$this -> name = $name;
       		$this -> email = $email;
       		$this -> company = $company;
       		$this -> telephone = $telephone;
       		$this -> mobile = $mobile;
       		$this -> remark = $remark;
        	$this -> db -> insert('Users', $this);
	    }
	}
?>