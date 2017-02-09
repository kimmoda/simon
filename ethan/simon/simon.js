$(document).ready(function () {
  var colors = ["green", "red", "blue", "yellow"];
  var levels = [];
  var waitinSeconds = 2;

      getRandomColour = function(colors){
        randomnumber = Math.floor((Math.random() * 4) + 0);
        return colors[randomnumber];
      }

      displaySeries = function(){

          console.log(levels);

          sleep(waitinSeconds);
      }

    $("#" + "green" + "button").click(function() {

      levels.push(getRandomColour(colors));
      displaySeries();

    });

    sleep = function(waitinSeconds){
      levels.forEach(function(entry, colors){
        setInterval(function () {
          $("#" + entry + "button").fadeOut(500);
          $("#" + entry + "button").fadeIn(500);
          stopTheInterval();
        }, 3000);
      })
    }

    stopTheInterval = function() {
      clearInterval();
    }

});
