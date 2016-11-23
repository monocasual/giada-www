var GLM = GLM || {};

GLM.MainMenu = {

  'elems': {
		'burgerButton': $('.glm-header nav.main-menu li.burger-button'),
    'burgerMenu':   $('.glm-header nav.burger-menu')
	},

  'init': function() {
    var self = this;
    this.elems.burgerButton.click(function(e) {
      e.preventDefault();
      self.elems.burgerMenu.toggle();
    });
  }
};


/* -------------------------------------------------------------------------- */


$(document).ready(function() {
	GLM.MainMenu.init();
});
