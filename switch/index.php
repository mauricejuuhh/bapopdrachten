<form method="post">
<input type="text" name="fruit">
<input type="submit" name="submit" value="knoppie">
</form>
<?php
$fruit = $_POST['fruit'];

switch ($fruit) {
  case'apple':
      echo "fruit is apple";
      echo '<img src="http://www.lekkerbelangrijk.nl/save-files/img//kliktafel/data/gfx/foods/appel200x200.gif">';
      break;
  case'pear':
      echo"fruit is pear";
      echo '<img src="http://www.kielen.nl/wp-content/uploads/2016/12/peer.jpg">';
      break;
  case'orange':
    echo"fruit is orange";
    echo '<img src="http://producemadesimple.ca/wp-content/uploads/2015/01/orange-web-1024x768.jpg">';
    break;
    default :
    echo"I don't know what fruit this is.";
    echo '<img src="https://image.freepik.com/iconen-gratis/faq-ronde-knop-met-vraagteken-binnen_318-30267.jpg">';
}

?>
