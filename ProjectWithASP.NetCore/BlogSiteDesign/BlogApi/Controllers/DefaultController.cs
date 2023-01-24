using BlogApi.DataAccessLayer;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using System.Linq;

namespace BlogApi.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class DefaultController : ControllerBase
    {

        //MEVCUT VERİLERİ APİ İLE ÇEKME
        [HttpGet]
        public IActionResult EmployeeList()
        {
            using var c = new Context();
            var values = c.Employees.ToList();
            return Ok(values);
        }

        //POST METODU İLE VERİ EKLEME APİ 
        [HttpPost]
        public IActionResult EmployeeAdd(Employee e)
        {
            using var c = new Context();

            c.Add(e);
            c.SaveChanges();
            return Ok();
        }

        //İD 'YE GÖRE VERİ GETİRME İŞLEMİ APİ 
        [HttpGet("{id}")]
        public IActionResult EmployeeGet(int id)
        {
            using var c = new Context();
            var employee = c.Employees.Find(id);
            if (employee == null)
            {
                return NotFound();
            }
            else
            {
                return Ok(employee);
            }
        }

        //APİ SİLME İŞLEMİ SWAGGER VE POSTMAN KONTROLÜ İLE 
        [HttpDelete("{id}")]
        public IActionResult EmployeeDelete(int id)
        {
            using var c = new Context();
            var employee = c.Employees.Find(id);
            if (employee == null)
            {
                return NotFound();
            }
            else
            {
                c.Remove(employee);
                c.SaveChanges();
                return Ok();
            }

        }
        [HttpPut]
        public IActionResult EmployeeUpdate(Employee e)
        {
            using var c = new Context();
            var emp = c.Employees.Find(e.ID);
            if(emp == null)
            {
                return NotFound();
            }
            else
            {
                emp.Name=e.Name;
                c.Update(emp);
                c.SaveChanges();
                return Ok();
            }
        }

    }
}
