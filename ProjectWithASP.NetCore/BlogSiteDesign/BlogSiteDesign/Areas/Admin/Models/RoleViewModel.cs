using System.ComponentModel.DataAnnotations;

namespace BlogSiteDesign.Areas.Admin.Models
{
    public class RoleViewModel
    {
        [Required(ErrorMessage ="Lütfen Rol Adı Giriniz")]
        public string name { get; set; }
    }
}
