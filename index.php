<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Php</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>

  <?php
  
  /*echo "hello <br>";

  //key words are not sensitive but variable names are
  $greetings= "hello from php";
  $Greetings= "uppercase";

  //single quotes produce the text as is
  //double quotes produces the value of the variable


  // dot is used for concat
  echo $greetings. "<br>";
  echo $Greetings. "<br>";


  echo '$greetings.......... using \t single quotes <br>';
  echo "$greetings.......... using \t double quotes <br>";

  echo 30+25;
  echo "<br>";



  var_dump("this is from var_dump");

  var_dump($Greetings). "<br>";

  echo gettype($greetings)."<br>"; //to get the type of data


  $n=10;
  var_dump($n);

  settype($n, "string"); // to change the datatype to set type
  echo gettype($n)."<br>";

  if ($n=="10") {
    echo "yes is equal to 10";
  } else {
    echo "no its not";
  }





  $names= array("David","Jones");

  for ($i = 0; $i < 1 ; $i++){

  }

  foreach($names as $name){
    echo "<br>". $name."<br>";
  } */

  $forwards = "racecar";
  $backwards = "racecar";

  if($forwards == $backwards)
{
    echo 'Strings match.'. "<br>";
} else {
    echo 'Strings do not match.'. "<br>";
}
$backwards = strrev($forwards);
$string_reverse = str_split($backwards);
$palin = '';
foreach($string_reverse as $value){
  $palin.= $value;
}
print $palin;
if ($forwards == $palin){
  print "<br>this is a palindrome";
} else {
  print "<br> Not Palindrome";
}



  ?>

  <!-- <script>
  document.write("hello using javascript");
  </script> -->
  
  </body>
</html>