using CSharp_OOP.Services;

namespace CSharp_OOP.Factory
{
    public class SystemOutPrinterFactory : AbstractPrinterFactory
    {
        public override IPrinter GetPrinter()
        {
            return new SystemOutPrinter();
        }
    }
}
