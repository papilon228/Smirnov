<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Программирование на языке PHP</title>
</head>
<body>
	
	<h1>Основы программирования</h1>
	<h2>Переменные</h2>
	
	<?php
		// определение переменных
		$num1 = 952;
		$num2 = 4;
		$num3 = 476;
		$num4 = 7;
		$result_addition = 196;
		// расчет выражения
		$division1 = $num1 / $num2; // 952 / 4
		$division2 = $num3 / $num4; // 476 / 7

		// вывод расчетного значения в браузер
		$result = ($division1 * 3) - $division2 + $result_addition;
		echo "Итоговый результат: " . $result;
	?>
	

</body>
</html>