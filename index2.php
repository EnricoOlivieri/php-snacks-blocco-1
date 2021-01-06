<!-- Snack 2 -->

<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

echo "<br><h1>Data Access</h1><br><p><strong>Name: </strong>" . $name . "<br><strong>Mail: </strong>" . $mail . "<br><strong>Age: </strong>" . $age . "<br>";

if ((strlen($name) >= 3) && (strpos($mail, ".")) && (strpos($mail, "@")) && ($age != NAN)){
    echo "Accesso riuscito";
} else {
    echo "Accesso negato";
};



?>