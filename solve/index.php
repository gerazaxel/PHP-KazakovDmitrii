<?php
function findX($expression) {
    $expression = str_replace(' ', '', $expression);
    $parts = preg_split('/(\*|\+|\-|\=|\:)/', $expression, -1, PREG_SPLIT_DELIM_CAPTURE);

    $operator = $parts[1]; 
    $operand1 = $parts[0];
    $operand2 = $parts[2]; 
    $result = $parts[4]; 

    if ($operand1 == 'x') {
        switch ($operator) {
            case '*':
                return $result / $operand2;
            case '+':
                return $result - $operand2;
            case '-':
                return $result + $operand2;
            case '/':
                return $result * $operand2;
        }
    } elseif ($operand2 == 'x') {
        switch ($operator) {
            case '*':
                return $result / $operand1;
            case '+':
                return $result - $operand1;
            case '-':
                return $operand1 - $result;
            case '/':
                return $operand1 / $result;
        }
    }
    return "Не удалось решить уравнение";
}
$inputExpression = "x + 3 = 7";
echo "<p>Уравнение: $inputExpression</p>";    
echo "<p>Решение: x = " . findX($inputExpression) . "</p>";    
?>