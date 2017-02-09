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

          levels.forEach(function(entry, colors){
          sleep(waitinSeconds);
          $("#" + entry + "button").fadeOut(500);
          $("#" + entry + "button").fadeIn(500);
        })
      }

    $("#" + "green" + "button").click(function() {
      levels.push(getRandomColour(colors));
      displaySeries();
    });

    sleep = function(waitinSeconds){
      setTimeout(function () {
      },(waitinSeconds * 3000));
    }

});
