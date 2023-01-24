using EntitiyLayer.Concrete;
using FluentValidation;
using FluentValidation.AspNetCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace BusinessLayer.ValidationRules
{
	public class WriterValidator : AbstractValidator<Writer>
	{
		public WriterValidator()
		{
			RuleFor(x => x.WriterName).NotEmpty().WithMessage("Yazar adı soyadı kısmı boş geçilemez.");
			RuleFor(x => x.WriterMail).NotEmpty().WithMessage("Mail adresi boş geçilemez.");
			RuleFor(x => x.WriterPassword).NotEmpty().WithMessage("Şifre boş geçilemez.");
			RuleFor(x => x.WriterName).MinimumLength(2).WithMessage("En az 2 karakter girişi yapınız.");
			RuleFor(x => x.WriterName).MaximumLength(50).WithMessage("Lütfen En Fazla 50 karakterlik veri girişi yapınız.");
		}
	}
}
