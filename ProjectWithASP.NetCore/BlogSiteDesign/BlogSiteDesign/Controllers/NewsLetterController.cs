using BusinessLayer.Concrete;
using DataAccessLayer.EntityFramework;
using EntitiyLayer.Concrete;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Mvc;

namespace BlogSiteDesign.Controllers
{
	[AllowAnonymous]
	public class NewsLetterController : Controller
	{
		NewsLetterManager nm = new NewsLetterManager(new EfNewsLetterRepository());

		public IActionResult SubscribeMail()
		{
			return View();
		}
		[HttpPost]
        public IActionResult SubscribeMail(NewsLetter p)
        {
			p.MailStatus = true;
			nm.TAdd(p);
			return RedirectToAction("index", "Blog");
        }
    }
}
