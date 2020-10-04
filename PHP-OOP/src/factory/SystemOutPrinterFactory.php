<?php
namespace app\factory;

use app\factory\AbstractPrinterFactory;
use app\services\SystemOutPrinter;

/*
 * contoh inheritance dari class abstract
 */
class SystemOutPrinterFactory extends AbstractPrinterFactory 
{ 
	public function getPrinter() { 
		return new SystemOutPrinter(); 
	} 
} 