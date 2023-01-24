using BusinessLayer.Abstract;
using DataAccessLayer.Abstract;
using EntitiyLayer.Concrete;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BusinessLayer.Concrete
{

	public class ContactManager : IContactService
	{
		IContactDal _contacdal;

		public ContactManager(IContactDal contacdal)
		{
			_contacdal = contacdal;
		}

	

		public Contact GetById(int id)
		{
			throw new NotImplementedException();
		}

		public List<Contact> GetList()
		{
			throw new NotImplementedException();
		}

		public void TAdd(Contact t)
		{
			_contacdal.Insert(t);
		}

		public void TDelete(Contact t)
		{
			_contacdal.Delete(t);
		}

		public void TUpdate(Contact t)
		{
			_contacdal.Update(t);
		}
	}
}
