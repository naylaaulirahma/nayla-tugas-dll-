<?php

$a = "hello";
$hello = "Hello world!";

//menampilkan isi vriabel $a
//hello
echo $a . "</br>";

//menampilkan isi variabel $a
//Hello world!
echo $hello . "</br>";

//menampilkan isi dari variabel dengan nama yang sama seperti isi variabel $a
//isi variabel $a = hello. jadi, nanti akan menampilkan isi dari variabel $hello
//Hello world
echo $$a . "</br>";

?>