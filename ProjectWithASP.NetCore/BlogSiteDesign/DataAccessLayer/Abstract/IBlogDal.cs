using EntitiyLayer.Concrete;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccessLayer.Abstract
{
    public interface IBlogDal: IGenericDal<Blog>
    {
        List<Blog> GetLast10Blogs();
        List<Blog> GetListWithCategory();
        List<Blog> GetListWithCategoryByWriter(int id);
    }
}
