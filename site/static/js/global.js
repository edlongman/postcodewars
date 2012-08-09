$(document).ready(function() {
	//By default the settings tab should be hidden
	$("#settingsPanel").hide();
	//FIXME
	//Cookie does not remember hide/show settings on load
	//Cookie somehow overides the setting code and shows it on load (by default the settings are meant to be hidden).
	$("#settingsPanel ul li input").each(function() {
		var cookieName = $(this).attr("id").replace("-visibility", "");
		var value = ($.cookie(cookieName) == "true");
		$(this).attr('checked', value);
		if (value == true) {
			$("#" + cookieName).show();
		} else {
			$("#" + cookieName).hide();
		};

	});
	//When settings button is pressed : Slide transition (hide/show)
	$(".flip").click(function() {
		$("#settingsPanel").slideToggle();
	});
	//When a setting is changed this function saves that change in cookies
	$("#settingsPanel input").change(function() {
		var cookieName = $(this).attr("id").replace("-visibility", "");
		var newValue = $(this).is(':checked');
		$.cookie(cookieName, newValue, {
			expires : 7,
			path : '/'
		});
		if (newValue) {
			$("#" + cookieName).show();
		} else {
			$("#" + cookieName).hide();
		}
	});
	//When battle button is pressed it reads the two entered postcodes and loads up the categories and data
	$("#battle_submit").click(function(event) {
		event.preventDefault();
		$("#search").after($('<div class="loader"></div>'));

		var postcode1 = $("#battle_postcode1").val();
		var postcode2 = $("#battle_postcode2").val();

		var url = "/results-json.php?postcode1=" + escape(postcode1) + "&postcode2=" + escape(postcode2);

		$.getJSON(url, function(data) {
			$(".loader").remove();
		});
	});
});
