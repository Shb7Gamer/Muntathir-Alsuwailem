<?php

$conn = mysqli_connect('localhost','root','root','win');


if(!$conn)
{
    echo 'خطأ ' . mysqli_connect_error();

}