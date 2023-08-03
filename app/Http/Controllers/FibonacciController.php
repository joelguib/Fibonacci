<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{
    public function calculate($n)
    {
        // Validate if index is negative and return an error
        if ($n < 0) {
            return response()->json(['error' => 'El índice debe ser un número positivo.'], 400);
        }
        //Obtain the Fibonacci value for the given index
        $fibonacci = $this->getFibonacciValue($n);
        // Return Fibonacci value in JSON format
        return response()->json(['value' => $fibonacci]);
    }
    // Private method that calculates the Fibonacci value using a recursive approach
    private function getFibonacciValue($n)
    {
        // Base cases for indexes 0 and 1
        if ($n == 0) {
            return 0;
        } elseif ($n == 1) {
            return 1;
        } else {
            // Recursive case: sum of the previous two Fibonacci values
            return $this->getFibonacciValue($n - 1) + $this->getFibonacciValue($n - 2);
        }
    }
}
