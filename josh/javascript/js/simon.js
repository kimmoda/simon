$(document).ready(function () {

	var colours = ["red", "blue", "green", "yellow"];
	var colour;
	var stage = 0;
	var computerSeries = [];

	createRandomColour = function(){

		colour = colours[Math.floor(Math.random() * 4)];

	};

	createSeries = function(){

		createRandomColour();

		computerSeries.push(colour)

	};

	appendSeries = function(){


		createRandomColour();

		computerSeries.push(colour)

	};

	displaySeries = function(){

		var index = 0;

			var intervalID = setInterval(function() {

				
				$("#" + computerSeries[index]).effect( "highlight", "slow");


				document.getElementById('sound').innerHTML="<audio autoplay><source src='sounds/" + computerSeries[index] + ".wav" +  "'type='audio/ogg'></audio>";


				if (index == computerSeries.length - 1){

					clearInterval(intervalID);
				}

				index++;   

		}, 1000);


	};

	getUserChoices = function(){

		var turn = 0;

		$('.pad').on('click', function () {


			var colour = this.id;

			$("#" + colour).effect( "highlight");
			

			document.getElementById('sound').innerHTML="<audio autoplay><source src='sounds/" + colour + ".wav" +  "'type='audio/ogg'></audio>";


			

				if (colour != computerSeries[turn]){


					// $("#" + colour).effect( "shake", "slow");
					
					$("#failure").fadeIn(1000);

					setTimeout(function(){

						$("#failure").fadeOut(1000);
						$("#failure_message").fadeIn(1000);
						$("#stage_fail").fadeIn(1000).html("<h2>" + stage + "</h2>");

					},3000);

					
				
				} else if (turn + 1 === computerSeries.length){


						appendSeries();
						
						displaySeries();

						turn = 0;

						stage++;

						setTimeout(function(){

								$("#stage").text("Stage: " + stage);

						},1000);


				} else if (colour === computerSeries[turn]){

					

					turn++;

				}


		});

	}
		

	$("#center_disk_text").click(function(){

		createSeries();

		displaySeries();

		getUserChoices();

		$("#center_disk_text").hide();
		$("#center_disk_text_reset").show();


	});

	$("#center_disk_text_reset").click(function(){

		location.reload();

		$("#center_disk_text").show();
		$("#center_disk_text_reset").hide();

	});

	$('#try_again').on('click', function () {

		location.reload();
		
	});	

	$('#leave_in_shame').on('click', function () {

	window.location = "http://dog-shame.com/";

	});	

});