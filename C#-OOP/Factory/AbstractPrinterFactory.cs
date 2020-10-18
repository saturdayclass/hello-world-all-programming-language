using CSharp_OOP.Services;

namespace CSharp_OOP.Factory
{
    public abstract class AbstractPrinterFactory
    {
		public static AbstractPrinterFactory GetFactory()
		{
			return new SystemOutPrinterFactory();
		}

		public abstract IPrinter GetPrinter();
	}
}
