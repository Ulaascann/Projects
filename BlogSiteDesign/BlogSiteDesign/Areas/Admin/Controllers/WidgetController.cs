using Microsoft.AspNetCore.Mvc;

namespace BlogSiteDesign.Areas.Admin.Controllers
{
    [Area("Admin")]
    public class WidgetController : Controller
    {
        public IActionResult Index()
        {
            return View();
        }
    }
}
