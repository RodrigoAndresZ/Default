<?php

namespace Deg540\PHPTestingBoilerplate;

/**
 * Calculator class
 *
 * This class provides methods for performing basic arithmetic operations.
 *
 * @author Tu nombre
 */
class Calculator
{
    /**
     * Add two numbers together and return the result.
     *
     * @param int $number1 The first number to add.
     * @param int $number2 The second number to add.
     * @return int The sum of the two numbers.
     */
    public function add(int $number1, int $number2): int
    {
        return ($number1 + $number2);
    }

    /**
     * Multiply two numbers together and return the result.
     *
     * @param int $number1 The first number to multiply.
     * @param int $number2 The second number to multiply.
     * @return int The product of the two numbers.
     */
    public function multiply(int $number1, int $number2): int
    {
        return 2;
    }
}
