<?php
namespace app;

use app\factory\AbstractPrinterFactory;
use app\models\Message;
/*
 * program utama :)
 */
class HelloWorld 
{ 
	public static function run($arg) 
	{ 
		$message = new Message($arg); 
		$factory = AbstractPrinterFactory::getFactory(); 
		$printer = $factory->getPrinter(); 
		$message->printOut($printer); 
	} 
}


