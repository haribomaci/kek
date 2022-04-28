<?php

$con = new mysqli('localhost', 'kek', 'titok', 'kek');

if($con -> connect_error){
    die("Hiba! A kapcsolódás sikertelen");
}

//echo "ok";

$sql = <<<EOT
select * from dolgozok

EOT;

if($result = $con->query($sql)){
    echo "lekérdezés ok";
}
else{
    echo "Hiba! a lekérdezés sikertelen";
}

while($row = $result->fetch_assoc()){
    echo $row['nev'];
}//kiszedjük az adatokat belőle, és hogy milyen módon
$con->close();