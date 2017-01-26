<?php

// Display errors
error_reporting(E_ALL);
ini_set('display_errors', 1);

$moves = array();
$colours = array("blue", "green", "orange", "red");
$rn = rand(0,3);
$filename = 'gameresults.csv';

// Hi Paul! How do I use this function for any $array? Ideally I would only have to pass the array name
function prettyPrint($moves) {
    echo '<pre>',print_r($moves,1),'</pre>';

}

function getRandomColour($colours, $rn){

  if ($rn == 0) {

    return $colours[0];

    }else if ($rn == 1){
      return $colours[1];

    }else if ($rn == 2){
      return $colours[2];

    }else if ($rn == 3){
      return $colours[3];
  }

}





if(array_key_exists('red',$_GET)){
 recordChoices($moves, $rn);
}

function recordChoices($moves, $rn){

  for ($i = 0; $i < 25; $i++ ) {
    $rn = rand(0,25);
    $row = array($rn, $rn);
    array_push($moves, $row);
  }
  // prettyPrint($moves);
}


//Check to see if file exists
if (file_exists($filename)) {
    $csvfile = fopen($filename, 'a');

} else {
    $csvfile = fopen($filename, 'w');

    // Create CSV column headers
    fputcsv($csvfile, array('Computer', 'Player1'));
}

//Output array to CSV
  foreach ($moves as $fields) {
      fputcsv($csvfile, $fields);
  }


//read CSV
$csv = array_map('str_getcsv', file($filename));
// echo "Array contents for CSV";

// prettyPrint($csv);

// Close the file
fclose($csvfile);
?>
