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

};

// would be part of a for each loop with a pause between each iteration
flashColour = function() {
	$("#" + computerSeries[0] + "Box").fadeOut(500);
	$("#" + computerSeries[0] + "Box").fadeIn(500);
	$("#" + computerSeries[0] + "Box").fadeOut(500);
}

$( ".btn" ).click(function() {

buildSeries();
flashColour();

});


});
