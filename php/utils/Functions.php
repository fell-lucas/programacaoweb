<?php

function redirect($url, $msg)
{
  echo "<script>window.location.replace('http://localhost/$url.php?msg=$msg')</script>";
}

function prettyPrint($val, ...$vals)
{
  echo '<pre>';
  var_dump($val, ...$vals);
  echo '</pre>';
}
