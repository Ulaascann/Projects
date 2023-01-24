using BusinessLayer.Concrete;
using DataAccessLayer.EntityFramework;
using Microsoft.AspNetCore.Mvc;

namespace BlogSiteDesign.Controllers
{
	public class AboutController : Controller
	{
		AboutManager am = new AboutManager(new EfAboutRepository());

		public IActionResult Index()
		{
            var values = am.GetList();
            return View(values);
		}
		public PartialViewResult PartialSocialMediaAbout()
		{
			 
			return PartialView();
		}
	}
}
