<!DOCTYPE html>


<!-- Uselessness... ish -->
<html>
 <head>
  <title>RPS</title>
 </head>
 <body>
<h1>RPS</h1>
<?php

$numberPicked = rand(1, 3);

// functions and IF's... not much else to say

if (isset($_GET['submit'])) {
}

// This is the if's for asking if somthing is true... u know what i mean possibly

if (isset($_GET['Rock'])) {

if ($numberPicked == 1) {
  echo "Computer entered rock: its a tie";
} else if ( $numberPicked == 2) {
  echo "Computer entered paper: you lose";
} else if ($numberPicked == 3) {
  echo "Computer entered scissors: you win";
}

}

if (isset($_GET['Paper'])) {

  if ($numberPicked == 1) {
    echo "Computer entered rock: you win";
  } else if ( $numberPicked == 2) {
    echo "Computer entered paper: its a tie";
  } else if ($numberPicked == 3) {
    echo "Computer entered scissors: you lose";
  }


}

if (isset($_GET['Scissors'])) {

  if ($numberPicked == 1) {
    echo "Computer entered rock: you lose";
  } else if ( $numberPicked == 2) {
    echo "Computer entered paper: you win";
  } else if ($numberPicked == 3) {
    echo "Computer entered scissors: its a tie";
  }

}

?>

<!-- This is my buttons -->

<form action="<?php $_PHP_SELF ?>" method = "GET">
  <input type="radio" name="Rock" value="Rock"> Rock
  <input type="radio" name="Paper" value="Paper"> Paper
  <input type="radio" name="Scissors" value="Scissors"> Scissors
  <input type = "submit" name = "submit"/>
</form>

 </body>
</html>
