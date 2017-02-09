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
flashColour = function(colour, index) {
	$("#" + colour + "Box").delay(index * 2500).fadeOut(500).fadeIn(500).fadeOut(500).fadeIn(500);
}

flashColours = function() {
	for(var i=0; i < computerSeries.length; i++) {
		flashColour(computerSeries[i], i);
	}
}

$( ".btn" ).click(function() {

	buildSeries();
	buildSeries();
	buildSeries();
	flashColours();

});


});
