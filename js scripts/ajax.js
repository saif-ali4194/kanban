$(document).ready(function () {
	$("#sub-btn").on("click", function () {
		let email = $("#log-email").val();
		let pass = $("#log-pass").val();

		if (email != "" && pass != "") {
			$.ajax({
				url: "./php scripts/login.php", // <-- 26/5
				type: "POST",
				data: {
					email: email,
					pass: pass,
				},
				success: function (res) {
					console.log(res);
					let data = JSON.parse(res);
					if (data.statusCode == 200) {
						sessionStorage.setItem("log", "1");
						location.reload();
					} else if (data.statusCode == 201) {
						$("#log-error").show();
					}
				},
			});
		} else {
			alert("Fill all the Fields");
		}
	});

	$("#reg-sub-btn").on("click", function () {
		let Name = $("#name").val();
		let DOB = $("#DOB").val();
		let ph = $("#ph").val();
		let email = $("#email").val();
		let pass = $("#reg-pass").val();

		if (Name != "" && email != "" && ph != "" && pass != "" && DOB != "") {
			$.ajax({
				url: "./php scripts/register.php", // <-- 26/5
				type: "POST",
				data: {
					Name: Name,
					DOB: DOB,
					email: email,
					ph: ph,
					pass: pass,
				},
				success: function (res) {
					let data = JSON.parse(res);
					if (data.statusCode == 200) {
						sessionStorage.setItem("reg", "1");
						location.reload();
					} else if (data.statusCode == 201) {
						sessionStorage.setItem("reg", "2");
						location.reload();
						// // <-- 26/5 --
					} else if (data.statusCode == 205) {
						$("#reg-error").show();
					}
					//  26/5  -->
				},
			});
		} else {
			alert("Fill All the Fields");
		}
	});

	$("#avatar-sub-btn").click((e) => {
		e.preventDefault();
		let form_data = new FormData();
		let img = $("#avatar-ch-btn")[0].files;

		if (img.length > 0) {
			form_data.append("my_img", img[0]);
			$.ajax({
				url: "./php scripts/image.php",
				type: "POST",
				data: form_data,
				contentType: false,
				processData: false,
				success: function (res) {
					let data = JSON.parse(res);
					if (data.error != 1) {
						let path = "./data/uploads/" + data.src;
						$("#avatar").css("background-image", 'url("' + path + '")');
					} else {
						alert(data.err_msg);
					}
				},
			});
		} else {
			alert("ERROR::select a file first!");
		}
	});
});
