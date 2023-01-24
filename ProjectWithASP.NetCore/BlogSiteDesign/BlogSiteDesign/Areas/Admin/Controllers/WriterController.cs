using BlogSiteDesign.Areas.Admin.Models;
using DocumentFormat.OpenXml.Office2010.ExcelAc;
using Microsoft.AspNetCore.Mvc;
using Newtonsoft.Json;
using System.Collections.Generic;
using System.Linq;

namespace BlogSiteDesign.Areas.Admin.Controllers
{
    [Area("Admin")]
    public class WriterController : Controller
    {

        //Model sınıfına bir class ekledik ve nesne ürettik. Burayı referans aldık .
     
        public static List<WriterClass> writers = new List<WriterClass>
        {
           new WriterClass
           {
               Id=1,
               Name="Ayşe"

           } ,
           new WriterClass
           {
               Id=2,
               Name="Esma"

           },
           new WriterClass
           {
               Id=3,
               Name="Ahmet"
           }

        };

        public IActionResult Index()
        {
            return View();
        }

        // 1)  AJAX İLE YAZARLARI LİSTELEME İÇİN ACTİON 
        public IActionResult WriterList()
        {
            var jsonWriters=JsonConvert.SerializeObject(writers);
            return Json(jsonWriters);
        }

        // 2) ID DEĞERİNE GÖRE YAZARI GETİRME İŞLEMİ İÇİN ACTİON
        public IActionResult GetWriterByID(int writerid)
        {
            var findWriter = writers.FirstOrDefault(x => x.Id == writerid);
            var jsonWriters= JsonConvert.SerializeObject(findWriter);
            return Json(jsonWriters);
        }

        // 3) AJAX İLE EKLEME İŞLEMİ İÇİN ACTİON
        [HttpPost]
        public IActionResult AddWriter(WriterClass w)
        {
            writers.Add(w);
            var jsonWriters = JsonConvert.SerializeObject(w);
            return Json(jsonWriters);
        }
        // 4) AJAX İLE SİLME İŞLEMİ İÇİN ACTİON
        public IActionResult DeleteWriter(int id)
        {
            var writer= writers.FirstOrDefault(x => x.Id == id);
            writers.Remove(writer);

            return Json(writer);
        }

        // 5) AJAX İLE GÜNCELLEME İŞLEMİ İÇİN ACTİON
        public IActionResult UpdateWriter(WriterClass w)
        {
            var writer = writers.FirstOrDefault(x => x.Id == w.Id);
            writer.Name = w.Name;
            var jsonWriter= JsonConvert.SerializeObject(w);
            return Json(jsonWriter);
        }

        
    }
}
