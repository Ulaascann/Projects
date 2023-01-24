using System.ComponentModel.DataAnnotations;

namespace BlogSiteDesign.Models
{
    public class UserSignInViewModel
    {
        [Required(ErrorMessage ="Lütfen Kullanıcı Adınızı Giriniz?")]
        public string username { get; set; }
        [Required(ErrorMessage = "Lütfen şifrenizi Giriniz?")]
        public string password { get; set; }
    }
}
