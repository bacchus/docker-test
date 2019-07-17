<?php

//phpinfo();

$link = mysqli_connect('mysql', 'root', 'root');
if (!$link) {
    die('Error connect: ' . mysqli_error());
}
echo 'test2: hello kittie=)';
mysqli_close($link);

