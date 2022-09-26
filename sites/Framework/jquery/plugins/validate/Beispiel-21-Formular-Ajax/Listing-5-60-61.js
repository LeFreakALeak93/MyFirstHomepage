
var form = {
	
	init: function() {
		// Ajax
		var msg = $("#msg"); 
		var log = $("#log"); 
	
		$(log).ajaxStart(function() {
			log.html("loading...");
		}).ajaxStop(function() {
			log.html("loading beendet.");
		}).ajaxError(function(a, b, e) {
			log.html(e);
		});
		form.onReady();
		form.datepicker();
	},
	
	onReady: function() {
		$("#form").validate({
			submitHandler: function(form) {
				$(form).ajaxSubmit({
					target: "#msg"
				});
			},
			rules: {
				vorname: "required",
				name: {
					required: true,
					minlength: 2
				},
				email: {
					required: true,
					email: true
				},
				themen: {
					required: "#newsletter:checked",
					minlength: 1
				},
				message: "required"
			}
		});
	},
	
	datepicker: function() {
	
		// datepicker 
		$("#date").datepicker($.datepicker.regional['de']);
		$("#lang").change(function() {
			$('#date').datepicker('option', $.datepicker.regional[$(this).val()]);
		});
		
	}
}
	
$(document).ready(form.init);	
