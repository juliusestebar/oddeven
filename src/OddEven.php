<?php

namespace YourName\OddEven;

class OddEven
{
    /**
     * Determine if a number is odd.
     *
     * @param int $number
     * @return bool
     */
    public function isOdd(int $number): bool
    {
        return $number % 2 !== 0;
    }

    /**
     * Determine if a number is even.
     *
     * @param int $number
     * @return bool
     */
    public function isEven(int $number): bool
    {
        return $number % 2 === 0;
    }
}
