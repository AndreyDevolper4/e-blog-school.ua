<?php
$mysqli = new mysqli("localhost", "my_user", "my_password", "test");

/* проверка соединения */
if (mysqli_connect_errno()) {
    printf("Не удалось подключиться: %s\n", mysqli_connect_error());
    exit();
}

printf("Изначальная кодировка: %s\n", $mysqli->character_set_name());

/* изменение набора символов на utf8mb4 */
if (!$mysqli->set_charset("utf8mb4")) {
    printf("Ошибка при загрузке набора символов utf8mb4: %s\n", $mysqli->error);
    exit();
} else {
    printf("Текущий набор символов: %s\n", $mysqli->character_set_name());
}

$mysqli->close();
?>