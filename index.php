<?php 
include('values/site.php');
 
include('components/header.php');

include('content.php');

include('components/footer.php');

function testingChris() {
    echo "This will print";
    return "this will return";
}

$test = testingChris();

echo $test;

?>

<!-- STRING MODIFYING -->

<?php 

  $name = "Kyra";
  echo strtolower($name); // lowercase
  echo strtoupper($name); // UPPERCASE
  echo $name[0] // [INDEX] first letter
  echo $name[1] // [INDEX] second letter
  $name[0] = "G"; // ASSIGN REPLACEMENT TO INDEX
  echo str_replace("Kyra" , "Kyle", $name); // CHANGE WORD (REPLACE)
  echo substr($name, 2, 3); // GRAB PART OF STRING
?>

<hr>

<?php
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

