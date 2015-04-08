<?php
class Register extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	$this -> load -> view('/shared/nav.php');
    	$this -> load -> view('register');
    }

    public function submit()
    {
    	$this -> load -> database();
		$this -> load -> model('user');
    	$this -> user -> insert($_POST['courtesy_title'],$_POST["user"]["name"],$_POST['user']['email'], $_POST['user']['company'], $_POST['user']['telephone'], $_POST['user']['mobile_phone'], $_POST['user']['remark']);
        $from =  "info@cpa-au.org"; 
        $subject = "New User" ;
        $name = $_POST['user']['name'];
        $email = $_POST['user']['email'];
        $phone = $_POST['user']['mobile_phone'];
        $message = "$name, $email, $phone";
        $to = "xibowangmelb@gmail.com";
        mail( $to, $subject, $message, "From: $from ");
    	$this -> load -> view('/shared/nav.php');
    	$this -> load -> view('home');
    }
}
?>