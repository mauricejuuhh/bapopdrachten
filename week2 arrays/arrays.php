<?php

$teachers = array('maurice','frank','aardappel');

echo $teachers[1];

$teachers[1] = 'ed';

//var_dumb($teachers);
print_r($teachers);

foreach ($teachers as $one_teacher) {
  echo '<p>' . $one_teacher . '</p>';
}

//$teachers[] = 'theo';

array_push($teachers, 'nick','poep', 'harun');

$arrayName = array('maurice' => 'eet poep', 'valerie' => 'is poep');

echo $arrayName['maurice'];

foreach ($arrayName as $naampie => $ola) {
  echo '<p>' . $naampie . ' '. $ola . '</p>';
}

?>
