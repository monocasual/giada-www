;(function($, document)
{
	'use strict';

	$(document).ready(function ()
	{
		//Set the custom css colours when on the Cookie Page
		if (($(location).attr('href').indexOf('policy') >=0 ) && (cookieCustomPage == true))
		{
			$('#page-body').css({
				'background-color': cookiePageBgColour,
				'color': cookiePageTxtColour,
				'padding': '5px',
			});

			if (cookiePageCorners == true)
			{
				$('#page-body').css({
					'-webkit-border-radius': cookiePageRadius + 'px',
					'-moz-border-radius': cookiePageRadius + 'px',
					'border-radius': cookiePageRadius + 'px',
				});
			}

			$('h3').css('color', cookiePageTxtColour);
		}
	});

})(jQuery, document);
