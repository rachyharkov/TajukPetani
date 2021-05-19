const detectAccess = () => {
	const ua = navigator.userAgent;
	if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
		$("#warning-body").css({
			width: "auto",
			height: "100vh",
			display: "flex",
			"flex-wrap": "nowrap",
			"flex-direction": "column",
		});

		$(".footer-warning-fun").css({
			display: "block",
			padding: 0,
			position: "relative",
		});

		$("#body,#body*").css({
			display: "none",
		});

		$(".bg-login").css({
			display: "none",
		});

		$(".footer").css({
			display: "none",
		});

		$(".bottom-nav").css({
			display: "none",
		});

		console.log("tablet");
		return;
	}
	if (
		/Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(
			ua
		)
	) {
		console.log("mobile");
		return;
	}
	$("#warning-body").css({
		width: "auto",
		height: "100vh",
		display: "flex",
		"flex-wrap": "nowrap",
		"flex-direction": "column",
	});

	$(".footer-warning-fun").css({
		display: "block",
		padding: 0,
		position: "relative",
	});

	$("#body,#body*").css({
		display: "none",
	});

	$(".bg-login").css({
		display: "none",
	});

	$(".footer").css({
		display: "none",
	});

	$(".bottom-nav").css({
		display: "none",
	});
	console.log("desktop");
};

detectAccess();

$(window).on("load", function () {
	$("#loading").removeClass("wait");
	console.log("loaded!");
});

$(document).ready(function () {
	$(".link-to").click(function () {
		$("#loading").addClass("wait");
	});


	$(".btn-nav").click(function () {
		console.log(this.id);

		$("#loading-nav-menu").css("display", "block");
		$(".btn-nav").removeClass("active-bottom-nav");
		$("#" + this.id + "").addClass("active-bottom-nav");
		$(".btn-nav svg:nth-child(1)").css("display","block");
		$(".btn-nav svg:nth-child(2)").css("display","none");
		$("#" + this.id + " > svg:nth-child(1)").css("display","none");
		$("#" + this.id + " > svg:nth-child(2)").css("display","block");


		$.ajax({
			type: "get",
			url: baseUrl + "/Home/" + this.id,
			dataType: "html",
			success: function (html) {
				// success callback -- replace the div's innerHTML with
				// the response from the server.
				$("#body").html(html);
				$("#loading-nav-menu").css("display", "none");
			},
			error: function (data) {
				$("#body").html(data.status);
				$("#loading-nav-menu").css("display", "none");
			},
		});
	});

	var swiper = new Swiper(".swiper-container", {
		pagination: {
			el: ".swiper-pagination",
			dynamicBullets: true,
		},
	});
});