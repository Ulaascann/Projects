using BlogSiteDesign.Models;
using Microsoft.AspNetCore.Mvc;
using System.Collections.Generic;

namespace BlogSiteDesign.ViewComponents
{
	public class CommentList : ViewComponent
	{
		public IViewComponentResult Invoke()
		{
			var commentValues = new List<UserComment>
			{
				new UserComment
				{
					ID = 1,
					Username="Esma"
				},
                new UserComment
				{
					ID=2,
					Username="Mert",
				},

                new UserComment
				{
					ID=3,
					Username="Esma"
				},

            };
			return View();
		}
	}
}
