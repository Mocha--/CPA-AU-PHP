<?php
class Activity extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	$this -> load -> view('/shared/nav.php');
    	$this -> load -> view('activity');
    }
}
?>