(function ($) {
 "use strict";
 	var dateToday = new Date();
	 $('#data_1 .input-group.date').datepicker({
	 	startDate: dateToday,
		todayBtn: "linked",
		
		
		autoclose: true
		
	});
 
	$('#data_2 .input-group.date').datepicker({
		startView: 1,
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true,
		format: "dd/mm/yyyy"
	});

	$('#data_3 .input-group.date').datepicker({
		startView: 2,
		todayBtn: "linked",
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true
	});

	$('#data_4 .input-group.date').datepicker({
		minViewMode: 1,
		keyboardNavigation: false,
		forceParse: false,
		forceParse: false,
		autoclose: true,
		todayHighlight: true
	});

	$('#data_5 .input-daterange').datepicker({
		keyboardNavigation: false,
		forceParse: false,
		autoclose: true
	});
 
})(jQuery); 