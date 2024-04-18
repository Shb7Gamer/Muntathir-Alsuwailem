<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$errors = [
    'firstNameError' => '',
    'lastNameError' => '',
    'emailError' => '',
];

if (isset($_POST['submit'])) {

    //تحقق الاسم الاول
    if (empty($firstName)) {
        $errors['firstNameError'] = "<font color='red'>يرجى كتابة الإسم الأول</font>";
    }

    //تحقق الاسم الاخير
    if (empty($lastName)) {
        $errors['lastNameError'] = "<font color='red'>يرجى كتابة الإسم الأخير</font>";
    }

    //تحقق الايميل 
    if (empty($email)) {
        $errors['emailError'] = "<font color='red'>يرجى كتابة  البريد الالكتروني</font>";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['emailError'] = "<font color='red'>يرجى كتابة البريد الالكتروني بطريقة صحيحة</font>";
    }

    //تحقق لايوجد أخطاء
    if (!array_filter($errors)) {
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $email = mysqli_real_escape_string($conn, $_POST['email'] ); 

        $sql = "INSERT INTO users(firstName, lastName, email) VALUES
        ('$firstName', '$lastName', '$email')";

        if (mysqli_query($conn , $sql)) {
            header('Location:' . $_SERVER['PHP_SELF']);
        }
        else
        {
            echo 'خطأ: ' . mysqli_error($conn); 
        }
    }


}
