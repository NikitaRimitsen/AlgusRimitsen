<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 405</title>
    <style>
        table,td{
            border: solid 2px;
            padding: 10px;
            text-align: center;
        }
        tr{
            background-color: lightgoldenrodyellow;
        }



    </style>
</head>
<body>
<h1>Ülesanne 405 - Korrustutabel 2 tsükliga</h1>
<?php
    echo "<table>";
    for($i=1; $i<=10; $i++){
        echo "<tr>";
        for($j=1; $j<=10; $j++){

            $val=$i*$j;

            echo "<td>".$val."</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

?>

</body>
</html>
