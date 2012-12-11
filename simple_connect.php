<?php
//ini_set('display_errors', '0');

//include_once '/Users/pmoreira/Documents/Pessoal/TOP/config.php';

$user = 'portugaldb';
$pass = 'portugaldb';
$host = 'localhost1';
$database = 'portugal';


$conn = new mysqli($host,$user,$pass,$database);

echo "atentar ligar <br/>";
if($conn->connect_error) {
	echo "erro :: ";
	echo "$conn->connect_error";
	echo "<br/>";
	echo "adeus....";
	exit();
}

echo "sucesso !!!!!!!!!!";

$sql = "SELECT * from concelhos";

$result = $conn->query($sql);

if ($conn->errno) {
	echo "erro :: ";
	echo "$conn->error";
	echo "<br/>";
	echo "adeus....";
	exit();
}

echo "numero de linhas do resultado".$result->num_rows;
echo "<br/><br/>";
while($row = $result->fetch_object()) {
	echo $row->c_id."   ----    ".$row->desc;
	echo "<br/>";
}

// else we are connected



?>