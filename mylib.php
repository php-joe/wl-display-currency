<?php

//results to currency
function curConvert() {
  if(isset($_POST['string'])) {
  $string = $_POST['string'];
  if(is_numeric($string)){
    $money_number='$'.round($string,2);
    echo "<br>" . $money_number;
  }
  else {
    echo "Please a number.";
  }
}
}
