;(function($, document)
{
	'use strict';
	
	$(document).ready(function ()
	{
		$('a').on('click.myDisable', function(e)
		{
			e.preventDefault();
			alert(cookieLinks);
 			return true;
		});

	  

	});

})(jQuery, document);
