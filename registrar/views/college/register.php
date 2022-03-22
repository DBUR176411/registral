<?php
require '../../core/College.php';
$txtName = $_POST['txtName'];
$txtPhone = $_POST['txtPhone'];
$college = new College();
$college->setName($txtName);
$college->setPhone($txtPhone);
$is_success = $college->register($college);
if ($is_success == true) {
    echo "Record saved successfully.";
} else {
 echo "Sorry, Something went wrong. Try again.";
}