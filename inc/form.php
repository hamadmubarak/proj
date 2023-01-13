<?php


$Firstname =    $_POST['Firstname'];
$Lastname =     $_POST['Lastname'];
$Email =        $_POST['Email'];

$errors = [
    'FirstnameError' => '',
    'LastnameError' => '',
    'EmailError' => '',
];

if (isset($_POST['submit'])) {

}


if (empty($Firstname)) {
    $errors['FirstnameError'] = 'يرجى إدخال الإسم الأول';

}

if (empty($Lastname)) {
    $errors['LastnameError'] = 'يرجى إدخال الإسم الأخير';

}

if (empty($Email)) {
    $errors['EmailError'] = 'يرجى إدخال البريد الإلكتروني';

}

elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $errors['EmailError'] = 'يرجى إدخال بريد إلكتروني صحيح';
}

if (!array_filter($errors)) {
    $Lastname =     mysqli_real_escape_string($con, $_POST['Lastname']);
    $Email =        mysqli_real_escape_string($con, $_POST['Email']);
    $Firstname =    mysqli_real_escape_string($con, $_POST['Firstname']);

   $sql = "INSERT INTO winners(FirstName, LastName, Email) 
   VALUES ('$Firstname', '$Lastname', '$Email')";

if (mysqli_query($con, $sql)) {
    header('Location: ' . $_SERVER['PHP_SELF']);
}
else {
    echo "error: " . mysqli_error($con);
  }


}


?>