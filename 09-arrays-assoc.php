<?php include 'includes/header.php';

$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));

// Ordenar elmentos de un arreglo
$numeros = array(1, 3, 4, 5, 1, 2);
sort($numeros); // de menor a  mayor
rsort($numeros); // de mayor a menor

echo '<pre>';
var_dump($numeros);
echo '</pre>';

// Ordenar arreglo asociativo
$cliente = array(
    'saldo' => 200,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

echo '<pre>';
var_dump($cliente);
echo '</pre>';

asort($cliente); // Orden alfabetico de los valores
arsort($cliente); // Orden alfabetico invertido de los valores
ksort($cliente); // Orden alfabetico de las llaves
krsort($cliente); // Orden alfabetico invertido de las llaves

echo '<pre>';
var_dump($cliente);
echo '</pre>';

include 'includes/footer.php';
