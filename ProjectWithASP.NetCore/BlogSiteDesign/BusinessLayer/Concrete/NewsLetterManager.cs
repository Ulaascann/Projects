using BusinessLayer.Abstract;
using DataAccessLayer.Abstract;
using EntitiyLayer.Concrete;
using Microsoft.EntityFrameworkCore.Metadata.Internal;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BusinessLayer.Concrete
{
	public class NewsLetterManager : INewsLetterService
	{
		INewsLetterDal _newsletter;

		public NewsLetterManager(INewsLetterDal newsletter)
		{
			_newsletter = newsletter;
		}

		public NewsLetter GetById(int id)
		{
			throw new NotImplementedException();
		}

		public List<NewsLetter> GetList()
		{
			throw new NotImplementedException();
		}

		public void TAdd(NewsLetter t)
		{
			_newsletter.Insert(t);
		}

		public void TDelete(NewsLetter t)
		{
			_newsletter.Delete(t);
		}

		public void TUpdate(NewsLetter t)
		{
			_newsletter.Update(t);
		}
	}
}
