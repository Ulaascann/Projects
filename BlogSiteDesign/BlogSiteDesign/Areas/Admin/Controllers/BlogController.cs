using BlogSiteDesign.Areas.Admin.Models;
using ClosedXML.Excel;
using DataAccessLayer.Concrete;
using DocumentFormat.OpenXml.Office2010.ExcelAc;
using Microsoft.AspNetCore.Mvc;
using System.Collections.Generic;
using System.IO;
using System.Linq;

namespace BlogSiteDesign.Areas.Admin.Controllers
{
    [Area("Admin")]
    public class BlogController : Controller
    {
        //STATİC VERİ ÇEKİMİ EXCELL 
        public IActionResult ExportStaticExcelBlogList()
        {
            using(var workbook=new XLWorkbook())
            {
                var worksheet = workbook.Worksheets.Add("Blog Listesi");
                worksheet.Cell(1, 1).Value = "Blog ID";
                worksheet.Cell(1, 2).Value = "Blog Adı";

                int BlogRowCount = 2;
                foreach (var item in GetBlogList())
                {
                    worksheet.Cell(BlogRowCount, 1).Value = item.ID;
                    worksheet.Cell(BlogRowCount, 2).Value = item.BlogName;
                    BlogRowCount++;
                }
                using (var stream=new MemoryStream())
                {
                    workbook.SaveAs(stream);
                    var content = stream.ToArray();
                    return File(content, "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "Calisma1.xlsx");
                }
            }
           
        }
        //Verileri bu nesneden çekiyoruz. Bunun içinde BlogModel Oluşturuyoru Area içerisindeki model de ! 
        public List<BlogModel> GetBlogList()
        {
            List<BlogModel> bm = new List<BlogModel>
            {
                new BlogModel{ID=1,BlogName="C# Programlamaya giriş"},
                new BlogModel{ID=2,BlogName="Tesla Firmasnın Araçları"},
                new BlogModel{ID=3,BlogName="2020 Olimpiyatları"},
            };
            return bm;
        }

        public IActionResult BlogListExcel()
        {
            return View();
        }




        // DİNAMİK VERİ CEKİMİ

        public IActionResult ExportDynamicExcelBlogList()
        {
            using (var workbook = new XLWorkbook())
            {
                var worksheet = workbook.Worksheets.Add("Blog Listesi");
                worksheet.Cell(1, 1).Value = "Blog ID";
                worksheet.Cell(1, 2).Value = "Blog Adı";

                int BlogRowCount = 2;
                foreach (var item in BlogTitleList())
                {
                    worksheet.Cell(BlogRowCount, 1).Value = item.ID;
                    worksheet.Cell(BlogRowCount, 2).Value = item.BlogName;
                    BlogRowCount++;
                }
                using (var stream = new MemoryStream())
                {
                    workbook.SaveAs(stream);
                    var content = stream.ToArray();
                    return File(content, "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet", "Calisma1.xlsx");
                }
            }
        }

        //Buradada Blog2 Modeli oluşturduk. Admin Modelde buradan nesneleri çektik fakat ilişkisel verilerde yapmadık !
        public List<BlogModel2> BlogTitleList()
        {
            List<BlogModel2> blogmodel = new List<BlogModel2>();
            using (var c=new Context())
            {
                blogmodel = c.Blogs.Select(x => new BlogModel2
                {
                  ID=x.BlogID,
                  BlogName=x.BlogTitle
                }).ToList();
            }
            return blogmodel;
        }
        public IActionResult BlogTitleListExcel()
        {
            return View();
        }
    }


   
}
