(function() {

  	"use strict";
	jQuery(document).ready(function( $ ) {

		var toggles = $(".cmn-toggle-switch"),
			menu = $("#nav-main");


		for (var i = toggles.length - 1; i >= 0; i--) {
			var toggle = toggles[i];
			toggleHandler(toggle);
		};

		function toggleHandler(toggle) {
			toggle.addEventListener( "click", function(e) {
				e.preventDefault();
				//(this.classList.contains("active") === true) ? this.classList.remove("active") : this.classList.add("active");
				
				if(this.classList.contains("active") === true) {
					this.classList.remove("active");
					menu.removeClass("active");
				} else {
					this.classList.add("active");
					menu.addClass("active");
				}
			});
		}
	});


})();