<?php
namespace app\factory;

use app\factory\SystemOutPrinterFactory;

/*
 * contoh class abstract
 * harus dibuat object inheritance kalau mau pake
 */
abstract class AbstractPrinterFactory 
{ 
	public static function getFactory(){ 
		return new SystemOutPrinterFactory(); 
	} 

	public abstract function getPrinter(); 
} 
