
using Microsoft.EntityFrameworkCore;
using System.Collections.Generic;

namespace BlogApi.DataAccessLayer
{
    public class Context :DbContext
    {
        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            optionsBuilder.UseSqlServer("Server=DESKTOP-HTVEFOH;Database=BlogApiDB;User Id=sa;Password=1234;");
        }
        public DbSet<Employee> Employees { get; set; }
        public IEnumerable<object> Users { get; set; }
    }
}
