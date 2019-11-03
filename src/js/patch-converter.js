var GLM = GLM || {};


GLM.PatchConverter = {

	"elems": {
		"input":  document.getElementsByClassName("input")[0],
		"output": document.getElementsByClassName("output")[0],
		"button": document.getElementsByClassName("convert")[0]
	},

	"isOlder": function(old, o1, o2, o3) {
		if (old.version_major < o1) return true;
		if (old.version_minor < o2) return true;		
		if (old.version_patch < o3) return true;
		return false;
	},

	"init": function() {
		let self = this;
		self.elems.button.onclick = function(e) {
			e.preventDefault();
			try {
				self.convert();
			}
			catch (error) {
				self.elems.output.value = error;
				throw error;
			}
		};
	},
	
	"convert": function() {
		let self = this;

		const oldp = JSON.parse(this.elems.input.value); 
		let   newp = {};

		let channelId = 0;
		let pluginId  = 0;
		let waveId    = 0;
		let actionId  = 0;

		newp.header        = "GIADAPTC";
		newp.version_major = 0;
		newp.version_minor = 16;
		newp.version_patch = 0;
		newp.name          = oldp.name;
		newp.bpm           = oldp.bpm.toFixed(2);
		newp.bars          = oldp.bars;
		newp.beats         = oldp.beats;
		newp.quantize      = oldp.quantize;
		newp.metronome     = Boolean(oldp.metronome);
		newp.samplerate    = oldp.samplerate;
		newp.columns       = [];
		newp.actions       = [];
		newp.waves         = [];
		newp.plugins       = [];

		/* Prepare columns. */

		oldp.columns.forEach(function(c) {
			let newc = {
				"id": c.index + 1,
				"width": c.width,
				"channels": []
			};
			newp.columns.push(newc);
		});

		/* Add hidden channels. */

		newp.channels = [
			{
				"id":     ++channelId,
				"type":   3,
				"volume": oldp.master_vol_out.toFixed(2),
				"plugins": []
			},
			{
				"id":      ++channelId,
				"type":    3,
				"volume":  oldp.master_vol_in.toFixed(2),
				"plugins": []
			},
			{
				"id":      ++channelId,
				"type":    3,
				"volume":  Number(1.0).toFixed(2),
				"plugins": []
			}
		];

		/* Prepare master OUT plugins. */

		oldp.master_out_plugins.forEach(function(p) {
			p.id = ++pluginId;
			p.params.forEach(function(param, index) {
				this[index] = param.toFixed(2);
			}, p.params);
			newp.channels[0].plugins.push(p.id);
			newp.plugins.push(p);
		});
		
		/* Prepare master IN plugins. */

		oldp.master_in_plugins.forEach(function(p) {
			p.id = ++pluginId;
			p.params.forEach(function(param, index) {
				this[index] = param.toFixed(2);
			}, p.params);
			newp.channels[1].plugins.push(p.id);
			newp.plugins.push(p);
		});

		/* Prepare channels. */

		oldp.channels.forEach(function(c) {
			const oldc = c;
			let   newc = {
				"id": oldc.index + 4,
				"type": oldc.type,
				"volume": oldc.volume.toFixed(2),
				"size": oldc.size,
				"name": oldc.name,
				"column": oldc.column + 1,
				"mute": oldc.mute,
				"solo": oldc.solo,
				/* Ancient patches had awful pan_left/pan_right */
				"pan": oldc.hasOwnProperty('pan') ? oldc.pan.toFixed(2) : 0.5,
				"armed": oldc.armed,
				"has_actions": oldc.actions.length > 0,
				"read_actions": true,
				"midi_in": oldc.midi_in,
				"midi_in_keyrel": oldc.midi_in_keyrel,
				"midi_in_keypress": oldc.midi_in_keypress,
				"midi_in_kill": oldc.midi_in_kill,
				"midi_in_arm": oldc.midi_in_arm,
				"midi_in_volume": oldc.midi_in_volume,
				"midi_in_mute": oldc.midi_in_mute,
				"midi_in_solo": oldc.midi_in_solo,
				"midi_in_filter": oldc.midi_in_filter,
				"midi_out_l": oldc.midi_out_l,
				"midi_out_l_playing": oldc.midi_out_l_playing,
				"midi_out_l_mute": oldc.midi_out_l_mute,
				"midi_out_l_solo": oldc.midi_out_l_solo,
				"key": oldc.key,
				"mode": oldc.mode,
				/* Patches older than 0.15.0 had boundaries recorded on samples,
				not frames. */
				"begin": self.isOlder(oldp, 0, 15, 0) ? oldc.begin / 2 : oldc.begin,
				"end":   self.isOlder(oldp, 0, 15, 0) ? oldc.end / 2 : oldc.end,
				"pitch": oldc.pitch.toFixed(2),
				"input_monitor": oldc.input_monitor,
				"midi_in_velo_as_vol": oldc.midi_in_velo_as_vol,
				"midi_in_read_actions": oldc.midi_in_read_actions,
				"midi_in_pitch": oldc.midi_in_pitch,
				"plugins": [],
				"wave_id": 0,  // second pass
			};

			/* Patches older than 0.15.1 have different Channel Mode values. */

			if (self.isOlder(oldp, 0, 15, 1)) {
				if      (newc.mode == 4)   newc.mode = 5; // ChannelMode::SINGLE_BASIC
				else if (newc.mode == 8)   newc.mode = 6; // ChannelMode::SINGLE_PRESS
				else if (newc.mode == 16)  newc.mode = 7; // ChannelMode::SINGLE_RETRIG
				else if (newc.mode == 32)  newc.mode = 3; // ChannelMode::LOOP_REPEAT
				else if (newc.mode == 64)  newc.mode = 8; // ChannelMode::SINGLE_ENDLESS
				else if (newc.mode == 128) newc.mode = 4; // ChannelMode::LOOP_ONCE_BAR
				else                       newc.mode = 1;
			}

			/* Prepare channel plugins. */

			oldc.plugins.forEach(function(p) {
				p.id = ++pluginId;
				p.params.forEach(function(param, index) {
					this[index] = param.toFixed(2);
				}, p.params);
				newp.plugins.push(p);
				newc.plugins.push(p.id);
			});

			/* Prepare wave. */

			if (oldc.sample_path !== "") {
				let wave = {
					"id": ++waveId,
					"path": oldc.sample_path
				};
				newp.waves.push(wave);
				newc.wave_id = wave.id;
			}

			/* Prepare actions. */

			oldc.actions.forEach((a) => {
				let newa = {};

				/* Patches older than 0.15.3 had a different Action structure. */
				if (self.isOlder(oldp, 0, 15, 3)) {
					if      (a.type == 1)   // KEY_PRESS
						newa.event = parseInt(0x90000000, 10);
					else if (a.type == 2)   // KEY_REL
						newa.event = parseInt(0x80000000, 10);
					else if (a.type == 4)   // KEY_KILL
						newa.event = parseInt(0x70000000, 10);
					else if (a.type == 32)  // VOLUME not supported, sorry :)
						return;
					else if (a.type == 64)  // MIDI EVENT
						newa.event = a.i_value;

					/* Patches older than 0.15.0 had actions recorded on samples,
					not frames. */
					if (self.isOlder(oldp, 0, 15, 0))
						newa.frame = a.frame / 2;
					else
						newa.frame = a.frame;
					
					newa.id      = ++actionId;
					newa.channel = newc.id;
					newa.prev    = 0;
					newa.next    = 0;			
				}
				else {
					newa = {
						"id":      a.id,
						"channel": newc.id,
						"frame":   a.frame,
						"event":   a.event,
						"prev":    a.prev === -1 ? 0 : a.prev,
						"next":    a.next === -1 ? 0 : a.next
					};
				}
				newp.actions.push(newa);
			});

			newp.channels.push(newc);
		});

		/* Stringify JSON. */

		let output = JSON.stringify(newp);

		/* Remove double quotes around fixed floating point values. */

		let regex = /"(\d+).(\d+)"/gi;
		output = output.replace(regex, "$1.$2");

		this.elems.output.value = output;
	}
};


/* -------------------------------------------------------------------------- */


window.onload = function() {
	GLM.PatchConverter.init();
};
