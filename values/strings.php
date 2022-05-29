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
