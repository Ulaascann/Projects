﻿using BusinessLayer.Abstract;
using DataAccessLayer.Abstract;
using EntitiyLayer.Concrete;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BusinessLayer.Concrete
{
	public class CommentManager : ICommentService
	{
		ICommentDal _commentDal;
		public CommentManager(ICommentDal commentDal)
		{
            _commentDal=commentDal;

        }
	

		public Comment GetById(int id)
		{
			throw new NotImplementedException();
		}

		public List<Comment> GetList(int id)
		{
			return _commentDal.GetListAll(x=>x.BlogID==id);
		}

		public List<Comment> GetList()
		{
			throw new NotImplementedException();
		}

		public void TAdd(Comment t)
		{
			_commentDal.Insert(t);
		}

		public void TDelete(Comment t)
		{
			_commentDal.Delete(t);
		}

		public void TUpdate(Comment t)
		{
			_commentDal.Update(t);
		}
	}
}
