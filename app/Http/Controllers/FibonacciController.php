<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function calculate($n)
    {
        if ($n < 0) {
            return response()->json(['error' => 'El índice debe ser un número positivo.'], 400);
        }

        $fibonacci = $this->getFibonacciValue($n);

        return response()->json(['value' => $fibonacci]);
    }

    private function getFibonacciValue($n)
    {
        if ($n == 0) {
            return 0;
        } elseif ($n == 1) {
            return 1;
        } else {
            return $this->getFibonacciValue($n - 1) + $this->getFibonacciValue($n - 2);
        }
    }
}
