using EntitiyLayer.Concrete;
using Microsoft.AspNetCore.Mvc;

namespace BlogSiteDesign.Areas.Admin.ViewComponents.Statistic
{
    public class Statistic3 : ViewComponent
    {
        Contact c = new Contact();
        public IViewComponentResult Invoke()
        {
            return View();
        }
    }
}
