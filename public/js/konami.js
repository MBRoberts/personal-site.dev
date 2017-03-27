(function() {
	'use strict';

	var  keyArray = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65, 13];

	$(document).keyup(function(e) {

		if (e.keyCode == keyArray[0]) {

			keyArray.shift();

			if (keyArray.length == 0){

				$("#joey").show();
				$("#joey")[0].src += "&autoplay=1";
				setTimeout(function(){
					$("#joey").hide();
				}, 10000);

			};

		} else {

			keyArray = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65, 13];

		};
	});
})();