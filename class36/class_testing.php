<?php

class Customer{
	public $id;
	public $name;
	public $email;
	public $balance;
	
	public function getCustomer($id){
		$this->id = $id;
		return 'zia.hussain@gmail.com';
	}
	
$customer = new Customer;

echo $customer->getCustomer(3);

?>