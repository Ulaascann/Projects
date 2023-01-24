using System.ComponentModel.DataAnnotations;

namespace BlogSiteDesign.Models
{
    public class UserSignUpViewModel
    {
        [Display(Name ="Ad Soyad")]
        [Required(ErrorMessage ="Lütfen Ad Soyad Giriniz.")]
        public string NameSurname { get; set; }

        [Required(ErrorMessage ="Lütfen Şifreniz Büyük-Küçük harfli en az 6 haneli olsun içerisinde rakam ve noktalama işaretli içersin.")]
        public string Password { get; set; }

        [Display(Name = "Şifre Tekrar")]
        [Compare("Password",ErrorMessage = "Şifreler Uyuşmuyor.")]
        public string ConfirmPassword { get; set; }

        [Display(Name = "Mail Adresi")]
        [Required(ErrorMessage = "Lütfen Mail Giriniz")]
        public string Mail { get; set; }

        [Display(Name = "Kullanıcı Adı ")]
        [Required( ErrorMessage = "Lütfen Kullanıcı Adınızı Giriniz")]
        public string UserName { get; set; }


    }
}
