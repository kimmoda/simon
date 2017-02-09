$(document).ready(function () {

	var colours = ["red", "blue", "green", "yellow"];
	var level = 0;
	var computerSeries = [];

	getRandomColour = function(){
		var randomnumber = Math.floor(Math.random() * 4);
		return colours[randomnumber];
	};

buildSeries = function(){
	computerSeries.push(getRandomColour());
};

// would be part of a for each loop with a pause between each iteration
flashColour = function(colour, index) {
	setTimeout(function() {
			$("#" + colour + "Box").fadeOut(500).fadeIn(500);
	}, index * 1500);
}

flashColours = function() {
	for(var i=0; i < computerSeries.length; i++) {
		flashColour(computerSeries[i], i);
	}
}

buildSeries();
buildSeries();
buildSeries();
buildSeries();
buildSeries();

$( ".btn" ).click(function() {
	flashColours();
});

});
