<?php

require "conexion.php";

$xml = $_GET["xml"];

$url = simplexml_load_file($xml);

$sql_delete = "DROP TABLE Person";

$mysqli->query($sql_delete);

$sql = "CREATE TABLE Person(id int primary key auto_increment not null, firstname varchar(50) not null, lastname varchar(50) not null, address varchar(100) not null, phone varchar(15) not null, email varchar(30) not null)";

if($mysqli->query($sql) === TRUE) {
	echo "La tabla se creó correctamente <br> <br>";
} else {
	echo "Hubo un error al crear la tabla: " . $mysqli->error . "<br><br>";
}

foreach($url->contact as $contact) {
	$contact->firstname;
	$contact->lastname;
	$contact->address;
	$contact->phone;
	$contact->email;
}

if ($contact->firstname != "" && $contact->lastname != "" && $contact->address != "" && $contact->phone != "" && $contact->email != "")
	foreach($url->contact as $contact) {
		echo "DATOS DEL XML <br>";
		echo "Nombre: " . $contact->firstname . "<br>";
		echo "Apellido: " . $contact->lastname . "<br>";
		echo "Dirección: " . $contact->address . "<br>";
		echo "Telefono: " . $contact->phone . "<br>";
		echo "Email: " . $contact->email . "<br>";
		echo "<br>";


		$sql_insert = "INSERT INTO Person VALUES('', '$contact->firstname', '$contact->lastname', '$contact->address', '$contact->phone', '$contact->email')";

		if($mysqli->query($sql_insert) === TRUE) {
			echo "Se insertó correctamente la informacion <br> <br>";
		} else {
			echo "Hubo un error al insertar en la tabla: ". $mysqli->error . "<br><br>";
		}

	} else {
		echo "Falta algún dato";
	}

	$mysqli->close();

?>

<!DOCTYPE html>
<html>
<head>
<title>XML</title>
</head>
<body>
</body>
</html>