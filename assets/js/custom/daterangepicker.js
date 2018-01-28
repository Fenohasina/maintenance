/* DATERANGEPICKER */

function init_daterangepicker_single_call() {

	if( typeof ($.fn.daterangepicker) === 'undefined'){ return; }
	// console.log('init_daterangepicker_single_call');

	// AJOUT FENOHASINA
	var optionSet ={
		singleDatePicker: true,
		singleClasses: "picker_1",
		showDropdowns: true,
		locale: {
			format: 'DD/MM/YYYY',
			daysOfWeek: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
			monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
			firstDay: 1
		}
	};

	$('#date_demande').daterangepicker(optionSet,
		function(start, end, label) {
			// console.log(start.toISOString(), end.toISOString(), label);
		});
    $('#date_dispatch').daterangepicker(optionSet,
        function(start, end, label) {
            // console.log(start.toISOString(), end.toISOString(), label);
        });
    $('#date_validation').daterangepicker(optionSet,
        function(start, end, label) {
            // console.log(start.toISOString(), end.toISOString(), label);
        });

}