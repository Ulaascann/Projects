using DataAccessLayer.Concrete;
using Microsoft.AspNetCore.Mvc;
using System.Linq;
using System.Reflection.Metadata.Ecma335;

namespace BlogSiteDesign.ViewComponents.Writer
{
    public class WriterIsımGetirme : ViewComponent
    {
        Context c= new Context();
        public IViewComponentResult Invoke()
        {
            var usermail = User.Identity.Name;
            var WriterID= c.Writers.Where(x=>x.WriterMail==usermail).Select(y=>y.WriterID).FirstOrDefault();
            return View(WriterID);
        }
    }
}
