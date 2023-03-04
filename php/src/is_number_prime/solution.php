<?php

namespace App\is_number_prime;

function is_prime(int $n): bool {
    if ($n <= 1) {
        return false;
    }
    for ($i=2; $i<$n/2; $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    return true;
}