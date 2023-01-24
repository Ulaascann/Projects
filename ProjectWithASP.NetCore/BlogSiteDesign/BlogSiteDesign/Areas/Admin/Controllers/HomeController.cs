using Microsoft.AspNetCore.Mvc;

namespace BlogSiteDesign.Areas.Admin.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }
    }
}
