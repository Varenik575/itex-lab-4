<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $csvFilePath = 'colors.csv';
    $rows = array_map('str_getcsv', file($csvFilePath));
    echo '<table border="1">';

    echo '<tr><th>Color</th><th>Hex Code</th></tr>';

    foreach ($rows as $row) {
        echo '<tr>';
        $backgroundColor = $row[0];

        // не придумала, як залишити верхні назви стовпців 
        //і при цьому прибрати написи нижче в першому стовпці, 
        //тому перший рядок повторюється через цикл foreach
        //спитати

        // перший стовпець з фоновим кольором
        echo '<td style="background-color: ' . htmlspecialchars($backgroundColor) . '; width: 40px;">' . '</td>';

        //другий стовпець з hex-кодом
        echo '<td>' . htmlspecialchars($row[1]) . '</td>';

        echo '</tr>';
    }
    echo '</table>';

    ?>


</body>

</html>