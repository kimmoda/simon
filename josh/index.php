
<html>

 <head>

  <title>Simon</title>
<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"> </script>
<script src="simon.js"> </script>

 </head>

 <body>
<?php include("simon.php"); ?>

<h1>Simon - Alick Anywhere</h1>

<button class="btn"> Start Game </button>

<br>
<br>

<table>
  <tr>
    <td>
      <div id="blueBox"></div>
    </td>

    <td>
      <div id="redBox"></div>
    </td>
  </tr>

  <tr>
    <td>
      <div id="greenBox"></div>
    </td>

    <td>
      <div id="yellowBox"></div>
    </td>
  </tr>
</table>



 </body>
</html>
