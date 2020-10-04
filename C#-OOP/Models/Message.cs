using CSharp_OOP.Services;
using System;

namespace CSharp_OOP.Models
{
    public class Message
    {
		private String message; 

		public Message(String message)
		{ 
			this.message = message;
		}

		public void PrintOut(IPrinter printer)
		{ 
			printer.PrintOut(this.ToString());
		}

		public override String ToString()
		{
			return this.message;
		}
	}
}
