<?php
function calculate($expr) {
    $expr = trim($expr);
    if ($expr === '') return '0';

    // Проверка
    if (!preg_match('/^[0-9+\-*/().\s]+$/', $expr)) {
        return 'Ошибка: недопустимые символы';
    }
    $expr = str_replace(' ', '', $expr);
    // Рекурсивный расчет
    return evaluate($expr);
}

function evaluate($expr) {
    // Скобки
    while (strpos($expr, '(') !== false) {
        $expr = preg_replace_callback('/\(([^()]+)\)/', function ($matches) {
            return evaluate($matches[1]);
        }, $expr);
    }

    // Умножение и деление
    while (preg_match('/(-?\d+(\.\d+)?)([*\/])(-?\d+(\.\d+)?)/', $expr, $m)) {
        $left = $m[1];
        $op = $m[3];
        $right = $m[4];
        $result = ($op === '*') ? $left * $right : $left / $right;
        $expr = preg_replace('/' . preg_quote($m[0], '/') . '/', $result, $expr, 1);
    }

    // Сложение и вычитание
    while (preg_match('/(-?\d+(\.\d+)?)([+\-])(\d+(\.\d+)?)/', $expr, $m)) {
        $left = $m[1];
        $op = $m[3];
        $right = $m[4];
        $result = ($op === '+') ? $left + $right : $left - $right;
        $expr = preg_replace('/' . preg_quote($m[0], '/') . '/', $result, $expr, 1);
    }

    return $expr;
}

$result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['expression'])) {
    $expression = $_POST['expression'];
    $calculated = calculate($expression);
    header("Location: ?result=" . urlencode($calculated));
    exit;
}

if (isset($_GET['result'])) {
    $result = $_GET['result'];
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Калькулятор</title>
  <style>
    body {
      font-family: sans-serif;
      display: flex;
      justify-content: center;
      margin-top: 50px;
    }
    .calculator {
      width: 240px;
    }
    #display {
      width: 100%;
      height: 40px;
      font-size: 18px;
      text-align: right;
      padding: 10px;
      margin-bottom: 10px;
      background: #eee;
      border: 1px solid #ccc;
    }
    .buttons button {
      width: 25%;
      height: 40px;
      font-size: 18px;
      margin: 1px;
    }
  </style>
</head>
<body>

<div class="calculator">
  <div id="display"><?= htmlspecialchars($result) ?></div>
  <form id="calcForm" method="POST">
    <input type="hidden" name="expression" id="expression">
    <div class="buttons">
      <?php
      $buttons = [
          '7', '8', '9', '/',
          '4', '5', '6', '*',
          '1', '2', '3', '-',
          '0', '(', ')', '+'
      ];
      foreach ($buttons as $b) {
          echo "<button type='button' onclick='append(\"$b\")'>$b</button>";
      }
      ?>
      <button type="button" onclick="clearDisplay()">C</button>
      <button type="submit">=</button>
    </div>
  </form>
</div>

<script>
  let display = document.getElementById('display');
  let expressionInput = document.getElementById('expression');

  function append(val) {
    display.textContent += val;
  }

  function clearDisplay() {
    display.textContent = '';
  }

  document.getElementById('calcForm').addEventListener('submit', function(e) {
    expressionInput.value = display.textContent;
  });
</script>

</body>
</html>
