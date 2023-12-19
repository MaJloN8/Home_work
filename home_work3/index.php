<?php

// Укажите путь к вашему текстовому файлу
$filePath = 'file.txt';

// Попытка открыть файл для чтения
$file = fopen($filePath, 'r');

// Проверка успешности открытия файла
if ($file) {
    // Чтение файла построчно
    $dataList = array();
    while (($line = fgets($file)) !== false) {
        // Разделение строки по точке с запятой
        $data = explode(';', $line);
        $dataList[] = $data;
    }

    // Закрытие файла
    fclose($file);

    // Вывод таблицы
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

    // Вывод формы с фильтром по типу кузова
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

        // Вывод только строк с выбранным типом кузова
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
