;(function($, document)
{
	'use strict';

	$(document).ready(function ()
	{
		var cookieName		= phpbbCookieName + '_ca';
    	var cookieAccept	= getCookie(cookieName);

		var ua = window.navigator.userAgent;

    	if (cookieAccept != true)
		{
			$('.cookieAcceptBox').addClass('cookie-box');
			$('.cookieAcceptBox').html(cookieText + '</a> <a href="#">' + acceptText + '</a>');

			// Set the css elements from the variables
			$('.cookieAcceptBox').css({
				'background-color': cookieBoxBgColour,
				'color': cookieBoxTxtColour,
				'border': cookieBoxBdWidth + 'px solid' + cookieBoxBdColour,
			});

			$('.cookieAcceptBox a').css('color', cookieBoxHrefColour);

        	$('.cookieAcceptBox').fadeIn(300);
        	$('.cookieAcceptBox a').click(function ()
			{
				if ($(this).is('[href*=#]'))
				{
            		$(".cookieAcceptBox").fadeOut(300);
            		setCookie(cookieName);
				}
				location.reload(true);
        	})
    	}
	});

	function detectIE()
	{
    	var ua = window.navigator.userAgent;

		// Is any version of IE/Edge
    	if (ua.indexOf('MSIE ') > 0 || ua.indexOf('Trident/') > 0 || ua.indexOf('Edge/') > 0)
		{
			return true;
    	}

    	// Other browser
    	return false;
	}

	function setCookie(cookieName)
	{
		var expire		= '';
        var expireDate	= new Date();
		var expireTime	= 60 * 60 * 24 * 365 * 1000; // Set default to one year

		if (cookieExpires == false)
		{
			expireTime = expireTime * 10; // Set to ten years
		}

        expireDate.setTime(expireDate.getTime() + expireTime);
        expire = '; expires=' + expireDate.toGMTString();

    	document.cookie = cookieName + '=1' + expire + '; path=/';

		return null;
	}

	function getCookie(cookieName)
	{
    	var name	= cookieName + "=";
    	var chunk	= document.cookie.split(";");

    	for (var i = 0; i < chunk.length; i++)
		{
        	var element = chunk[i];
        	while (element.charAt(0) == " ")
			{
        		element = element.substring(1, element.length);
			}
        	if (element.indexOf(name) == 0) {
        		return element.substring(name.length, element.length);
			}
    	}
    	return null;
	}

})(jQuery, document);
