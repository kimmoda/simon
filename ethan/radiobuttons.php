<!DOCTYPE html>


<!-- Uselessness... ish -->
<html>
 <head>
  <title>RPS</title>
 </head>
 <body>
<?php


$rn = rand(1, 3);

$p1 = 0;
$p2 = 0;
$tt = 0;


if (isset($_GET['numberoftries'])) {

$numberoftries = $_GET['numberoftries'];

start($numberoftries);

}

function start($numberoftries, $x, $rn, $p1, $p2) {
    for ($x = 0; $x <= $numberoftries; $x++) {
      $rn = rand(1, 3);
         if($rn == 1) {
            $p1 ++;
         }
         else if($rn == 2) {
           $tt ++;
            }
         else if($rn == 3) {
           $p2 ++;
            }
          }
          echo $x . "<br/>";
          echo "p1 percentage is = " . ($p1 / $numberoftries) * 100 . "%<br>";
          echo "p2 percentage is = " . ($p2 / $numberoftries) * 100  . "%<br>";
          echo "total ties percentage =" . ($tt / $numberoftries) * 100  . "%";

        }




?>



<form action="<?php $_PHP_SELF ?>" method = "GET">
  <input type="text" name="numberoftries" value="Number of tries?">
    <input type = "submit" name = "submit"/>
</form>
</body>
</html>
