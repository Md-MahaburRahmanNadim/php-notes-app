<?php
class Validator
{
    /**
     * Uses only inputs → Changes nothing → Always predictable (same output) = Pure Function
     * 
     * A pure function is a foundational concept in computer programming where a function's output relies exclusively on its input arguments, and it does not alter any state or variables outside its local scope
     * 
     * Deterministic Output: Given the exact same set of arguments, the function will always return the same result. For example, 2 + 2 will always equal 4.
     * 
     * No Side Effects: The function does not modify anything outside itself. It cannot alter external variables, write to databases, make API calls, or modify its own input parameters.
     * 
     * https://www.youtube.com/watch?v=fYbhD_KMCOg
     */
    public static function  string($value)
    {
        // its work but we can send a empty space with is not good
        $value = trim($value);
        return strlen($value) > 0 && strlen($value) <= 1000;
    }
    public static function email($value)
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
