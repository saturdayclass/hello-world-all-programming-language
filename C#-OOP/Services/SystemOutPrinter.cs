using System;

namespace CSharp_OOP.Services
{
    class SystemOutPrinter : IPrinter
    {
        public void PrintOut(String message)
        {
            Console.WriteLine(message);
        }
    }
}
