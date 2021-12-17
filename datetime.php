<?php

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $datum = date('Y-m-d');
    $datum = $_POST['date'];



$dbConnection = new PDO('mysql:host=localhost; dbname=todolist', 'root', '');
$stmt = $dbConnection ->prepare('INSERT INTO datum (datum) VALUES(:date)');
$stmt->execute([':date' => $datum]);



}

var_dump($datum);

$empfaenger = "daniel_todolist@gmx.ch";
$betreff = "Aufgabe XY";
$from="TodoListe <daniel_todolist@gmx.ch>";
$text="Sie haben noch (diese Aufgabe) zu erledigen";

mail($empfaenger, $betreff, $text, $from);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="resources/css/reset.css">
    <link rel="stylesheet" type="text/css" href="resources/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <title>datetime</title>
</head>
<body>
    <fieldset>
<form action="datetime.php" method="POST">
    <div>
        <label for="datetime">Datum</label><br>
        <input type="date" id="date" name="date" value="<?=$datum?>">
    </div>

    <div>
        <input type="submit" value="Absenden">
    </div>

</form>


    </fieldset>


</body>
</html>