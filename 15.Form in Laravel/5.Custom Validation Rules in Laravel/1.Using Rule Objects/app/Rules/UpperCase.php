<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UpperCase implements Rule
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

    //  Rule Creation
    public function passes($attribute, $value)
    {
        $upperData = strtoupper($value);
        return $upperData === $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    // Message of  rule failure
    public function message()
    {
        return 'The :attribute must be upper case.';
    }
}
