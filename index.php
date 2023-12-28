<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Document</title>
</head>

<body>

    <header class="lab-header">
        <h1 class="lab-head">Лабораторна робота №4, варіант №4</h1>
        <p class="lab-subhead">на тему "Основи мови PHP"</p>
        <p class="lab-subhead">Виконав ст. гр. КІУКІ-21-3 Букреева О.С.</p>
    </header>

    <?php
    $csvFilePath = 'colors.csv';
    $rows = array_map('str_getcsv', file($csvFilePath));
    echo '<table>';

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