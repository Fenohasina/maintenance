/* DATERANGEPICKER */

function init_daterangepicker() {

	if( typeof ($.fn.daterangepicker) === 'undefined'){ return; }
			// console.log('init_daterangepicker');
			
			var cb = function(start, end, label) {
			  // console.log(start.toISOString(), end.toISOString(), label);
			  $('#reportrange span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
			};

			var optionSet1 = {
				startDate: moment().subtract(29, 'days'),
				endDate: moment(),
				minDate: '01/01/2012',
				maxDate: '12/31/2015',
				dateLimit: {
					days: 60
				},
				showDropdowns: true,
				showWeekNumbers: true,
				timePicker: false,
				timePickerIncrement: 1,
				timePicker12Hour: true,
				ranges: {
					'Today': [moment(), moment()],
					'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'Last 7 Days': [moment().subtract(6, 'days'), moment()],
					'Last 30 Days': [moment().subtract(29, 'days'), moment()],
					'This Month': [moment().startOf('month'), moment().endOf('month')],
					'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				},
				opens: 'left',
				buttonClasses: ['btn btn-default'],
				applyClass: 'btn-small btn-primary',
				cancelClass: 'btn-small',
				format: 'DD/MM/YYYY',
				separator: ' to ',
				locale: {
					format: 'DD/MM/YYYY',
					applyLabel: 'Submit',
					cancelLabel: 'Clear',
					fromLabel: 'From',
					toLabel: 'To',
					customRangeLabel: 'Custom',
					daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
					monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
					firstDay: 1
				}
			};
			
			$('#reportrange span').html(moment().subtract(29, 'days').format('DD/MM/YYYY') + ' - ' + moment().format('DD/MM/YYYY'));
			$('#reportrange').daterangepicker(optionSet1, cb);
			$('#reportrange').on('show.daterangepicker', function() {
			  // console.log("show event fired");
			});
			$('#reportrange').on('hide.daterangepicker', function() {
			  // console.log("hide event fired");
			});
			$('#reportrange').on('apply.daterangepicker', function(ev, picker) {
			  // console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
			});
			$('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
			  // console.log("cancel event fired");
			});
			$('#options1').click(function() {
				$('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
			});
			$('#options2').click(function() {
				$('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
			});
			$('#destroy').click(function() {
				$('#reportrange').data('daterangepicker').remove();
			});
			
		}
		
		function init_daterangepicker_right() {
			
			if( typeof ($.fn.daterangepicker) === 'undefined'){ return; }
				// console.log('init_daterangepicker_right');
				
				var cb = function(start, end, label) {
				  // console.log(start.toISOString(), end.toISOString(), label);
				  $('#reportrange_right span').html(start.format('DD/MM/YYYY') + ' - ' + end.format('DD/MM/YYYY'));
				};

				var optionSet1 = {
					startDate: moment().subtract(29, 'days'),
					endDate: moment(),
					minDate: '01/01/2012',
					maxDate: '12/31/2020',
					dateLimit: {
						days: 60
					},
					showDropdowns: true,
					showWeekNumbers: true,
					timePicker: false,
					timePickerIncrement: 1,
					timePicker12Hour: true,
					ranges: {
						'Today': [moment(), moment()],
						'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
						'Last 7 Days': [moment().subtract(6, 'days'), moment()],
						'Last 30 Days': [moment().subtract(29, 'days'), moment()],
						'This Month': [moment().startOf('month'), moment().endOf('month')],
						'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
					},
					opens: 'right',
					buttonClasses: ['btn btn-default'],
					applyClass: 'btn-small btn-primary',
					cancelClass: 'btn-small',
					format: 'DD/MM/YYYY',
					separator: ' to ',
					locale: {
						format: 'DD/MM/YYYY',
						applyLabel: 'Submit',
						cancelLabel: 'Clear',
						fromLabel: 'From',
						toLabel: 'To',
						customRangeLabel: 'Custom',
						daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
						monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
						firstDay: 1
					}
				};

				$('#reportrange_right span').html(moment().subtract(29, 'days').format('DD/MM/YYYY') + ' - ' + moment().format('DD/MM/YYYY'));

				$('#reportrange_right').daterangepicker(optionSet1, cb);

				$('#reportrange_right').on('show.daterangepicker', function() {
				  // console.log("show event fired");
				});
				$('#reportrange_right').on('hide.daterangepicker', function() {
				  // console.log("hide event fired");
				});
				$('#reportrange_right').on('apply.daterangepicker', function(ev, picker) {
				  // console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
				});
				$('#reportrange_right').on('cancel.daterangepicker', function(ev, picker) {
				  // console.log("cancel event fired");
				});

				$('#options1').click(function() {
					$('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
				});

				$('#options2').click(function() {
					$('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
				});

				$('#destroy').click(function() {
					$('#reportrange_right').data('daterangepicker').remove();
				});

			}
			
			function init_daterangepicker_single_call() {
				
				if( typeof ($.fn.daterangepicker) === 'undefined'){ return; }
			// console.log('init_daterangepicker_single_call');
			
			$('#single_cal1').daterangepicker({
				singleDatePicker: true,
				singleClasses: "picker_1"
			}, function(start, end, label) {
			  // console.log(start.toISOString(), end.toISOString(), label);
			});
			// AJOUT FENOHASINA
			$('.single_call_jp').daterangepicker({
				singleDatePicker: true,
				singleClasses: "picker_1",
				locale: {
					format: 'DD/MM/YYYY',
					daysOfWeek: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
					monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
					firstDay: 1
				}
			}, function(start, end, label) {
			  // console.log(start.toISOString(), end.toISOString(), label);
			});
			$('#single_cal2').daterangepicker({
				singleDatePicker: true,
				singleClasses: "picker_2"
			}, function(start, end, label) {
			  // console.log(start.toISOString(), end.toISOString(), label);
			});
			$('#single_cal3').daterangepicker({
				singleDatePicker: true,
				singleClasses: "picker_3"
			}, function(start, end, label) {
			  // console.log(start.toISOString(), end.toISOString(), label);
			});
			$('#single_cal4').daterangepicker({
				singleDatePicker: true,
				singleClasses: "picker_4"
			}, function(start, end, label) {
			  // console.log(start.toISOString(), end.toISOString(), label);
			});
			
			
		}
		
		
		function init_daterangepicker_reservation() {
			
			if( typeof ($.fn.daterangepicker) === 'undefined'){ return; }
			// console.log('init_daterangepicker_reservation');
			
			$('#reservation').daterangepicker(null, function(start, end, label) {
			  // console.log(start.toISOString(), end.toISOString(), label);
			});

			$('#reservation-time').daterangepicker({
				timePicker: true,
				timePickerIncrement: 30,
				locale: {
					format: 'DD/MM/YYYY h:mm A'
				}
			});
			
		}