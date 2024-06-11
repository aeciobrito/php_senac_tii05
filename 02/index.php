<?php
//// Números e Operadores

# Operações básicas
$num1 = 10;
$num2 = 5;

# soma
$soma = $num1 + $num2;
echo "Soma: $soma <br>";

# subtração
$subtracao = $num1 - $num2;
echo "Subtração: $subtracao <br>";

# multiplicação
$multiplicacao = $num1 * $num2;
echo "Multiplicação: $multiplicacao <br>";

# divisão
$divisao = $num1 / $num2;
echo "Divisão: $divisao <br>";

// Operações Incrementais e Decrementais
$num = 8;

# Incremento
$num++;
echo "Incremento: $num <br>";

# Decremento
$num--;
echo "Decremento: $num <br>";

// Operadores de Compração
$num1 = 4;
$num2 = 4;

# Igual a #1
echo "Igual a: ";
if($num1 == $num2) {
    echo "verdadeiro <br>";
} else {
    echo "falso <br>";
}

# Igual a # 2
$resultado =  $num1 == $num2;
echo "Igual a: $resultado <br>";

# Igual a # 3
echo "Igual a: ";
echo $num1 == $num2 ? "verdadeiro <br>" : "falso <br>";

# Diferente de 
echo "Diferente de: ";
echo $num1 != $num2 ? "verdadeiro <br>" : "falso <br>";

# Maior que
echo "Maior que: ";
echo $num1 > $num2 ? "verdadeiro <br>" : "falso <br>";

# Menor ou igual a
echo "Menor ou igual: ";
echo $num1 <= $num2 ? "verdadeiro <br>" : "falso <br>";

// Operadores lógicos:
echo "Operadores lógicos: <br>";
$condicao1 = true;
$condicao2 = false;

# E lógico (AND)
echo "E lógico (AND): ";
echo $condicao1 && $condicao2 ? "verdadeiro <br>" : "falso <br>";

# OU lógico (OR)
echo "E lógico (OR): ";
echo $condicao1 || $condicao2 ? "verdadeiro <br>" : "falso <br>";

# NÃO lógico (NOT)
echo "Não lógico (NOT) para a segunda condição: ";
echo !$condicao2 ? "verdadeiro <br>" : "falso <br>";
?>