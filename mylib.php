<?php

//results to currency
function curConvert() {
  if(isset($_POST['string'])) {
  $string = $_POST['string'];
  if(is_numeric($string)){
    echo "$" . $string . "<br>";
  }
  else{
    echo "Please a number.";
  }
}
}
