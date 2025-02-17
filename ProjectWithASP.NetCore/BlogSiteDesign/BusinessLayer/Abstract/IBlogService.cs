﻿using EntitiyLayer.Concrete;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BusinessLayer.Abstract
{
    public interface IBlogService : IGenericService<Blog>
    {

        //List<Blog> GetLast10Blog();
        List<Blog> GetBlogListWithCategory();
        List<Blog> GetBlogListByWriter(int id);
        List<Blog> GetLast3Blog();
        List<Blog> GetBlogByID(int id);
        
        
    }
}
