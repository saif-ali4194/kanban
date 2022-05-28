function log_layout() {
	let flag = sessionStorage.getItem("log");

	$("#log-email").val("");
	$("#log-pass").val("");

	if (flag == 1) {
		sessionStorage.clear();
		$("#log").hide();
		$("#loging").hide();
		$("#logout").show();
		$("html, body").animate(
			{
				scrollTop: $("#sec2").offset().top,
			},
			2000
		);
	} else if (flag == 2) {
		sessionStorage.clear();
		$("#log-error").show();
	}
}

function reg_layout() {
	let flag = sessionStorage.getItem("reg");

	$("#name").val("");
	$("#DOB").val("");
	$("#ph").val("");
	$("#email").val("");
	$("#reg-pass").val("");
	$("#reg-pass-con").val("");

	if (flag == 1) {
		sessionStorage.clear();
		$("#message").show();
		$("#status").show();
		setTimeout(() => {
			$("#message").hide();
			$("#status").hide();
		}, 4000);
	} else if (flag == 2) {
		sessionStorage.clear();
		$("#message").show();
		$("#status-error").show();
		setTimeout(() => {
			$("#message").hide();
			$("#status-error").hide();
		}, 4000);
	}
}
$(document).ready(function () {
	// functions //
	log_layout();
	reg_layout();

	// event handelers //
	$("#avatar-ch-btn").change((e) => {
		let file = e.target.files[0];
		let fileType = file.type;
		let fileSize = file.size;
		let ext = ["image/jpeg", "image/jpg", "image/png", "image/webp"];
		if (
			!(
				fileType == ext[0] ||
				fileType == ext[1] ||
				fileType == ext[2] ||
				fileType == ext[3]
			)
		) {
			alert("Select an image with extension jpeg, jpg, png, webp");
			$("avatar-ch-btn").val("");
		}
		if (fileSize > 5000000) {
			alert("image size is too big");
			$("avatar-ch-btn").val("");
		}
	});

	$("#avatar-sub-btn").on("click", () => {
		$("#avatar-sub-btn").hide();
	});
});
