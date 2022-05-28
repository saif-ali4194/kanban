$(document).ready(function () {
	/*   <<ALL Eevent Listeners>>   */

	//avatar uploading btn//
	$("#avatar").hover(
		function () {
			$("#upload-image").show();
			$("#avatar-sub-btn").show();
		},
		function () {
			$("#upload-image").hide();
		}
	);

	//Uploading image in avatar (upload image btn)
	$("#temp").change(function (e) {
		let path = URL.createObjectURL(e.target.files[0]);
		$("#avatar").css("background-image", "url(" + path + ")");
	});

	// FUNCTIONS //
});
