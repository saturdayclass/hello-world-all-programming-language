using CSharp_OOP.Factory;
using CSharp_OOP.Models;
using CSharp_OOP.Services;
using System;

namespace CSharp_OOP
{
    public class HelloWorld
    {
		public static void run(String arg)
		{ 
			Message message = new Message(arg);
			AbstractPrinterFactory factory = AbstractPrinterFactory.GetFactory(); 
			IPrinter printer = factory.GetPrinter(); 
			message.PrintOut(printer);
		}
	}
}
