<?php
$input=
intval(readline("Введите количество строк: "));

if ($input === 2) {
    echo "Беда.\\n";
} elseif ($input === 4) {
    echo "Плохо.\\n";
} elseif ($input === 6) {
    echo "Кажется, что вы где-то учились\\n";
} elseif ($input >= 8) {
    echo "Вы отлично помните!\\n";
}
?>