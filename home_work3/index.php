<?php


$filePath = 'file.txt';


$file = fopen($filePath, 'r');

// Проверка успешности открытия файла
if ($file) {
    
    $dataList = array();
    while (($line = fgets($file)) !== false) {
        
        $data = explode(';', $line);
        $dataList[] = $data;
    }

   
    fclose($file);

  
    echo '<table border="1">';
    echo '<tr><th>Марка</th><th>Модель</th><th>Год выпуска</th><th>Объем</th><th>Тип кузова</th></tr>';

    foreach ($dataList as $data) {
        echo '<tr>';
        foreach ($data as $value) {
            echo '<td>' . $value . '</td>';
        }
        echo '</tr>';
    }

    echo '</table>';

   
    echo '<form method="post" action="">';
    echo '<label for="filter">Выберите тип кузова:</label>';
    echo '<select name="filter">';
    
    // Получение уникальных типов кузова из данных
    $bodyTypes = array_unique(array_column($dataList, 4));

    // Вывод вариантов для фильтра
    foreach ($bodyTypes as $type) {
        echo '<option value="' . $type . '">' . $type . '</option>';
    }

    echo '</select>';
    echo '<input type="submit" value="Применить фильтр">';
    echo '</form>';

    // Обработка фильтрации
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selectedType = $_POST['filter'];

        
        echo '<table border="1">';
        echo '<tr><th>Марка</th><th>Модель</th><th>Год выпуска</th><th>Объем</th><th>Тип кузова</th></tr>';

        foreach ($dataList as $data) {
            if ($data[4] === $selectedType) {
                echo '<tr>';
                foreach ($data as $value) {
                    echo '<td>' . $value . '</td>';
                }
                echo '</tr>';
            }
        }

        echo '</table>';
    }
} else {
    echo "Не удалось открыть файл.";
}

?>
