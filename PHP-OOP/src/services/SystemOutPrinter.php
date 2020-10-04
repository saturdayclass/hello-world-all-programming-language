<?php
namespace app\services;

use app\services\PrinterInterface;

/*
 * Contoh implementasi interface
 */
class SystemOutPrinter implements PrinterInterface 
{ 
	public function printOut($message) { 
		print $message; 
	} 
} 
