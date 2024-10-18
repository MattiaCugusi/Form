<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduzione Form</title>
</head>
<body>
    <?php
    $nome = $_GET["nome"];
    $cognome = $_GET["cognome"];
    $email = $_GET["email"];

    echo "<h1>" . "Dati inviati" . "</h1>";

    ?>

    <table style= "border: 1px solid black; border-collapse: collapse; text-align:center">
        <tr style= "border: 1px solid black; border-collapse: collapse; text-align:center">
            <th>Nome</th>
            <th>Cognome</th>
            <th>Email</th>
        </tr>
      

    <?php
    echo "<tr>";
    echo "<td>". $nome. "</td>";
    echo "<td>". $cognome. "</td>";
    echo "<td>". $email. "</td>";
    echo "</tr>";
    ?>

    </table>
    
</body>
</html>