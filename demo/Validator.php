<?php
class Validator
{
    public function string($value)
    {
        // its work but we can send a empty space with is not good
        $value = trim($value);
        return strlen($value) > 0 && strlen($value) <= 1000;
    }
}
