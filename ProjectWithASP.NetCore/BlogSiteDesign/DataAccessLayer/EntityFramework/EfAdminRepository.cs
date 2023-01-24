using DataAccessLayer.Abstract;
using DataAccessLayer.Repositories;
using EntitiyLayer.Concrete;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer.EntityFramework
{
    internal class EfAdminRepository : GenericRepository<Admin>, IAdminDal 
    {
    }
}
