;(function($, document)
{
	'use strict';

	$(document).ready(function ()
	{
		var cookieName		= phpbbCookieName + '_ca';
    	var cookieAccept	= getCookie(cookieName);
		var winHeight		= window.innerHeight;
		const blockHeight	= 70;

    	if (cookieAccept != true)
		{
			// Reduce top if window is less than the top, otherwise it would "fall off" the page
			if (winHeight < parseInt(cookieBoxTop) + blockHeight)
			{
				cookieBoxTop = winHeight - blockHeight;
			}

			$('.cookieAcceptBox').addClass('cookie-box');
			$('.cookieAcceptBox').html(cookieText + '</a> <a href=>[ ' + acceptText + ' ]</a>');

			// Set the css elements from the variables
			$('.cookieAcceptBox').css({
				'background-color': cookieBoxBgColour,
				'color': cookieBoxTxtColour,
				'border': cookieBoxBdWidth + 'px solid' + cookieBoxBdColour,
				'top': cookieBoxTop + 'px',
			});

			$('.cookieAcceptBox a').css('color', cookieBoxHrefColour);

        	$('.cookieAcceptBox').fadeIn(300);
        	$('.cookieAcceptBox a').click(function ()
			{
            	$(".cookieAcceptBox").fadeOut(300);
            	setCookie(cookieName);
				location.reload(true);
        	});
    	}
	});

	function setCookie(cookieName)
	{
		var expire		= '';
		var cookieData	= '';
        var expireDate	= new Date();
		var expireTime	= 60 * 60 * 24 * 365 * 1000; // Set default to one year

		if (cookieExpires == false )
		{
			expireTime = expireTime * 10; // Set to ten years
		}

		expireDate.setTime(expireDate.getTime() + expireTime);
        expire = '; expires=' + expireDate.toGMTString();

		cookieData = cookieName + '=1' + expire + '; path=' + cookiePath;

		if (cookieDomain != false || cookieDomain == '127.0.0.1' || cookieDomain.indexOf('.') === false)
		{
			cookieData = cookieData + '; domain=' + cookieDomain;
		}

		if (cookieSecure != false)
		{
			cookieData = cookieData + '; secure';
		}

    	document.cookie = cookieData;

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
