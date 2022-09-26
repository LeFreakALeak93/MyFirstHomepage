
var formvalidate = {
	
	init: function() {

		// hier die Methode .validate()
		$("#form").validate({
			submitHandler: function() {
				alert("Formular abgeschickt!");
			},
			rules: {
				vorname: "required",
				nachname: {
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
				nachricht: "required"
			}
		});
		// Optionen erst sichtbar, wenn Checkbox gechecked ist
		var newsletter = $("#newsletter");
		var isChecked = newsletter.is(":checked");
		var themen = $("#newsletter_themen");
		themen[isChecked ? "show" : "hide"]();
		//var themaInputs = themen.find("input")
		//.attr("disabled", !isChecked);
		newsletter.click(function() {
			themen[this.checked ? "fadeIn" : "fadeOut"](1000);
			//themaInputs.attr("disabled", !this.checked);
		});
	}
}

$(document).ready(formvalidate.init);