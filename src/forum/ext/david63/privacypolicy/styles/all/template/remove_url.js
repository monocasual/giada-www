;(function($, document)
{
	'use strict';

	$(document).ready(function()
	{
		// Disable the search box
		$('.search-header').remove();

		$('a').click(function()
		{
        	var address 		= $(this).attr('href');
			var policy 			= ~address.indexOf('privacypolicy');
			var cookies 		= ~address.indexOf('ucp');
			var contactadmin	= ~address.indexOf('contactadmin');

			if (address.substring(0, 4) != 'http')
			{
				if (policy == 0 && cookies == 0 && contactadmin == 0)
				{
					$('ul').click(function(event)
					{
						event.preventDefault();
						alert(cookieLinks);
						$('ul').off('click');
					});
				}
			}
			else
			{
				window.location = $(this).attr('href');
			}
    	});
	});

})(jQuery, document);
