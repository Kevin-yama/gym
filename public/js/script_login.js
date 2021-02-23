// Open close dropdown on click
$("li.dropdown").click(function(){
	if($(this).hasClass("open")) {
		$(this).find(".dropdown-menu").slideUp("fast");
		$(this).removeClass("open");
	}
	else {
		$(this).find(".dropdown-menu").slideDown("fast");
		$(this).toggleClass("open");
	}
});

// Close dropdown on mouseleave
$("li.dropdown").mouseleave(function(){
	$(this).find(".dropdown-menu").slideUp("fast");
	$(this).removeClass("open");
});

// Navbar toggle
$(".navbar-toggle").click(function(){
	$(".navbar-collapse").toggleClass("collapse").slideToggle("fast");
});



// edges
$("#edges > .btn").click(function(){
	if($(this).is("#rounded")) {
		$(".navbar, .form-control").css("border-radius","8px");
		if($(window).width() > 768) {
			$(".dropdown-menu").css({
				"border-bottom-right-radius":"8px",
				"border-bottom-left-radius":"8px"
			});
		}
	}
	else if($(this).is("#square")) {
		$(".navbar, .form-control").css("border-radius","0");
		$(".dropdown-menu").css({
			"border-bottom-right-radius":"0",
			"border-bottom-left-radius":"0"
		});
	}
})
