<?php

declare(strict_types=1);

namespace Pyivanov\PasswordPackage;

use Random\RandomException;

class PasswordGenerator
{
    /**
     * A PHP function that will generate a secure random password.
     *
     * @param int $length The length that you want your random password to be.
     * @return string The random password.
     * @throws RandomException
     */
    public function generate(int $length): string
    {
        //A list of characters that can be used in our
        //random password.
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!-.[]?*()';

        //Create a blank string.
        $password = '';

        //Get the index of the last character in our $characters string.
        $characterListLength = mb_strlen($characters, '8bit') - 1;

        //Loop from 1 to the $length that was specified.
        foreach (range(1, $length) as $i) {
            $password .= $characters[random_int(0, $characterListLength)];
        }

        return $password;
    }
}