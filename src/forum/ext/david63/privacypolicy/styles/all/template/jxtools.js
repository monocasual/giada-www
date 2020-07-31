/*
 * JxTools - JavaScript utility library
 *
 * @copyright (c) 2015 javiexin ( www.exincastillos.es )
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * @author Javier Lopez (javiexin)
 */

var jxtools = {};

(function($) { // Avoid conflicts with other libraries

'use strict';

/*
 * JxTools - Perform actions on the DOM
 *
 * If the JxDom set of attributes is present in a DOM element, it is processed by this function, in the following order
 * [jxdom-target]  Attribute that specifies (with a DOM selector) the DOM object that is the initial target of this operation; optional, defaults to $(this)
 * [jxdom-closest] DOM selector to apply to the target, to find the appropriate ancestor (starting with $(this)), that becomes the new target; optional
 * [jxdom-find]    DOM selector to apply to the current target, to find the appropriate descendant, that becomes the new target; optional
 * [jxdom-action]  Action to perform on the final target, using the contents of $(this) as parameter (if appropriate); mandatory
 *                 Actions may be: remove|replace|before|after|prepend|append
 * Each step should yield a single element as result, otherwise, the results are undefined
 * When these operations are completed, this object is discarded (removed from the DOM)
 */
$('[jxdom-action]').each(function() {
	var $this = $(this);
	var $contents = $this.contents();
	var domTarget = $this.attr('jxdom-target'),
		domClosest = $this.attr('jxdom-closest'),
		domFind = $this.attr('jxdom-find'),
		domAction = $this.attr('jxdom-action');
	var $target;

	$target = (domTarget !== undefined) ? $(domTarget) : $this;
	$target = (domClosest !== undefined) ? $target.closest(domClosest) : $target;
	$target = (domFind !== undefined) ? $target.find(domFind) : $target;

	switch (domAction) {
		case 'replace':
			$target.replaceWith($contents);
			break;
		case 'remove':
			$target.remove();
			break;
		case 'before':
			$target.before($contents);
			break;
		case 'after':
			$target.after($contents);
			break;
		case 'append':
			$target.append($contents);
			break;
		case 'prepend':
			$target.prepend($contents);
			break;
		default:
			break;
	}
	$this.remove();
});

})(jQuery); // Avoid conflicts with other libraries
