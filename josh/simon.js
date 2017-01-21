$(document).ready(function () {

	var colours = ["red", "blue", "green", "yellow"];
	var level = 0;
	var numberOfLevels = 4;
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

createSeries = function(){

for (i=0; i<numberOfLevels; i++){

		computerSeries.push(getRandomColour());

	};
}

createSeries();

displayColours = function(){

	computerSeries.forEach(function(entry) {

			console.log("Current colour is " + entry);

			setTimeout(function(){

				$("#" + entry + "Box").fadeOut(500)
				$("#" + entry + "Box").fadeIn(500);

			},1000);


		});
};


$( ".btn" ).click(function() {

	displayColours();

});



});
