using BusinessLayer.Concrete;
using DataAccessLayer.Concrete;
using DataAccessLayer.EntityFramework;
using Microsoft.AspNetCore.Mvc;
using System.Linq;

namespace BlogSiteDesign.ViewComponents.Blog
{
    public class BlogLast3Post : ViewComponent
    {
        BlogManager bm = new BlogManager(new EfBlogRepository());
        
        public IViewComponentResult Invoke() 
        {

            var value = bm.GetLast3Blog();
            return View(value); 
        }
    }
}
