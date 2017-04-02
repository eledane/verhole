$(function () {
	$.nette.init();

	$.nette.ext('success', {
		success: function (payload) {
			if (payload.showModal === true) {
				$('#handler-modal').modal();
			}
		}
	});
});

$('input[name="call_time"]').ready(function () {
	$('input[name="call_time"]').datetimepicker({
		step: 30,
		lang: 'cs',
		dayOfWeekStart: 1
	});
});

var colors = [
	'#accbe8',
	'#9295ca',
	'#9eceb4',
	'#a9b2b1',
	'#cdb48c',
	'#ffd602',
	'#e66665',
	'#f47d43',
	'#ae70af',
	'#076bb6'
];

hashCode = function (str) {
	var hash = 0;
	if (str.length === 0) return hash;
	for (i = 0; i < str.length; i++) {
		char = str.charCodeAt(i);
		hash = ((hash << 5) - hash) + char;
		hash = hash & hash; // Convert to 32bit integer
	}
	return hash;
};

$('#dashboard-listing').ready(function () {
	$('#dashboard-listing tbody tr .grid-cell-handler').each(function () {
		var handler = $.trim($(this).html());
		if (handler) {
			var hash = Math.abs(hashCode(handler)) % colors.length;
			$(this).parent().find('td').css('background-color', colors[hash]);
		}

	});
});

$('#listing').ready(function () {
	$('#listing tbody tr .grid-cell-handler').each(function () {
		var handler = $.trim($(this).html());
		if (handler) {
			var hash = Math.abs(hashCode(handler)) % colors.length;
			$(this).parent().find('td').css('background-color', colors[hash]);
		}

	});
});

var ColoredGrid = function ColoredGrid() {
	this.selectors = {};
	this.selectors.$status = $('#listing tbody tr .grid-cell-status');

	this.addClasses();
};

ColoredGrid.prototype.addClasses = function () {
	for (var selector in this.selectors) {
		if (this.selectors[selector].length) {
			this.selectors[selector].each(function () {
				var $this = $(this);
				var handler = $.trim($this.text()).toLowerCase();
				$this.closest('tr').addClass(handler);
			});
		}
	}
};

new ColoredGrid();

$('[data-toggle="tooltip"]').tooltip();
