using BusinessLayer.Concrete;
using BusinessLayer.ValidationRules;
using DataAccessLayer.EntityFramework;
using EntitiyLayer.Concrete;
using FluentValidation.Results;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Mvc;

namespace BlogSiteDesign.Controllers
{
	
	public class RegisterController : Controller
	{
		WriterManager wm = new WriterManager(new EfWriterRepository());

		[HttpGet]
		public IActionResult Index()
		{
			return View();
		}
		[HttpPost]
		public IActionResult Index(Writer writer)
		{
			WriterValidator wv= new WriterValidator();
			ValidationResult result = wv.Validate(writer);
			if (result.IsValid)
			{
                writer.WriterStatus = true;
                writer.WriterAbout = "Deneme Test";
                wm.TAdd(writer);
                return RedirectToAction("Index", "Blog");
            }
			else
			{
				foreach(var item in result.Errors)
				{
					ModelState.AddModelError(item.PropertyName, item.ErrorMessage);
				}
			}
			return View();
		}
	}
}
