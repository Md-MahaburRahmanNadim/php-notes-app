<?php
function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}
function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

/**
 * as always unauthorize code 403 why here we use a status code?
 * 
 * sometime we dont brize the info our app. Mening sometime we dont like many info what user are doing.
 * 
 * there we may not sent any code
 */
function authorize($condtion, $status = Response::FORBIDDEN)
{
    if (!$condtion) {
        abort($status);
    }
}
