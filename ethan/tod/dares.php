
<html>
  <head>
      <title>Party Dares</title>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <!-- <script src="Dares.js"></script> -->
  </head>
  <body>

    <h1> DAREMANIA (if you get a number that ends with 0 or 5 ask any question) </h1>
    <input type='submit' name='submit' value='New Dare' onClick="window.location.reload()" />
      <!-- <button onclick="randomdare()">Click me</button> -->
<?php

$cars = array("1 Hold your elbows together for the next 3 rounds",
              "2 Brush the player to your left's teeth. If they don't let you, they must immediately do 2 dares",
              "3 Talk for 30 seconds without stopping or using the word um",
              "4 Put on blindfold and have someone blow in your ear. If you guess correctly who it is, congrats. Otherwise do another dare.",
              "5 No matter what it is, have someone read aloud your latest text message",
              "6 Cover your nose with either ketchup, peanutbutter or mustard. (not the nostrils)",
              "7 Leave your tongue on the ground until the next round",
              "8 Have the closest person of the same sex give you a wedjie. If no such person exists, congrats. do nothing.",
              "9 Sharpie (or pen if you don't have one) a face on your bellybutton",
              "10 Have somone draw somthing on your back with a pen. It needs to be legible. (one other person needs to say its good enough) If you can't tell what the picture is, do an extra dare.",
              "11 Have the person to your left do your makeup. You may not wash it off until the game is over. The person has 2 minutes to do the makeup.",
              "12 Have somone pour an entire cup of lukewarm water on your head.",
              "13 Quick! you have 1 minute to make everyone else smile!",
              "14 Gargle ketchup or mustard",
              "15 For all the words you use until 2 rounds have gone by, you must sing to the tune of 'twinkle twinkle'.",
              "16 Do your best impression of a baby being born.",
              "17 Go into the bathroom and put your pants on backward. You may not change them until the game is over.",
              "18 Have the person to your right sit on your back (or stomach if you prefer...) and stay that way till your turn comes around again",
              "19 Immediately do 3 dares",
              "20 Have the person on your left choose an animal (do not continue reading until this is finnished) Have the person across from you choose another animal. Imitate both of these animals at once",
              "21 DO NOT READ IF YOU ARE NOT GETTING DARED         Wait until somone says your name. Do not talk till then",
              "22 You are a mime until your next dare",
              "23 If there is somone who isn't playing the game who you can talk too, ask them if they believe that dinosaurs existed.",
              "24 eat a spoon of salt",
              "25 blindfold the person across from you, and make them kiss three diffrent objects. (no peoples)",
              "26 Swap roles with the person to your left. You must talk like them, act like them and respond to only their name.",
              "27 Sing for at least 30 seconds about armpits",
              "28 Kiss the person to your right's knees.",
              "29 Hold a random persons hand, then pretend that you two are stuck together with superglue.",
              "30 The first person to say bottlenosed-dolphin in the room gets their feet massaged until their dare starts.",
              "31 To the music you choose, everyone present must do a conga line for 90 seconds",
              "32 Until 2 rounds are up, you may only communicate by barking",
              "33 Everyone may tie up the person getting this dare. Without using anything liquid, you may do anything you want to the tied up person until next round, or after 5 minutes of being tied up.",
              "34 Impersonate one of the people in this group. Tell noone who you are impersonating, and do not point or anything. Continue until somone guesses who it is",
              "35 Put on a blindfold. Also put in headphones(if possible) Have somone random slowdance with you. You only get one guess to who it is",
              "36 Become the person to your left's slave until 2 rounds have gone by",
              "37 Become the person to your left's slave until 3 rounds have gone by",
              "38 Go into the bathroom and change. Go commando for the rest of the game",
              "39 Males: No shirt. Females: no socks and you may not use anyones name for the rest of the game",
              "40 If you cannot touch your own nose with your tongue you must touch the person to your left's nose with your tongue",
              "41 Take an ice-cube and put into your pocket. No taking it out. ever. E-Ver!",
              "42 without using their hands, have the person to the right of you put lipstick on you.",
              "43 Have another player select a food from the kitchen for you to eat without the uses of your hands.",
              "44 take a break. you need it. if you are currently subject to any dares, you are relieved from them.",
              "45 Put toilet paper between your toes. If you are currently wearing socks, put it in the sock and put the sock on.",
              "46 Take off your shoe and suck on one of your toes. If you are unable to suck on your own toe you must suck on another players toe. (until one persons turn is over)",
              "47 For the rest of the night begin everything you say with 'All hail Queen Nefertiti.'",
              "48 Place both your hands in another players pockets and keep them there. You must each perform a dare before you are allowed to remove them.",
              "49 You must be hog-tied. Because i said so.",
              "50 you need a rest. fake sleeping till next round." );

$randomnumber = rand(0, 49);
echo $cars[$randomnumber];

function picknew() {
  echo "I just ran a php function";
}

echo "lols and more textables";

if (isset($_POST['button'])) {
  picknew();
}

 ?>


 </body>
</html>
