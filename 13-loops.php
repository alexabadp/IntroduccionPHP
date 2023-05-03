<?php include 'includes/header.php';

// While

$i = 0;

while ($i < 10) {
    echo $i . '<br>';
    $i++;
};

echo '<br>';

//Do While
$i = 0;

do {
    echo $i . '<br>';
    $i++;
} while ($i < 10);

/** 
 * 3 imprimir Fizz
 * 5 imprimir Buzz
 * 3 y 5 imprimir Fizz Buzz
 */

// For Loop
// for ($i = 1; $i < 100; $i++) {
//     if ($i % 15 === 0) {
//         echo $i . ' - Fizz Buzz <br/>';
//     } else if ($i % 3 === 0) {
//         echo $i . ' - Fizz <br/>';
//     } else if ($i % 5 === 0) {
//         echo $i . ' - Buzz <br/>';
//     }
// }

// For Each
$clientes  = array('Pedro', 'Juan', 'Karen');

foreach ($clientes as $cliente) {
    echo $cliente . '<br>';
}

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'tipo' => 'Premium',
];

foreach ($cliente as $key => $valor) :
    echo $key . " - " . $valor . '<br>';
endforeach;

include 'includes/footer.php';
