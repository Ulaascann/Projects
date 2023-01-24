using BusinessLayer.Concrete;
using DataAccessLayer.EntityFramework;
using EntitiyLayer.Concrete;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Mvc;
using System;

namespace BlogSiteDesign.Controllers
{
	[AllowAnonymous]
	public class ContactController : Controller
	{
		ContactManager cm = new ContactManager(new EfContactRepository());
		public IActionResult Index()
		{
			return View();
		}
		[HttpPost]
        public IActionResult Index(Contact p)
        {
			p.ContactDate=DateTime.Parse(DateTime.Now.ToShortDateString());
			p.ContactStatus = true;
			cm.TAdd(p);
			return RedirectToAction("Index", "Blog");
        }
    }
}
