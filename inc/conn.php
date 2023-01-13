<?php

$con = mysqli_connect('localhost', 'root', 'root', 'hamad');

if (!$con) {
    echo "fail: " . mysqli_connect_error()  ;
    
  }


?>