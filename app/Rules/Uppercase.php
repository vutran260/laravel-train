<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Uppercase implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // condition to be "PASSED"
        return strtoupper($value) == $value; // viet HOA
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The food's name must be UPPERCASE.";
    }
}
