<?php

declare(strict_types=1);

include 'includes/header.php';

function sumar(int $numero1, int $numero2 = 0)
{
    echo $numero1 + $numero2;
}

sumar(10, 20);

include 'includes/footer.php';
