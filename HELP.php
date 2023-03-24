<?

echo '<pre>' . htmlspecialchars(print_r($arResult, true)) . '<pre>';
file_put_contents(__DIR__ . '1/.txt', print_r($arResult, true), FILE_APPEND);

?>