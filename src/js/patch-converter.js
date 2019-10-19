/*

'use strict';

const fs = require('fs');

let root = JSON.parse(fs.readFileSync('/home/mcl/audio/giada patches/experiences.gprj/experiences.gptc'));

// Update version number

root['version'] = '0.16.0';
root['version_major'] = 0;
root['version_minor'] = 16;
root['version_patch'] = 0;

// Add 'actions' and 'plugins' arrays to root

root['plugins'] = Array();
root['actions'] = Array();

// Update column IDs - must start from 1

root['columns'].forEach(function(c) {
	c.index++;
});

// Update channels IDs - must start from 4

root['channels'].forEach(function(c) {
	c.index = c.index + 4;
	root['plugins'] = root['plugins'].concat(c['plugins']);	
	root['actions'] = root['actions'].concat(c['actions']);	
});



console.log(root);

*/


