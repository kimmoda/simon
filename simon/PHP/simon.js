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
	console.log(computerSeries)

};

doIt = function(computerSeries) {

	var i = 0;

	showEachColour = function(computerSeries) {
			$("#" + computerSeries[i] + "Box").fadeOut(500);
			$("#" + computerSeries[i] + "Box").fadeIn(500);
			$("#" + computerSeries[i] + "Box").fadeOut(500);
			console.log(computerSeries[i]);
		};

    if( i < computerSeries.length ){
			console.log(computerSeries.length);
        setTimeout( showEachColour(computerSeries), 500 );
				i++;
    }


}


$( ".btn" ).click(function() {

buildSeries();
doIt(computerSeries);

});





});
