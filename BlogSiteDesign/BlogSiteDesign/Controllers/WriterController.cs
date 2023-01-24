using BlogSiteDesign.Models;
using BusinessLayer.Concrete;
using BusinessLayer.ValidationRules;
using DataAccessLayer.Concrete;
using DataAccessLayer.EntityFramework;
using EntitiyLayer.Concrete;
using FluentValidation.Results;
using Microsoft.AspNetCore.Authorization;
using Microsoft.AspNetCore.Identity;
using Microsoft.AspNetCore.Mvc;
using System;
using System.IO;
using System.Linq;
using System.Threading.Tasks;

namespace BlogSiteDesign.Controllers
{

    public class WriterController : Controller
    {
        WriterManager wm = new WriterManager(new EfWriterRepository());
        Context c = new Context();
        UserManager userManager = new UserManager(new EfUserRepository());

        private readonly UserManager<AppUser> _userManager;

        public WriterController(UserManager<AppUser> userManager)
        {
            _userManager = userManager;
        }

        [Authorize]
        public IActionResult Index()
        {
            var usermail=User.Identity.Name;
            ViewBag.v = usermail;
            return View();
        }
        public IActionResult WriterProfile()
        {
            return View();
        }
        public IActionResult WriterMail()
        {
            return View();
        }
        [AllowAnonymous]
        public IActionResult Test()
        {
            return View();
        }
        [AllowAnonymous]
        public PartialViewResult PartialWriterNavbar()
        {
            return PartialView();
        }
        [AllowAnonymous]
        public PartialViewResult PartialWriterFooter()
        {
            return PartialView();
        }

        
        [HttpGet]
        public async Task<IActionResult> WriterEditProfile()
        {
            
            /* ASENKRONİK OLMAYAN HALİ
            Context c = new Context();
            var username = User.Identity.Name;
            var usermail = c.Users.Where(x => x.UserName == username).Select(y => y.Email).FirstOrDefault();

            UserManager um = new UserManager(new EfUserRepository());

            var id = c.Users.Where(x => x.Email == usermail).Select(y => y.Id).FirstOrDefault();
            var values = um.GetById(id);
            return View(values);

            */
            
            var values=await _userManager.FindByNameAsync(User.Identity.Name);
            UserUpdateViewModel model = new UserUpdateViewModel();
            model.namesurname = values.NameSurname;
            model.mail = values.Email;
            model.username = values.UserName;
            model.imageurl=values.ImageUrl;
            return View(model);



        }
        [HttpPost]   
        public async Task<IActionResult> WriterEditProfile(UserUpdateViewModel model)
        {
            var values = await _userManager.FindByNameAsync(User.Identity.Name);

            values.NameSurname = model.namesurname;
            values.UserName = model.username;
            values.Email = model.mail;
            values.ImageUrl = model.imageurl;

            values.PasswordHash= _userManager.PasswordHasher.HashPassword(values,model.password);

            var result = await _userManager.UpdateAsync(values);

            return RedirectToAction("Index", "Dashboard");
 
            
        }

        [AllowAnonymous]
        [HttpGet]
        public IActionResult WriterAdd()
        {
            return View();
        }

        [AllowAnonymous]
        [HttpPost]
        public IActionResult WriterAdd(AddProfileImage param)
        {
            Writer w = new Writer();
            if(param.WriterImage!= null)
            {
                var extension = Path.GetExtension(param.WriterImage.FileName);
                var newimagename = Guid.NewGuid() + extension;
                var location = Path.Combine(Directory.GetCurrentDirectory(), "wwwroot/WriterImageFile/", newimagename);
                var stream = new FileStream(location, FileMode.Create);
                param.WriterImage.CopyTo(stream);
                w.WriterImage = newimagename;
            }

            w.WriterName = param.WriterName;
            w.WriterMail = param.WriterMail;
            w.WriterPassword = param.WriterPassword;
            w.WriterStatus = true;
            w.WriterAbout=param.WriterAbout;

            wm.TAdd(w);
            return RedirectToAction("Index", "Dashboard");
        }
    }
}
