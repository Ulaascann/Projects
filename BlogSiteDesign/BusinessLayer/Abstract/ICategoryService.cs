using EntitiyLayer.Concrete;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BusinessLayer.Abstract
{
    //Business Katmaında Concrate içerisinde tutulan sınıflar Service olarak tutulur.
    public interface ICategoryService : IGenericService<Category>
    {
 
    }
}
