#pragma checksum "C:\Users\esmas\Desktop\tm\arap esmoş\BlogSiteDesign\BlogSiteDesign\Areas\Admin\Views\Category\AddCategory.cshtml" "{ff1816ec-aa5e-4d10-87f7-6f4963833460}" "8cc39f880241a61d29fab2abacbafc318a5c31ba"
// <auto-generated/>
#pragma warning disable 1591
[assembly: global::Microsoft.AspNetCore.Razor.Hosting.RazorCompiledItemAttribute(typeof(AspNetCore.Areas_Admin_Views_Category_AddCategory), @"mvc.1.0.view", @"/Areas/Admin/Views/Category/AddCategory.cshtml")]
namespace AspNetCore
{
    #line hidden
    using System;
    using System.Collections.Generic;
    using System.Linq;
    using System.Threading.Tasks;
    using Microsoft.AspNetCore.Mvc;
    using Microsoft.AspNetCore.Mvc.Rendering;
    using Microsoft.AspNetCore.Mvc.ViewFeatures;
#nullable restore
#line 1 "C:\Users\esmas\Desktop\tm\arap esmoş\BlogSiteDesign\BlogSiteDesign\Areas\Admin\Views\_ViewImports.cshtml"
using BlogSiteDesign.Areas.Admin;

#line default
#line hidden
#nullable disable
#nullable restore
#line 2 "C:\Users\esmas\Desktop\tm\arap esmoş\BlogSiteDesign\BlogSiteDesign\Areas\Admin\Views\_ViewImports.cshtml"
using BlogSiteDesign.Areas.Admin.Models;

#line default
#line hidden
#nullable disable
    [global::Microsoft.AspNetCore.Razor.Hosting.RazorSourceChecksumAttribute(@"SHA1", @"8cc39f880241a61d29fab2abacbafc318a5c31ba", @"/Areas/Admin/Views/Category/AddCategory.cshtml")]
    [global::Microsoft.AspNetCore.Razor.Hosting.RazorSourceChecksumAttribute(@"SHA1", @"892d9d89b8fc5a802e63b61fb733c54541b6102d", @"/Areas/Admin/Views/_ViewImports.cshtml")]
    #nullable restore
    public class Areas_Admin_Views_Category_AddCategory : global::Microsoft.AspNetCore.Mvc.Razor.RazorPage<EntitiyLayer.Concrete.Category>
    #nullable disable
    {
        #pragma warning disable 1998
        public async override global::System.Threading.Tasks.Task ExecuteAsync()
        {
            WriteLiteral("\r\n\r\n\r\n");
#nullable restore
#line 5 "C:\Users\esmas\Desktop\tm\arap esmoş\BlogSiteDesign\BlogSiteDesign\Areas\Admin\Views\Category\AddCategory.cshtml"
  
    ViewData["Title"] = "AddCategory";
    Layout = "~/Views/Shared/AdminLayout.cshtml";

#line default
#line hidden
#nullable disable
            WriteLiteral("\r\n<h1>Yeni Kategori Girişi</h1>\r\n<br />\r\n\r\n");
#nullable restore
#line 13 "C:\Users\esmas\Desktop\tm\arap esmoş\BlogSiteDesign\BlogSiteDesign\Areas\Admin\Views\Category\AddCategory.cshtml"
 using (Html.BeginForm("AddCategory", "Category", FormMethod.Post))
{
    

#line default
#line hidden
#nullable disable
#nullable restore
#line 15 "C:\Users\esmas\Desktop\tm\arap esmoş\BlogSiteDesign\BlogSiteDesign\Areas\Admin\Views\Category\AddCategory.cshtml"
Write(Html.Label("Kategori Adı"));

#line default
#line hidden
#nullable disable
#nullable restore
#line 16 "C:\Users\esmas\Desktop\tm\arap esmoş\BlogSiteDesign\BlogSiteDesign\Areas\Admin\Views\Category\AddCategory.cshtml"
Write(Html.TextBoxFor(x=>x.CategoryName, new { @class="form-control"}));

#line default
#line hidden
#nullable disable
#nullable restore
#line 17 "C:\Users\esmas\Desktop\tm\arap esmoş\BlogSiteDesign\BlogSiteDesign\Areas\Admin\Views\Category\AddCategory.cshtml"
Write(Html.ValidationMessageFor(x=>x.CategoryName));

#line default
#line hidden
#nullable disable
            WriteLiteral("    <br />\r\n    <br />\r\n");
#nullable restore
#line 21 "C:\Users\esmas\Desktop\tm\arap esmoş\BlogSiteDesign\BlogSiteDesign\Areas\Admin\Views\Category\AddCategory.cshtml"
Write(Html.Label("Kategori Açıklaması"));

#line default
#line hidden
#nullable disable
#nullable restore
#line 22 "C:\Users\esmas\Desktop\tm\arap esmoş\BlogSiteDesign\BlogSiteDesign\Areas\Admin\Views\Category\AddCategory.cshtml"
Write(Html.TextAreaFor(x=>x.CategoryDescription,15,3, new { @class="form-control"}));

#line default
#line hidden
#nullable disable
#nullable restore
#line 23 "C:\Users\esmas\Desktop\tm\arap esmoş\BlogSiteDesign\BlogSiteDesign\Areas\Admin\Views\Category\AddCategory.cshtml"
Write(Html.ValidationMessageFor(x=>x.CategoryDescription));

#line default
#line hidden
#nullable disable
            WriteLiteral("    <br />\r\n    <br />\r\n");
            WriteLiteral("    <button type=\"submit\" class=\"btn btn-info\">Kategoriyi Kaydet</button>\r\n");
#nullable restore
#line 28 "C:\Users\esmas\Desktop\tm\arap esmoş\BlogSiteDesign\BlogSiteDesign\Areas\Admin\Views\Category\AddCategory.cshtml"
}

#line default
#line hidden
#nullable disable
            WriteLiteral("\r\n");
        }
        #pragma warning restore 1998
        #nullable restore
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.ViewFeatures.IModelExpressionProvider ModelExpressionProvider { get; private set; } = default!;
        #nullable disable
        #nullable restore
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.IUrlHelper Url { get; private set; } = default!;
        #nullable disable
        #nullable restore
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.IViewComponentHelper Component { get; private set; } = default!;
        #nullable disable
        #nullable restore
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.Rendering.IJsonHelper Json { get; private set; } = default!;
        #nullable disable
        #nullable restore
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.Rendering.IHtmlHelper<EntitiyLayer.Concrete.Category> Html { get; private set; } = default!;
        #nullable disable
    }
}
#pragma warning restore 1591
