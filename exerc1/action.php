<?php 

var_dump($_POST);

$dados = $_POST;

//var_dump($_POST['firstname']);

/*$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$neighborhood = $_POST['neighborhood'];
$city = $_POST['city'];

echo $firstname;*/

//$_POST 

foreach ($dados as $key => $value) {
	echo $key ." ". strtoupper($value) ."<br />";
}
