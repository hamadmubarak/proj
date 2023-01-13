<?php 

$sql = 'SELECT * FROM winners ORDER BY RAND() LIMIT 1';
$result = mysqli_query($con, $sql);
$users = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>