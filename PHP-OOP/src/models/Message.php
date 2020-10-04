<?php
namespace app\models;

/*
 * class Message 
 * berisi pesan string yang ingin ditampilkan
 */
class Message 
{ 
	private $message; 

	public function __construct($message) { 
		$this->message = $message; 
	} 

	public function printOut($printer) { 
		$printer->printOut($this->toString()); 
	} 

	public function toString() { 
		return $this->message; 
	} 
} 

