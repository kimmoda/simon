$(document).ready(function () {

	var colours = ["red", "blue", "green", "yellow"];
	var level = 0;
	var computerSeries = [];

	getRandomColour = function(){

		var randomnumber = Math.floor(Math.random() * 4);

		if (randomnumber == 0) {
			return colours[0];

		}else if (randomnumber == 1){
			return colours[1];

		}else if (randomnumber == 2){
			return colours[2];

		}else {
			return colours[3];

		}

	};

buildSeries = function(){

		computerSeries.push(getRandomColour());
		console.log(computerSeries);
	};



showEachColour = function() {
	computerSeries.forEach(function(entry) {
		$("#" + computerSeries[entry] + "Box").fadeOut(500);
		$("#" + computerSeries[entry] + "Box").fadeIn(500);
		$("#" + computerSeries[entry] + "Box").fadeOut(500);
		console.log(entry);
	});
};


$( ".btn" ).click(function() {

	buildSeries();

	for (var i = 0; i < 10; i++) {
			setTimeout(showEachColour, 500 * i);
	};


});

});
