using BusinessLayer.Abstract;
using DataAccessLayer.Abstract;
using DataAccessLayer.EntityFramework;
using EntitiyLayer.Concrete;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BusinessLayer.Concrete
{
    public class MessageManager : IMessageService
    {
        private IMessageDal _messageDal;

        public MessageManager(IMessageDal messageDal)
        {
            _messageDal = messageDal;
        }

        public Message GetById(int id)
        {
            return _messageDal.GetByID(id);
        }

        public List<Message> GetInboxListByWriter(string p)
        {
            return _messageDal.GetListAll(x => x.Receiver == p);
        }

        public List<Message> GetList()
        {
            return _messageDal.GetListAll();
        }

       

        public void TAdd(Message t)
        {
            _messageDal.Insert(t);
        }

        public void TDelete(Message t)
        {
           _messageDal.Delete(t);
        }

        public void TUpdate(Message t)
        {
            _messageDal.Update(t);
        }
    }
}
