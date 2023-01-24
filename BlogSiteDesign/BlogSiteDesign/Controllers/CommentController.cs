using BusinessLayer.Concrete;
using DataAccessLayer.EntityFramework;
using EntitiyLayer.Concrete;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Mvc;
using System;

namespace BlogSiteDesign.Controllers
{
    [AllowAnonymous]
    public class CommentController : Controller
	{
		CommentManager cm = new CommentManager(new EfCommentRepository());

		public IActionResult Index()
		{
			return View();
		}

        public IActionResult AddComment()
        {
            return View();
        }
        [HttpPost]
        public IActionResult AddComment(Comment p)
        {
            p.CommentDate = DateTime.Parse(DateTime.Now.ToShortDateString());
            p.CommentStatus = true;
            p.BlogID = 4;
            cm.TAdd(p);
            return RedirectToAction("index", "Blog");
        }

        //[HttpGet]
        //public PartialViewResult PartialAddComment()
        //{
        //    return PartialView();
        //}

   //     [HttpPost]
   //     public PartialViewResult PartialAddComment(Comment p)
   //     { 
			//p.CommentDate=DateTime.Parse(DateTime.Now.ToShortDateString());
			//p.CommentStatus = true;
			//p.BlogID = 2;
			//cm.CommentAdd(p);
   //         return PartialView();
   //     }
        public PartialViewResult PartialCommentListByBlog(int id)
		{
			var values = cm.GetList(id);
			return PartialView(values);
		}
	}
}
